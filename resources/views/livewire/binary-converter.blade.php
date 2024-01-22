<div class="container">
        <div class="form-container">
          <div class="input-group_1">
            <div class="select-container_1">
                <select class="selection_1" name="base1" wire:model="base_1" selected="{{ $base_1 }}">
                    <option value="2">Binary</option>
                    <option value="8">Octal</option>
                    <option value="10">Decimal</option>
                    <option value="16">Hexadecimal</option>
                    <option value="64">Base64</option>
                </select>
            </div>
            <input class="input_button_1" type="text" name="number1" wire:model="input">
          </div>
          <div class="input-group_2">
            <div class="select-container_2">
                <select class="selection_2" name="base2" wire:model="base_2" selected="{{ $base_2 }}">
                    <option value="2">Binary</option>
                    <option value="8">Octal</option>
                    <option value="10">Decimal</option>
                    <option value="16">Hexadecimal</option>
                    <option value="64">Base64</option>
                </select>
            </div>
          </div>
          <input class="submit-btn" type="submit" value="Convert" wire:click="convert">
        </div>
        <p>Input: {{ $input }}</p>
        <p>Result: {{ $result }}</p>
        <p>Base 1: {{ $base_1 }}</p>
        <p>Base 2: {{ $base_2 }}</p>
        <p>Error: {{ $error }}</p>
    </div>
