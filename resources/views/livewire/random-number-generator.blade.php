<div>
    <style>
        .min {
            color: blue;
        }
    </style>
    <button type="button" wire:click="generateRandomNumber">Generate random number</button>
    <div class="min">
        <label for="min">Minimum number</label>
        <input id="min" type="number" value="{{ $min }}" wire:model="min">
    </div>
    <div class="max">
        <label for="max">Maximum number</label>
        <input id="max" type="number" value="{{ $max }}" wire:model="max">
    </div>
    <p>{{ $number }}</p>
    @if($errors->has('min'))
        <span>{{ $errors->first('min') }}</span>
    @endif
    @if($errors->has('max'))
        <span>{{ $errors->first('max') }}</span>
    @endif
    <p>{{ $error }}</p>
</div>
