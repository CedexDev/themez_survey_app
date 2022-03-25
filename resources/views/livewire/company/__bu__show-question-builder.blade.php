@section('buttonCustom')
<div class="dropdown">
    <button class="btn btn-outline-primary dropdown-toggle btn-sm mb-6" type="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-plus">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg></button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($questionTypes as $type => $label)
        <a class="dropdown-item si-quadron" href="javascript:void(0);"
            wire:click="addQuestion('{{ $survey->uuid }}', '{{ $type }}')">{{ $label }}</a>
        @endforeach
    </div>
</div>
@endsection


<section>
    <div class="container-fluid">
        <div class="row align-items-start">


            <div class="col-lg-4 col-xl-3 docs-sidenav docs-sidenav-start ps-lg-10 py-lg-10">
                <div class="collapse d-lg-block" id="docsSidenav">

                    <div class="question-tab question-left">
                        <h2 class=" mb-6">
                            Sections <div class="float-end">
                                @yield('buttonCustom')
                            </div>
                        </h2>
                        <ul class="list-unstyled fs-xs text-muted mb-6">



                            @foreach($questions as $question)
                            <li class="mb-2">


                                <a href="javascript:void(0);" wire:click="showQuestion('{{ $question->id }}')"
                                    class="text-reset d-block  ps-5 border-start-3 @if($activeQuestion && $question->id == $activeQuestion->id) fw-bold  border-primary @endif si-quadron"
                                    data-toggle="flickity" data-target="#coworkingOptions" data-slide="2">

                                    <!-- @if ($question->image)

