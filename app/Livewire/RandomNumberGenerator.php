<?php

namespace App\Livewire;

use Livewire\Component;

class RandomNumberGenerator extends Component
{

    public $number;
    public $min = 0;
    public $max = 100;

    public function generateRandomNumber()
    {
        $this->number = rand($this->min,$this->max);
    }

    public function render()
    {
        return view('livewire.random-number-generator');
    }
}
