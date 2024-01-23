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
    
        if (Storage::disk('local')->exists('public/dico.txt')) {
            $words = Storage::disk('local')->get('public/dico.txt');
            $words = explode("\n", $words);
    
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