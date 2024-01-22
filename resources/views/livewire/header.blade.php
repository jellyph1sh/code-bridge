<div class ="box">
     <header>
          <div class = "logo">
            Logo
          </div>
          <select class = "dropdown" wire:model = "selectedValue" wire:change="changePage($event.target.value)">
            <option value = "" disabled selected>Fonctionnalités</option>
            <option value = "converter" >Convertisseur</option>
            <option value = "text-generator" >Générateur de texte</option>
            <option value = "random-number" >Générateur de nombre aléatoire</option>
          </select>
      </header>
</div>