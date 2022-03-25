@extends('layouts.app')

@section('body-class', 'hold-transition register-page bg-dark')

@section('content')
    @if (session('status'))
    <div class="note-one" role="alert">
        <p>{{ session('status') }}</p>
    </div>
    @endif
<div class="reg-cont">
    <div class="reg-mid">

        <div class="reg-head">

            <a class="reg-logo" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="170.826" height="36" viewBox="0 0 170.826 36">
                    <g id="Group_8597" data-name="Group 8597" transform="translate(3.999 -10.085)">
                        <path id="Rectangle_4113" data-name="Rectangle 4113"
                            d="M0,0H36a0,0,0,0,1,0,0V36a0,0,0,0,1,0,0H15A15,15,0,0,1,0,21V0A0,0,0,0,1,0,0Z"
                            transform="translate(-3.999 10.085)" fill="#2b8dd8"></path>
                        <path id="Path_66" data-name="Path 66"
                            d="M14.7-2.663H10.863L.378-18.009H4.216ZM7.414-12.119l3.655-5.89h3.495L9.1-9.749Zm.64,2.853L3.9-2.663H.469l5.8-8.7Z"
                            transform="translate(12.109 42.543)" fill="#fff"></path>
                        <path id="Path_65" data-name="Path 65"
                            d="M41.715-3.254V-18.067H51.783v2.421H44.8v3.753h6.081V-9.45h-6.1v3.775h7v2.421Zm25.626,0V-18.067h2.748l8.2,11.037-.878,1.777V-18.067H80.27V-3.254h-2.5l-8.379-11.1.811-1.355V-3.254Zm35.2.266A8.263,8.263,0,0,1,98.7-3.82a5.6,5.6,0,0,1-2.466-2.532,9.522,9.522,0,0,1-.856-4.3,8.005,8.005,0,0,1,1.858-5.741,6.994,6.994,0,0,1,5.3-1.943,8.263,8.263,0,0,1,3.84.833,5.6,5.6,0,0,1,2.466,2.532,9.522,9.522,0,0,1,.856,4.3,8.005,8.005,0,0,1-1.858,5.741A6.994,6.994,0,0,1,102.54-2.987Zm0-2.532a4.4,4.4,0,0,0,2.219-.511,3.15,3.15,0,0,0,1.34-1.654,8.281,8.281,0,0,0,.45-2.987,8.171,8.171,0,0,0-.45-2.987,3.153,3.153,0,0,0-1.34-1.632,4.4,4.4,0,0,0-2.219-.511,4.325,4.325,0,0,0-2.219.522,3.21,3.21,0,0,0-1.34,1.643,8.171,8.171,0,0,0-.45,2.987,8.171,8.171,0,0,0,.45,2.987,3.152,3.152,0,0,0,1.34,1.632A4.4,4.4,0,0,0,102.54-5.519Zm22.27,2.265V-18.067h3.153l5.271,7.462-1.712.111,5.5-7.573H140.1V-3.254H137.04V-15.668l.7.8L132.31-7.607l-5.271-7.284.721-.622V-3.254Zm31.009,0V-18.067h10.068v2.421H158.9v3.753h6.081V-9.45h-6.1v3.775h7v2.421Z"
                            transform="translate(0.94 42.888)" fill="#010910"></path>
                    </g>
                </svg>
            </a>

            <!-- <h3>{{ __('Welcome back') }}</h3> -->
            <p>{{ __('Reset password – send a reset link') }}
            </p>
        </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group mb-3">
                    <input type="email" class="fs-xs rounded-3 form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="button-submit">{{ __('Send') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
