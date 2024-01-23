<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class RandomNumberGenerator extends Component
{

    public $number;
    public $min = 0;
    public $max = 100;
    public $error = "";
    public $history;
    private $result;

    public function isGreater($nb1, $nb2)
    {
        return $nb1 > $nb1;
    }

    public function generateRandomNumber()
    {
        $this->validate([
            'max' => 'required|numeric',
            'min' => 'required|numeric',
        ]);
        
        $this->error = null;
        
        if ($this->min > $this->max) {
            $this->error = "[ERROR] The minimum value cannot be greater than the maximum value.";
            $this->number = null;
            return;
        }

        $this->result = rand($this->min,$this->max);
        $this->AddToHistory('TEXT_HISTORY', strval($this->result));
        $this->number = $this->result;
    }

    public function render()
    {
        $this->history = $this->GetHistory('TEXT_HISTORY');
        return view('livewire.random-number-generator');
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
