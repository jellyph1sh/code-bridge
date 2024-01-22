<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;

use Livewire\Component;

class TextGenerator extends Component
{

    public $numberOfWord = "";
    public $result = "";
    public $error = "";

    public function textGenerator()
    {   
        $this->validate([
            'numberOfWord' => 'required|numeric|min:1|max:100',
        ]);
    
        $this->result = "";
        $this->error = "";
    
        $filePath = ("storage\app\public\dico.txt");
    
        if (Storage::exists($filePath)) {
            $words = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
            $numberOfWord = $this->numberOfWord;
    
            for ($i = 0; $i < $numberOfWord; $i++) {
                $this->result .= $words[rand(0, count($words) - 1)] . " ";
            }
    
            $this->result = trim($this->result);
        } else {
            $this->error = "Le fichier de mots n'existe pas.";
        }
    }

    public function render()
    {
        return view('livewire.text-generator');
    }
}