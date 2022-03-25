<div class="form-group">
    <div class="position-relative">
        <textarea wire:change="submitForm" wire:model.defer="survey.{{ $inputid }}" name="{{ $inputid }}" rows="{{ $inputrows }}"
            maxlength="{{ $inputchars }}" autocomplete="off" data-lpignore="true"
            data-form-type="text"
            class="{{ $inputfont }} {{ $inputcolor }} form-control-inline-edit full @error('{{ $inputid }}') is-invalid @enderror">{{ old('$inputid', $survey->$inputid) }}</textarea>
        <span class="inline-edit {{ $inputbordercolor }}"></span>
        <label for="{{ $inputid }}"><span class="{{ $inputcolor }} {{ $inputfont }}">{{ $inputname }}</span></label>
        @error('{{ $inputid }}')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

