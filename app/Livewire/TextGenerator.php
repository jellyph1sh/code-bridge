<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cookie;

use Livewire\Component;

class TextGenerator extends Component
{

    public $numberOfWord = "";
    public $result = "";
    public $error = "";
    public $history;
    private $word = "";

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
                $this->word .= $words[rand(0, count($words) - 1)] . " ";
            }
    
            $this->AddToHistory('TEXT_HISTORY', trim($this->word));
            $this->result = trim($this->word);
        } else {
            $this->error = "Le fichier de mots n'existe pas.";
        }
    }

    public function render()
    {
        $this->history = $this->GetHistory('TEXT_HISTORY');
        return view('livewire.text-generator');
    }

    private function AddToHistory($cookieName, $element) {
        $cookie = Cookie::get($cookieName);
        $history = $element;
        if (strlen($cookie) > 0) {
            $history = $cookie . ";" . $element;
        }
        Cookie::queue(Cookie::make($cookieName, $history, 60 * 6));
    }

    private function GetHistory($cookieName) {
        $cookie = Cookie::get($cookieName);
        if (strlen($cookie) == 0) {
            return ["No history!"];
        }
        return explode(';', $cookie);
    }
}