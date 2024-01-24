<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;

use Livewire\Component;

class BinaryConverter extends Component
{
    public $input ;
    public $result ;
    public $base_1 = 2;
    public $base_2 = 10;
    public $error = "";
    public $history;

    

    public function base2($input, $base_2) 
    {   

        $this->validate([
            'input' => 'required|numeric|min:0|max:100000000',
        ]);

        if ($this->base_1 == 2 && !(preg_match('/^[01]+$/', $this->input)))
            return ["","Error: Input is not a binary number"];
        switch ($base_2) {
            case 2:
                return [$input, ""];; 
                break;
            case 8:
                return [decoct(bindec($input)), ""]; 
                break;
            case 10:
                return [bindec($input), ""]; 
                break;
            case 16:
                return [dechex(bindec($input)), ""]; 
                break;
            case 64:
                return [base64_encode(pack('H*', dechex(bindec($input)))), ""];
                break; 
        }
    }

    public function base8($input, $base_2)
    {
        $this->validate([
            'input' => 'required|numeric|min:0|max:100000000',
        ]);
        if ($this->base_1 == 8 && !(preg_match('/^[0-7]+$/', $this->input)))
                return ["","Error: Input is not an octal number"];
        switch ($base_2) {
            case 2:
                return [decbin(octdec($input)), ""];; 
                break;
            case 8:
                return [$input, ""]; 
                break;
            case 10:
                return [octdec($input), ""]; 
                break;
            case 16:
                return [dechex(octdec($input)), ""]; 
                break;
            case 64:
                return [base64_encode(pack('H*', dechex(octdec($input)))), ""]; 
                break;
        }
    }

    public function base10($input, $base_2)
    {   
        $this->validate([
            'input' => 'required|numeric|min:0|max:100000000',
        ]);
        if ($this->base_1 == 10 && !(preg_match('/^[0-9]+$/', $this->input)))
                return ["","Error: Input is not a decimal number"];
        switch ($base_2) {
            case 2:
                return [decbin($input), ""]; 
                break;
            case 8:
                return [decoct($input), ""]; 
                break;
            case 10:
                return [$input, ""]; 
                break;
            case 16:
                return [dechex($input), ""]; 
                break;
            case 64:
                return [base64_encode(pack('H*', dechex($input))), ""]; 
                break;
        }
    }

    public function base16($input, $base_2)
    {   
        $this->validate([
            'input' => 'required|numeric|min:0|max:100000000',
        ]);
        if ($this->base_1 == 16 && !(preg_match('/^[0-9A-Fa-f]+$/', $this->input)))
                return ["","Error: Input is not a hexadecimal number"];
        switch ($base_2) {
            case 2:
                return [decbin(hexdec($input)), ""];
                break; 
            case 8:
                return [decoct(hexdec($input)), ""]; 
                break;
            case 10:
                return [hexdec($input), ""]; 
                break;
            case 16:
                return [$input, ""]; 
                break;
            case 64:
                return [base64_encode(pack('H*', $input)), ""]; 
                break;
        }
    }

    public function base64($input, $base_2)
    {   
        $this->validate([
            'input' => 'required|numeric|min:0|max:100000000',
        ]);
        if ($this->base_1 == 64 && !(preg_match('/^[0-9A-Za-z\/\+]+$/', $this->input)))
                return ["","Error: Input is not a base64 number"];
        switch ($base_2) {
            case 2:
                return [decbin(hexdec(bin2hex(base64_decode($input)))), ""]; 
                break;
            case 8:
                return [decoct(hexdec(bin2hex(base64_decode($input)))), ""]; 
                break;
            case 10:
                return [hexdec(bin2hex(base64_decode($input))), ""]; 
                break;
            case 16:
                return [bin2hex(base64_decode($input)), ""]; 
                break;
            case 64:
                return [$input, ""]; 
                break;
        }
    }

    public function convert()
    {   
        switch ($this->base_1) {
            case 2:
                $this -> result = $this->base2($this->input, $this->base_2);
                $this->error = $this->result[1];
                if ($this->error == null) {
                    $this->AddToHistory('BINARY_HISTORY', $this->result[0]);
                }
                $this->result = $this->result[0];
                break;
            case 8 :
                $this->result = $this->base8($this->input, $this->base_2);
                $this->error = $this->result[1];
                if ($this->error == null) {
                    $this->AddToHistory('BINARY_HISTORY', $this->result[0]);
                }
                $this->result = $this->result[0];
                break;
            case 10 :
                $this->result = $this->base10($this->input, $this->base_2);
                $this->error = $this->result[1];
                if ($this->error == null) {
                    $this->AddToHistory('BINARY_HISTORY', $this->result[0]);
                }
                $this->result = $this->result[0];
                break;
            case 16 :
                $this->result = $this->base16($this->input, $this->base_2);
                $this->error = $this->result[1];
                if ($this->error == null) {
                    $this->AddToHistory('BINARY_HISTORY', $this->result[0]);
                }
                $this->result = $this->result[0];
                break;
            case 64 :
                $this->result = $this->base64($this->input, $this->base_2);
                $this->error = $this->result[1];
                if ($this->error == null) {
                    $this->AddToHistory('BINARY_HISTORY', $this->result[0]);
                }
                
                $this->result = $this->result[0];
                break;
        }
    }

    public function render()
    {   
        $this->history = $this->GetHistory('BINARY_HISTORY');
        return view('livewire.binary-converter');
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

