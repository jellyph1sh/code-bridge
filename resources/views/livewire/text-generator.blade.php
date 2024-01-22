<div>
    <input class="input_button_1" type="text" name="number-of-word" wire:model="input">
    <input class="submit-btn" type="submit" value="Generate" wire:click="textGenerator">
    <p>Input: {{ $input }}</p>
    <p>Result: {{ $result }}</p>
    <p>Error: {{ $error }}</p>
</div>
    