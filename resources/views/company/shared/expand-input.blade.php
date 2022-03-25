<div class="form-group">
    <div class="grow-wrap {{ $inputcolor }} {{ $inputfont }}"
        data-replicated-value="{{ $activeQuestion->$inputid }}"
    >
        <textarea class="hideable" wire:change="submitForm" placeholder="{{ $inputname }}" wire:model.defer="activeQuestion.{{ $inputid }}" name="{{ $inputid }}" id="{{ $inputid }}" onInput="this.parentNode.dataset.replicatedValue = this.value" rows="{{ $inputrows }}" maxlength="{{ $inputchars }}" autocomplete="off" data-lpignore="true"></textarea>
        <span class="inline-edit {{ $inputbordercolor }}">  </span>
        <label class="{{ $inputcolor }}" for="{{ $inputid }}">{{ $inputname }}</label>
    </div>
    @error('{{ $inputid }}')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


