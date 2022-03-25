@extends('layouts.company')

@section('content')

<div class="full-dark">

    <a class="close-link" href="{{ route('company.surveys.index', $survey) }}"><svg xmlns="http://www.w3.org/2000/svg"
            width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="15" y1="9" x2="9" y2="15"></line>
            <line x1="9" y1="9" x2="15" y2="15"></line>
        </svg></a>

    <form id="setup_form" onsubmit="setUpFormSubmit()" class="form-horizontal" method="POST"
        action="{{ route('company.surveys.update', $survey) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')


            <div class="edit-heading">
                <div class="form-group">
                    <div class="grow-wrap color-white" data-replicated-value="{{ $survey->title }}">
                        <textarea wire:change="submitForm" wire:model.defer="survey.title" onchange="setUpFormSubmit()"
                            name="title" id="title" onInput="this.parentNode.dataset.replicatedValue = this.value"
                            rows="1" maxlength="50" autocomplete="off"
                            data-lpignore="true">{{ old('title', $survey->title) }}</textarea>
                        <span class="inline-edit border-white"></span>
                        <label class="" for="title">Name your project</label>
                    </div>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>






        <script>
        let setup_form = document.getElementById('setup_form')

        function setUpFormSubmit() {
            event.preventDefault()

            let fd = new FormData(setup_form)
            console.log(...fd);
            console.log(setup_form.action);

            axios.post(setup_form.action, fd, {
                    "Accept": "application/json"
                })
                .then(res => {
                    console.log(res);
                    if (res.data.success) {
                        window.location.reload()
                    }
                })
                .catch(err => {
                    console.log(err);
                })

        }
        </script>





</div>
@endsection
