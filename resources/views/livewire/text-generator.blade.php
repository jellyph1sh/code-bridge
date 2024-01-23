<div>
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
  gap : 50px ;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input_button_1{
    width: 400px;
  border-radius: 5px;
  padding: 10px;
  border: 1px solid #ccc;
  font-size: 16px;
  outline: none;  
  transition: border-color 0.3s ease-in-out;
}

.input_button_2{
    display: block;
    width: 400px;
    height : 300px;
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
    <div class="container">
        <div class="form-container">
            <input class="input_button_1" type="text" name="number-of-word" placeholder ="Combien de mots voulez vous générer" wire:model="numberOfWord">
            <button class="submit-btn" wire:click="textGenerator">Générer les mots</button>
            <input class="input_button_2" placeholder="Resultat" type="text" name="result" wire:model="result">
            {{ $error }}
        </div>
    </div>
</div>
    