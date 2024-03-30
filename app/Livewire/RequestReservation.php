<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;
use App\Models\Accommodation;

class RequestReservation extends Component
{
    public function render()
    {
        // Get the user authenticated

        $user = auth()->user();

        // Query the database

        $rooms = Room::all();
        $accommodations = Accommodation::all();

        return view('livewire.request-reservation', [
            'rooms' => $rooms,
            'accommodations' => $accommodations,
            'user_email' => $user->email,
        ]);
    }
}
