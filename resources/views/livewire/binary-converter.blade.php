<div class="container">
        <style>
          
body, html {
  font-family: 'Roboto', sans-serif;
}
.container {
  margin-left :30%;
  margin-top : 5%;
  width: 800px;
  height: 600px;
  border: 1px solid #000;
  padding: 20px;
  border-radius: 10px;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.form-container {
  gap : 10px ;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-group_1,
.input-group_2 {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 10px;
}

.selection_1,
.selection_2 {
  border-radius: 5px;
  margin-bottom: 10px;
}

.input_button_1,
.input_button_2 {
  border-radius: 5px;
  padding: 10px;
  border: 1px solid #ccc;
  font-size: 16px;
  outline: none;  
  transition: border-color 0.3s ease-in-out;
}

.input_button_1:focus,
.input_button_2:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.submit-btn {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  outline: none;
  transition: border-color 0.3s ease-in-out;
}

.submit-btn:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>
        <div class="form-container">
          <div class="input-group_1">
            <div class="select-container_1">
                <select class="selection_1" name="base1" wire:model="base_1" selected="{{ $base_1 }}">
                    <option value="2">Binaire</option>
                    <option value="8">Octal</option>
                    <option value="10">Decimal</option>
                    <option value="16">Hexadecimal</option>
                    <option value="64">Base64</option>
                </select>
            </div>
            <input class="input_button_1" type="text" name="number1" placeholder ="Entrer votre nombre" wire:model="input" >
          </div>
          <div class="input-group_2">
            <div class="select-container_2">
                <select class="selection_2" name="base2" wire:model="base_2" selected="{{ $base_2 }}">
                    <option value="2">Binaire</option>
                    <option value="8">Octal</option>
                    <option value="10">Decimal</option>
                    <option value="16">Hexadecimal</option>
                    <option value="64">Base64</option>
                </select>
            </div>
          </div>
          <input class="submit-btn" type="submit" value="Convert" wire:click="convert">
          <input class="input_button_2" placeholder="Resultat" type="text" name="result" wire:model="result">
        </div>
    </div>
