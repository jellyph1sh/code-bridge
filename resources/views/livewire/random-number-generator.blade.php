<div class ="content">
    <style>
        .min {
            color: blue;
        }

        .max {
            color: red;
        }
        .content{
            display: flex;
        }

        .generator-box{
            margin-left: 10%;
            margin-top: 5%;
            width: 600px;
            height: 600px;
            border: 1px solid #000;
            padding: 20px;
            border-radius: 10px;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap : 20px ;
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
    gap : 10px;
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

.generate-button {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  outline: none;
  transition: border-color 0.3s ease-in-out;
}

.generate-button:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.input-button{
    width: 400px;
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
    </style>
    <div class="generator-box">
        
        <div class="min">
            <label for="min">Minimum number</label>
            <input id="min" class ="input-button"type="number" value="{{ $min }}" wire:model="min">
        </div>
        <div class="max">
            <label for="max">Maximum number</label>
            <input id="max" class ="input-button" type="number" value="{{ $max }}" wire:model="max">
        </div>
        <button type="button" class ="generate-button" wire:click="generateRandomNumber">Generate random number</button>
        <div class = "result">
            {{ $number }}
        </div>
        @error('min')
            <p>Min value can't be null.</p>
        @enderror
        @error('max')
            <p>Max value can't be null.</p>
        @enderror
        <p>{{ $error }}</p>
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
