<div>
    <input class="input_button_1" type="text" name="number-of-word" wire:model="input">
    <input class="submit-btn" type="submit" value="Generate Word" wire:click="textGenerator">
    <p>Input: {{ $numberOfWord }}</p>
    <p>Result: {{ $result }}</p>
    <p>Error: {{ $error }}</p>
</div>
    