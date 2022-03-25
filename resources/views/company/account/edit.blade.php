@extends('layouts.company')

@section('content')




<div class="hm-top">

<div class="hm-cam-head">
<h1>{{ __('Your account') }}</h1>
        <p>Update your name, email or password ...</p>
     </div>




					<form method="POST" action="{{ route('company.account.update',$user) }}">
						{{csrf_field()}}
						@method('PUT')

                        <div class="setup setup-light">

                            <div class="form-group stay-input">
                                <label class="" for="name">{{ __('Name') }}</label>
                                <input type="text" id="name"
                                    autocomplete="off" data-lpignore="true" data-form-type="text"
                                    class="font-body color-dark form-control-inline-edit full @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}"
                                    >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>



                            <div class="form-group stay-input">
                                <label class="" for="email">{{ __('Email') }}</label>
                                <input type="email" id="email"
                                    autocomplete="off" data-lpignore="true" data-form-type="email"
                                    class="font-body color-dark form-control-inline-edit full @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}"
                                    >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>


                            <div class="form-group stay-input">
                                <label class="" for="password">{{ __('Password') }}</label>
                                <input type="password" id="password"
                                    autocomplete="off" data-lpignore="true" data-form-type="text"
                                    class="font-body color-dark form-control-inline-edit full @error('password') is-invalid @enderror" name="password"
                                    >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group text-center">
                            <button type="submit" class="button-submit">{{ __('Update') }}</button>
                            </div>

                        </div>

							<!-- <div class="form-group row">
								<label for="name" class="col-sm-12 text-sm-right col-form-label mb-n5">
                                <span
                                    class="x-small text-black-60">{{ __('Name') }}</span></label>
								<div class="col-sm-12">
									<input type="text" class="form-control form-control-underline @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}">
									@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div> -->
							<!-- <div class="form-group row">
								<label for="email" class="col-sm-12 text-sm-right col-form-label mb-n5"><span
                                    class="x-small text-black-60">{{ __('Email') }}</span></label>
								<div class="col-sm-12">
									<input type="email" class="form-control form-control-underline @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}">
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label for="password" class="col-sm-12 text-sm-right col-form-label mb-n5"><span
                                    class="x-small text-black-60">{{ __('Password') }}</span></label>
								<div class="col-sm-12">
									<input type="password" class="form-control form-control-underline @error('password') is-invalid @enderror" name="password">
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>-->






					</form>


</div>


@endsection
