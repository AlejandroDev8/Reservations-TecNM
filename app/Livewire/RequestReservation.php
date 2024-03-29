<?php

namespace App\Livewire;

use App\Models\Arrangement;
use App\Models\Room;
use Livewire\Component;

class RequestReservation extends Component
{
    public function render()
    {
        // Query the database

        $rooms = Room::all();
        $accommodations = Arrangement::all();

        return view('livewire.request-reservation', [
            'rooms' => $rooms,
            'accommodations' => $accommodations,
        ]);
    }
}
