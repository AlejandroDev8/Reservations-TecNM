<?php

namespace App\Livewire;

use Livewire\Component;

class ShowErrors extends Component
{
    public $message;


    public function render()
    {
        return view('livewire.show-errors');
    }
}
