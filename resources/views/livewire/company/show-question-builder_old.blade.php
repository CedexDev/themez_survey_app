@section('buttonCustom')
    <div class="dropdown">
        <button class="btn-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach ($questionTypes as $type => $label)
                <a class="dropdown-item si-quadron" href="javascript:void(0);"
                    wire:click="addQuestion('{{ $survey->uuid }}', '{{ $type }}')">{{ $label }}</a>
            @endforeach
        </div>
    </div>
@endsection


<section class="position-relative">
    <div>
        <div class="" x-data="{
                    questionColor: '{{ $survey->question_color }}',
                    buttonColor : '{{ $survey->button_color }}',
                    buttonTextColor : '{{ $survey->button_text_color }}',
                    backgroundColor: '{{ $survey->background_color }}',
                    answerColor: '{{ $survey->answer_color }}'
                }" x-init="document.body.style.backgroundColor = buttonColor;">
            <div class="section-list">
                <div>

                    <div class="question-tab question-left">

                        @yield('buttonCustom')

                        <ul class="list-unstyled fs-xs text-muted mb-6">

                            @foreach ($questions as $question)
                                <li class="mb-2">


                                    <a href="javascript:void(0);" wire:click="showQuestion('{{ $question->id }}')"
                                        class="thumb-item @if ($activeQuestion && $question->id == $activeQuestion->id) active @endif"
                                        :style="`background-color: ${buttonColor};`" data-toggle="flickity"
                                        data-target="#coworkingOptions" data-slide="2">

                                        <div class="inside">

                                            <!-- <h6 class="x-small text-center text-uppercase"
                                            :style="`color: ${buttonTextColor};`">{{ $question->type }}
                                        </h6> -->
                                            <p class="mb-0 text-center" :style="`color: ${buttonTextColor}`">
                                                {{ $question->text }}</p>

                                        </div>

                                        @if ($question->videolink)
                                            <video src="{{ $question->videolink }}" playsinline="" muted=""
                                                loop=""></video>
                                        @endif
                                        @if ($question->image)
                                            <img src="{{ url('/storage/' . $question->image) }}">
                                        @endif





                                    </a>

                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <a href="#" class="close-section-list"></a>


            <div class="builder-main">




                <form wire:submit.prevent="submit">
                    <div class="" x-data="{
                        questionColor: '{{ $survey->question_color }}',
                        buttonColor : '{{ $survey->button_color }}',
                        buttonTextColor : '{{ $survey->button_text_color }}',
                        backgroundColor: '{{ $survey->background_color }}',
                        answerColor: '{{ $survey->answer_color }}'
                    }">
                        @if ($activeQuestion)


                            <div class="build-bar">


                                {{-- <button type="submit" class="btn-update"><i class="far fa-save"></i>{{ __('Update')
                                }}</button> --}}

                            </div>

                            <div class="">
                                <div class="question-tab">


                                    <!-- start card -->
                                    <div class="card-build" :style="`background-color: ${buttonColor}`">



                                        <div class="position-relative z-index-1">



                                            <a class="dropdown-more open-builder-foot" href="#" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>





                                            <a class="dropdown-sections open-section-list" href="#"
                                                aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-menu">
                                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                                </svg>
                                            </a>







                                            <div class="form-group my-1">
                                                <div class="position-relative">
                                                    <textarea wire:keyup="submitForm" name="welcome_message" rows="2"
                                                        maxlength="50" autocomplete="off" data-lpignore="true"
                                                        data-form-type="text" data-form-type="text"
                                                        wire:model.defer="activeQuestion.text"
                                                        :style="`color: ${buttonTextColor}`,`border-color: ${buttonColor}`"
                                                        class="display-4 full text-center d-block w-100 form-control-inline-edit"></textarea>
                                                    <span class="inline-edit o-50"
                                                        :style="`border-color: ${buttonTextColor}`"></span>
                                                    <label for="welcome_message"><span
                                                            :style="`color: ${buttonTextColor}`"
                                                            class="display-4">{{ __('Title') }}</span></label>
                                                </div>
                                            </div>

                                            <div class="form-group my-1">
                                                <div class="position-relative">
                                                    <textarea wire:keyup="submitForm" name="welcome_message" rows="2"
                                                        maxlength="150" autocomplete="off" data-lpignore="true"
                                                        data-form-type="text" data-form-type="text"
                                                        wire:model.defer="activeQuestion.paragraph"
                                                        :style="`color: ${buttonTextColor}`,`border-color: ${buttonColor}`"
                                                        class="full text-center d-block w-100 form-control-inline-edit"></textarea>
                                                    <span class="inline-edit o-50"
                                                        :style="`border-color: ${buttonTextColor}`"></span>
                                                    <label for="welcome_message"><span
                                                            :style="`color: ${buttonTextColor}`">{{                                                             :style="`color: ${buttonTextColor}`">__('Description') }}</span></label>
                                                </div>
                                            </div>



                                            @if (in_array($activeQuestion->type, ['multiple-choices', 'dropdown']))
                                                <div class="py-6">
                                                    <h3 class=" mb-5 text-center" :style="`color: ${buttonTextColor}`">
                                                        Answers
                                                    </h3>
                                                    @foreach ($choices as $key => $choice)




                                                        <div class="form-group my-1">
                                                            <div class="position-relative">
                                                                <textarea name="answer-{{ $loop->iteration }}"
                                                                    rows="1" autocomplete="off" data-lpignore="true"
                                                                    data-form-type="text" data-form-type="text"
                                                                    wire:model.debounce.500ms="choices.{{ $key }}"
                                                                    :style="`color: ${buttonTextColor}`,`border-color: ${buttonColor}`"
                                                                    class="full text-center d-block w-100 form-control-inline-edit"></textarea>
                                                                <span class="inline-edit"
                                                                    :style="`border-color: ${buttonTextColor}`"></span>
                                                                <label for="answer-{{ $loop->iteration }}"><span
                                                                        :style="`color: ${buttonTextColor}`">{{                                                                         :style="`color: ${buttonTextColor}`">__('Add answer') }}</span></label>


                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                wire:key="{{ $key }}"
                                                                :style="`color: ${buttonTextColor}`"
                                                                class="delete-icon"
                                                                wire:click="deleteChoice('{{ $key }}')" wire:model.debounce.500ms="choices.{{ $key }}" >
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                </svg>
                                                            </a>
                                                        </div>

                                                        <script>
                                                            $('input,textarea, select').change(function() {
                                                                $(".build-bar").addClass("save");
                                                            });
                                                        </script>




                                                    @endforeach

                                                    @if (in_array($activeQuestion->type, ['multiple-choices', 'dropdown']))
                                                        <div class="col-md-12 text-center mx-auto pl-0 mb-30">
                                                            <button class="btn-add-answer"
                                                                :style="`color: ${buttonTextColor}; border-color: ${buttonTextColor};`"
                                                                wire:click.prevent="addChoice({{ $activeQuestion->id }})"><span
                                                                    :style="`border-color: ${buttonTextColor};`"
                                                                    style="border-color: #FDFDFD;">

                                                                </span><i class="fas fa-plus mr-2"></i><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-plus">
                                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                </svg></button>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endif


                                            <div class="py-6">
                                                <h3 class=" mb-5 text-center" :style="`color: ${buttonTextColor}`">
                                                    Background</h3>




                                                <div class="img-upload">
                                                    <label for="visibility" class="mb-3 "
                                                        :style="`color: ${buttonColor}; background-color: ${buttonTextColor};`"><span
                                                            class="x-small text-center">{{ __('Upload Image for your
                                                                                                                    question (optional)') }}</span></label>
                                                    <input type="file" :style="`color: ${buttonTextColor}`"
                                                        class="form-control form-control-inline-edit px-4 mb-3 ims"
                                                        wire:model="image">
                                                    @error('image')
                                                        <span class="error"
                                                            :style="`color: ${buttonTextColor}`">{{                                                             :style="`color: ${buttonTextColor}`">$message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="img-upload">
                                                    <label for="visibility" class="mb-3 "
                                                        :style="`color: ${buttonColor}; background-color: #2CD4A2;`"><span
                                                            class="x-small text-center">{{ __('Add from Pexels') }}</span></label>

                                                    <button type="button"
                                                        class="form-control form-control-inline-edit px-4 mb-3 ims"
                                                        data-toggle="modal" data-target="#exampleModalCenter">
                                                        Launch demo modal
                                                    </button>
                                                    <input readonly name="pixels_inp" id="pixels_inp" type="text"
                                                        :style="`color: `"
                                                        class="form-control form-control-inline-edit px-4 mb-3 ims">
                                                    @error('image')
                                                        <span class="error"
                                                            :style="`color: ${buttonTextColor}`">{{                                                             :style="`color: ${buttonTextColor}`">$message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group my-1">
                                                    <div class="position-relative">
                                                        <input wire:blur="submitForm" type="text"
                                                            class="full truncate d-block w-100  form-control-inline-edit text-center"
                                                            name="video-link" autocomplete="off" data-lpignore="true"
                                                            data-form-type="text"
                                                            wire:model.defer="activeQuestion.videolink"
                                                            wire:model.defer="activeQuestion.videolink" maxlength="200"
                                                            :style="`color: ${buttonTextColor}`">
                                                        <span class="inline-edit o-50"
                                                            :style="`border-color: ${buttonTextColor}`"></span>
                                                        <label for="video-link"><span class=""
                                                                :style="`color: ${buttonTextColor}`">{{ __('Video link
                                                                                                                            (optional)') }}</span></label>
                                                    </div>
                                                </div>


                                            </div>





                                            @if (in_array($activeQuestion->type, ['slider']))
                                                <label
                                                    for="visibility">{{ __('Enter your minimum & maximum range value for the
                                                                                                slider') }}</label>
                                                @foreach ($choices as $key => $choice)
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


                                        </div>



                                        @if ($activeQuestion->videolink)
                                            <video class="full-stretch" src="{{ $activeQuestion->videolink }}"
                                                playsinline="" muted="" loop=""></video>
                                        @endif
                                        @if ($activeQuestion->image)
                                            <img class="full-stretch"
                                                src="{{ url('/storage/' . $activeQuestion->image) }}"
                                                class="img-fluid back-img">
                                        @endif


                                    </div>
                                    <!-- end card -->

                                    <div class="builder-foot">



                                        <div class="py-6">

                                            <div class="form-group col-md-12 px-0">
                                                <label for="randomize_choice"><span
                                                        class="x-small text-black-60">{{                                                         class="x-small text-black-60">__('Visibility') }}</span></label>
                                                <select wire:model.defer="activeQuestion.visibility"
                                                    class="form-select form-control-underline">
                                                    <option value="1" selected>{{ __('Yes') }}</option>
                                                    <option value="0">{{ __('No') }}</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12 px-0">
                                                <label for="randomize_choice"><span
                                                        class="x-small text-black-60">{{                                                         class="x-small text-black-60">__('Position') }}</span></label>
                                                <select wire:model.defer="activeQuestion.position"
                                                    class="form-select form-control-underline">
                                                    @foreach (range(1, $questions->count()) as $position)
                                                        <option value="{{ $position }}" @if ($activeQuestion->position == $position)
                                                            selected
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

                    @if ($activeQuestion->attributes)
                        @if (array_key_exists('choice_selection_count', $activeQuestion->attributes))
                            <input type="hidden" wire:model.defer="activeQuestion.attributes.choice_selection_count"
                                value="1">
                        @endif

                        @if (array_key_exists('randomize_choice', $activeQuestion->attributes))
                            <div class="form-group col-md-12 px-0">
                                <label for="randomize_choice"><span
                                        class="x-small text-black-60">{{                                         class="x-small text-black-60">__('Randomize choice') }}</span></label>
                                <select wire:model.defer="activeQuestion.attributes.randomize_choice"
                                    class="form-select form-control-underline">
                                    <option value="1" selected>{{ __('Yes') }}</option>
                                    <option value="0">{{ __('No') }}</option>
                                </select>
                            </div>
                        @endif

                        <!-- @if (array_key_exists('max_chars', $activeQuestion->attributes))
                                        <div class="form-group col-md-12 px-0">
                                            <label for="max_chars"><span
                                                    class="x-small text-black-60">{{ __('Maximum Characters') }}</span></label>
                                            <input type="text" class="form-control"
                                                wire:model.defer="activeQuestion.attributes.max_chars">
                                        </div>
                                        @endif -->

                        @if (array_key_exists('date_format', $activeQuestion->attributes))
                            <div class="form-group col-md-12 px-0">
                                <label for="date_format"><span
                                        class="x-small text-black-60">{{ __('Date
                                                                                            Format') }}</span></label>
                                <select wire:model.defer="activeQuestion.attributes.date_format"
                                    class="form-select form-control-underline">
                                    <option value="MMDDYYYY" selected>MMDDYYYY</option>
                                    <option value="DDMMYYYY">DDMMYYYY</option>
                                    <option value="YYYYMMDD">YYYYMMDD</option>
                                </select>
                            </div>
                        @endif

                        @if (array_key_exists('alphabetical_order', $activeQuestion->attributes))
                            <div class="form-group col-md-12 px-0 ">
                                <label for="alphabetical_order"><span
                                        class="x-small text-black-60">{{                                         class="x-small text-black-60">__('Alphabetical Order') }}</span></label>
                                <select wire:model.defer="activeQuestion.attributes.alphabetical_order"
                                    class="form-select form-control-underline">
                                    <option value="1" selected>{{ __('Yes') }}</option>
                                    <option value="0">{{ __('No') }}</option>
                                </select>
                            </div>
                        @endif
                    @endif

                    <a href="javascript:void(0);" class="dropdown-item"
                        wire:click="deleteQuestion('{{ $activeQuestion->id }}')">
                        Delete section
                    </a>
            </div>



        </div>
        <button type="submit" class="close-builder-foot"></button>






    </div>
    </div>





@else





    <div class="card-build">
        <!-- <h2 class=" mb-5">Add your first question</h2> -->

        <div class="dropdown">
            <button class="btn-add" type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" :style="`color: ${buttonTextColor};`">
                <span :style="`border-color: ${buttonTextColor};`">

                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($questionTypes as $type => $label)
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


    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <div class="col-lg-10">
                        <form id="search_form" action="">
                            <input type="text" name="search" id="search" class="form-control">
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-sm btn-primary">Search</button>
                        </form>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="img_list" class="row">

                        <div class="col-lg-3">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div id="pexels_pagination" class="col-lg-12">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>



    <style>
        .pexel-img:hover {
            box-shadow: 2px 2px 2px 2px black;
        }

    </style>


    <script>
        // curl -H "Authorization: 563492ad6f9170000100000109ad9a3724a7430983aa2f5c5978a7e1" \
        //   "https://api.pexels.com/v1/search?query=nature&per_page=1"

        let search_form = document.getElementById('search_form')
        let search = document.getElementById('search')
        let pexels_pagination = document.getElementById('pexels_pagination')
        let pixels_inp = document.getElementById('pixels_inp')

        let pxls_total_results = 0
        let pxls_per_page = 0
        let pxls_pages = 0

        let current_page = 0

        search_form.onsubmit = function() {
            event.preventDefault()

            if (search.value) {
                pexelsSearch(search.value)
            }

        }

        pexelsSearch()

        function makePagination() {
            let pages = Math.ceil(pxls_total_results / pxls_per_page)
            let search_val = search.value ? search.value : 'random'
            console.log('pages', pages);
            let pg_str = ''
            for (let i = 0; i < pages; i++) {
                pg_str +=
                    ` <button ${(i+1)==current_page?'disabled':''} onclick="pexelsSearch('${search_val}',${i+1})">${i+1}</button> `

            }
            console.log(pg_str);
            pexels_pagination.innerHTML = pg_str
        }

        function pexelsSearch(search = 'random', page = 1) {
            current_page = page
            let img_list = document.getElementById('img_list')

            let url = 'https://api.pexels.com/v1/search?query=' + search + '&page=' + page;
            let api_key = '563492ad6f9170000100000109ad9a3724a7430983aa2f5c5978a7e1'
            fetch(url, {
                    method: "GET",
                    headers: {
                        "Authorization": api_key
                    }
                })
                .then(res => {
                    return res.json()
                })
                .then(res => {
                    console.log(res);
                    if (res.photos) {
                        pxls_total_results = res.total_results;
                        pxls_per_page = res.per_page

                        makePagination();



                        let img_str = res.photos.map(photo => {
                            return (
                                `
            <div class="col-lg-3 mb-3">
                  <img onclick="imgClick('${photo.src.original}')" class="pexel-img"
                    style="cursor:pointer; width:200px;height:200px;" src="${photo.src.small}" alt="${photo.id}">
              </div>
            `
                            )

                        }).join('')

                        // console.log(img_str);
                        img_list.innerHTML = img_str

                    }

                })
                .catch(err => {
                    console.log(err);
                })
        }


        function imgClick(img) {
            console.log(img);
            let pixels_inp = document.getElementById('pixels_inp')
            pixels_inp.value = img
            document.getElementById('exampleModalCenter').classList.remove('show')
            document.querySelector('.modal-backdrop.fade.show').style.display = "none"
            // $('#exampleModalCenter').modal('hide')
            // $('body').removeClass('modal-open');
            // $('.modal-backdrop').remove();

        }
    </script>





</section>
