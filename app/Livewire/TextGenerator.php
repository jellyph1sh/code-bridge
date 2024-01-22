<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;

use Livewire\Component;

class TextGenerator extends Component
{

    public $input = "";
    public $result = "";
    public $error = "";

    public function textGenerator($input)
    {   
        $fileContents = Storage::get('public/dico.txt');
        $this->input = $input;
        for ($i = 0; $i < $input; $i++) {
            $this->result .= $fileContents[rand(0, strlen($fileContents))];
        }
    }

    public function render()
    {
        return view('livewire.text-generator');
    }
}