<img class="rounded-1" width="50" height="50" src="{{url('/storage/'.$question->image) }}">
@endif  -->
                                    {{ $question->text }}
                                    <!-- {{ $question->paragraph }} -->
                                </a>



                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-xl-6 offset-lg-4 offset-xl-3 py-6 py-md-10 px-lg-10">




                <form wire:submit.prevent="submit">
                    <div class="row" x-data="{
                    questionColor: '{{ $survey->question_color}}',
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}',
                    answerColor: '{{ $survey->answer_color }}'
                }">
                        @if($activeQuestion)
                        <div class="col-lg-12">
                            <div class="question-tab">


                                <!-- start card -->
                                <div class="card p-6 mb-10" :style="`background-color: ${buttonColor}`">






                                <div class="form-group my-1">
                                    <div class="position-relative">
                                        <input type="text"
                                            class="display-4 full d-block w-100  form-control-inline-edit text-center"
                                            name="title" autocomplete="off" data-lpignore="true" data-form-type="text"
                                            wire:model.defer="activeQuestion.text" required="required"
                                            maxlength="200" :style="`color: ${buttonTextColor}`">
                                        <span class="inline-edit o-50" :style="`border-color: ${buttonTextColor}`"></span>
                                        <label for="title"><span class="display-4"
                                                :style="`color: ${buttonTextColor}`">{{ __('Title') }}</span></label>
                                    </div>
                                </div>

                                <div class="form-group my-1">
                                    <div class="position-relative">
                                        <textarea name="welcome_message" rows="1" autocomplete="off"
                                            data-lpignore="true" data-form-type="text" data-form-type="text"
                                            wire:model.defer="activeQuestion.paragraph"
                                            :style="`color: ${buttonTextColor}`,`border-color: ${buttonColor}`"
                                            class="full text-center d-block w-100 form-control-inline-edit"></textarea>
                                        <span class="inline-edit o-50" :style="`border-color: ${buttonTextColor}`"></span>
                                        <label for="welcome_message"><span
                                                :style="`color: ${buttonTextColor}`">{{ __('Description') }}</span></label>
                                    </div>
                                </div>





















                                @if(in_array($activeQuestion->type, ['multiple-choices', 'dropdown', 'yes-no']))
                                <div class="py-6">
                                    <h3 class=" mb-5 text-center" :style="`color: ${buttonTextColor}`">Answers</h3>
                                    @foreach($choices as $key => $choice)




                                        <div class="form-group my-2">
                                            <div class="position-relative">
                                                <textarea name="answer-{{ $loop->iteration }}" rows="1" autocomplete="off"
                                                    data-lpignore="true" data-form-type="text" data-form-type="text"
                                                    wire:model.debounce.500ms="choices.{{ $key }}"
                                                    :style="`color: ${buttonTextColor}`,`border-color: ${backgroundColor}`"
                                                    class="full text-center d-block w-100 form-control-inline-edit rounded-100"></textarea>
                                                <span class="inline-edit rounded-pill" :style="`border-color: ${backgroundColor}`"></span>
                                                <label for="answer-{{ $loop->iteration }}"><span
                                                        :style="`color: ${buttonTextColor}`">{{__('Add answer')}}</span></label>
                                            </div>
                                        </div>




                                            @if($activeQuestion->type != 'yes-no')
                                            <div class="col-md-2 col-2 mb-3">
                                                <a href="javascript:void(0);" wire:key="{{ $key }}"
                                                    class="border-0 bg-transparent float-left"
                                                    wire:click="deleteChoice('{{ $key }}')">
                                                    <i class="fas fa-trash-alt text-danger btn-sm"></i>
                                                </a>
                                            </div>
                                            @endif



                                    @endforeach

                                    @if(in_array($activeQuestion->type, ['multiple-choices', 'dropdown']))
                                    <div class="col-md-12 text-left mx-auto pl-0 mb-30">
                                        <button class="btn btn-outline-primary btn-sm"
                                            wire:click.prevent="addChoice({{ $activeQuestion->id }})"><i
                                                class="fas fa-plus mr-2"></i><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg></button>
                                    </div>
                                    @endif
                                </div>
                                @endif


                                <div class="py-6">
                                    <h3 class=" mb-5 text-center" :style="`color: ${buttonTextColor}`">Background</h3>




                                    <div class="col-md-12 px-0 mb-3 mt-1">
                                        <label for="visibility" class="mb-3"><span
                                                class="x-small text-black-60">{{ __('Upload Image for your question (optional)') }}</span></label>
                                        <input type="file" class="form-control form-control-underline px-4 mb-3 ims"
                                            wire:model="image">
                                        @error('image')
                                        <span class="error">{{ $message }}</span>
                                        @enderror


                                        @if ($activeQuestion->videolink)
                                        <video src="{{ $question->videolink }}" playsinline="" muted=""
                                            loop=""></video>
                                        @endif
                                        @if ($activeQuestion->image)
                                        <img src="{{url('/storage/'.$question->image) }}" class="img-fluid back-img">
                                        @endif
                                    </div>
                                    <div class="col-md-12 px-0 mb-3 mt-1">
                                        <label for="answer_color"
                                            class="col-12 text-sm-right col-form-label mb-n5"><span
                                                class="x-small text-black-60">{{ __('Or use a video link') }}</span></label>
                                        <textarea class="form-control form-control-underline col-md-12 mx-auto" rows="1"
                                            wire:model.defer="activeQuestion.videolink"></textarea>
                                    </div>


                                </div>





                                @if(in_array($activeQuestion->type, [ 'slider']))
                                <label
                                    for="visibility">{{ __('Enter your minimum & maximum range value for the slider') }}</label>
                                @foreach($choices as $key => $choice)
                                <div class="next-choice">
                                    <div class="col-md-12 col-12 px-0 d-flex">
                                        <div class="col-md-10 px-0">
                                            <input type="number" class="form-control"
                                                wire:model.debounce.500ms="choices.{{ $key }}">
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <br>






                            </div>
                            <!-- end card -->






                            </div>
                        </div>


                        <div class="col-lg-4 col-xl-3 d-none d-xl-block docs-sidenav docs-sidenav-end pe-lg-9 py-lg-10">

                            @if($activeQuestion)
                            <div class="form-group col-md-12 px-0 d-flex align-items-center">
                            <button type="submit" class="btn btn-primary w-100 mb-3 mt-2"><i
                                    class="far fa-save mr-2"></i>{{ __('Update') }}</button>
                            <div class="nav-item dropdown show">

                                <a class="btn btn-outline-primary ms-3" data-toggle="dropdown" href="#"
                                    aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right pro-right">
                                    <a href="javascript:void(0);" class="dropdown-item"
                                        wire:click="deleteQuestion('{{ $activeQuestion->id }}')">
                                        Delete section
                                    </a>
                                </div>
                            </div>
                            </div>
                            @endif

                            <div class="form-group col-md-12 px-0">
                                <label for="visibility"><span
                                        class="x-small text-black-60">{{ __('Visibility') }}</span></label>
                                <select wire:model.defer="activeQuestion.visibility"
                                    class="form-select form-control-underline">
                                    <option value="1" selected>{{ __('Yes') }}</option>
                                    <option value="0">{{ __('No') }}</option>
                                </select>
                            </div>

                            <!-- <div class="form-group col-md-12 px-0">
                                <label for="layout mb-n5"><span
                                        class="x-small text-black-60">{{ __('Layout') }}</span></label>
                                <select wire:model.defer="activeQuestion.layout"
                                    class="form-select form-control-underline">
                                    <option value="1" selected>{{ __('Side by side') }}</option>
                                    <option value="0">{{ __('Stacked') }}</option>
                                </select>
                            </div> -->



                            <div class="form-group col-md-12 px-0">
                                <label for="position"><span
                                        class="x-small text-black-60">{{ __('Position') }}</span></label>
                                <select wire:model.defer="activeQuestion.position"
                                    class="form-select form-control-underline">
                                    @foreach(range(1, $questions->count()) as $position)
                                    <option value="{{ $position }}" @if($activeQuestion->position == $position) selected
                                        @endif>{{ $position }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- <div class="form-group col-md-12 px-0">
                                <label for="required">{{ __('Required') }}</label>
                                <select wire:model.defer="activeQuestion.is_required" class="form-control">
                                    <option value="1" selected>{{ __('Yes') }}</option>
                                    <option value="0">{{ __('No') }}</option>
                                </select>
                            </div> -->

                            @if($activeQuestion->attributes)
                            @if(array_key_exists('choice_selection_count', $activeQuestion->attributes))
                            <input type="hidden" wire:model.defer="activeQuestion.attributes.choice_selection_count"
                                value="1">
                            @endif

                            @if(array_key_exists('randomize_choice', $activeQuestion->attributes))
                            <div class="form-group col-md-12 px-0">
                                <label for="randomize_choice"><span
                                        class="x-small text-black-60">{{ __('Randomize choice') }}</span></label>
                                <select wire:model.defer="activeQuestion.attributes.randomize_choice"
                                    class="form-select form-control-underline">
                                    <option value="1" selected>{{ __('Yes') }}</option>
                                    <option value="0">{{ __('No') }}</option>
                                </select>
                            </div>
                            @endif

                            @if(array_key_exists('max_chars', $activeQuestion->attributes))
                            <div class="form-group col-md-12 px-0">
                                <label for="max_chars"><span
                                        class="x-small text-black-60">{{ __('Maximum Characters') }}</span></label>
                                <input type="text" class="form-control"
                                    wire:model.defer="activeQuestion.attributes.max_chars">
                            </div>
                            @endif

                            @if(array_key_exists('date_format', $activeQuestion->attributes))
                            <div class="form-group col-md-12 px-0">
                                <label for="date_format"><span
                                        class="x-small text-black-60">{{ __('Date Format') }}</span></label>
                                <select wire:model.defer="activeQuestion.attributes.date_format"
                                    class="form-select form-control-underline">
                                    <option value="MMDDYYYY" selected>MMDDYYYY</option>
                                    <option value="DDMMYYYY">DDMMYYYY</option>
                                    <option value="YYYYMMDD">YYYYMMDD</option>
                                </select>
                            </div>
                            @endif

                            @if(array_key_exists('alphabetical_order', $activeQuestion->attributes))
                            <div class="form-group col-md-12 px-0 ">
                                <label for="alphabetical_order"><span
                                        class="x-small text-black-60">{{ __('Alphabetical Order') }}</span></label>
                                <select wire:model.defer="activeQuestion.attributes.alphabetical_order"
                                    class="form-select form-control-underline">
                                    <option value="1" selected>{{ __('Yes') }}</option>
                                    <option value="0">{{ __('No') }}</option>
                                </select>
                            </div>
                            @endif
                            @endif



                        </div>


                        @else





                        <div class="card p-6 rounded-2 mb-5 clear text-center">
                            <img src="{{ asset('company/img/empty.png') }}" class="img-fluid">
                            <h2 class=" mb-5">Add your first question</h2>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Add question</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach($questionTypes as $type => $label)
                                    <a class="dropdown-item si-quadron" href="javascript:void(0);"
                                        wire:click="addQuestion('{{ $survey->uuid }}', '{{ $type }}')">{{ $label }}</a>
                                    @endforeach
                                </div>
                            </div>

                        </div>




                        @endif



                </form>


            </div>
        </div>
</section>
