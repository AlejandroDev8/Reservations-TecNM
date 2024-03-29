<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;

class RequestReservation extends Component
{
    public function render()
    {
        // Query the database

        $rooms = Room::all();

        return view('livewire.request-reservation', [
            'rooms' => $rooms
        ]);
    }
}
