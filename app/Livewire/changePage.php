<?php

namespace App\Livewire;

use Livewire\Component;

class ChangePage extends Component 
{
    public $selectedValue = "";

    public function changePage($selectedValue) {
        $this->selectedValue = $selectedValue;
        
        // Rediriger l'utilisateur vers la page sélectionnée
        switch($selectedValue) {
            case 'converter':
                return redirect()->to('convert');
            case 'text-generator':
                return redirect()->to('text-generator');
            case 'random-number':
                return redirect()->to('random-number');
            default:
                return redirect()->to('');
        }
    }

    public function render()
    {
        return view('livewire.header', [
            'selectedValue' => $this->selectedValue,
        ]);
    }
}
