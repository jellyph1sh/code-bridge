<?php

namespace App\Livewire;

use Livewire\Component;

class RandomNumberGenerator extends Component
{

    public $number;
    public $min = 0;
    public $max = 100;
    public $error = "";

    public function isGreater($nb1, $nb2)
    {
        return $nb1 > $nb1;
    }

    public function generateRandomNumber()
    {
        $this->error = null;
        if ($this->min == null || $this->max == null) {
            $this->error = "[ERROR] Max and min value can't be null.";
            $this->number = null;
            return;
        }
        if ($this->min > $this->max) {
            $this->error = "[ERROR] The minimum value cannot be greater than the maximum value.";
            $this->number = null;
            return;
        }
        $this->number = rand($this->min,$this->max);
    }

    public function render()
    {
        return view('livewire.random-number-generator');
    }
}
