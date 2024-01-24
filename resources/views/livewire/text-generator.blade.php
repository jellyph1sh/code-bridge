<div class = "grid-container">
    <style>

.grid-container{
  display: flex;
  font-family: 'Roboto', sans-serif;

}

.container {
  margin-left :10%;
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
    width: 500px;
  border-radius: 5px;
  padding: 10px;
  border: 1px solid #ccc;
  font-size: 16px;
  outline: none;  
  transition: border-color 0.3s ease-in-out;
}

.result {
  width: 400px;
  height : 50px;
  border-radius: 5px;
  padding: 10px;
  border: 1px solid #ccc;
  font-size: 16px;
  outline: none;
  transition: border-color 0.3s ease-in-out;
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: auto;
  
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
.history {
  margin-left :10%;
  margin-top : 5%;
  width: 400px;
  height: 600px;
  border: 1px solid #000;
  padding: 20px;
  border-radius: 10px;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.history-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.history-content {
    margin-top: 10px;
    list-style-type: none;
    padding: 0;
    overflow: auto;
    height: 500px;
}

.history-content li {
    font-family: 'Roboto', sans-serif;
    margin-bottom: 5px;
    padding: 5px;
    border: 2px solid #000;
    border-radius: 5px;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style>
    <div class="container">
        <div class="form-container">
            <input class="input_button_1" type="text" name="number-of-word" placeholder ="Combien de mots voulez vous générer (entre 1 et 100)" wire:model="numberOfWord">
            <button class="submit-btn" wire:click="textGenerator">Générer les mots</button>
            <div class="result">
                {{ $result }}
            </div>
            {{ $error }}
        </div>
    </div>
    <div class="history">
        <div class ="form-history">
            <div class="history-title">
                Historique
            </div>
            <div class="history-content">
                @for ($i = 0; $i < count($history); $i++)
                    <li>{{ $history[$i] }}</li>
                @endfor
            </div>
        </div>
    </div>
</div>