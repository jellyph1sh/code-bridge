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
    @error('min')
        <div>Min value can't be null.</div>
    @enderror
    @error('max')
        <div>Max value can't be null.</div>
    @enderror
    <p>{{ $error }}</p>
</div>
