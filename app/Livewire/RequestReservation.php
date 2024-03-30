<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;
use App\Models\Accommodation;

class RequestReservation extends Component
{
    public $email;
    public $room;
    public $date_in;
    public $date_out;
    public $accommodation;
    public $reasons;

    protected $rules = [
        'email' => 'required|email',
        'room' => 'required',
        'date_in' => 'required|date',
        'date_out' => 'required|date',
        'accommodation' => 'required',
        'reasons' => 'nullable|max:150',
    ];

    public function mount()
    {
        $this->email = auth()->user()->email;
        $this->room = '';
        $this->accommodation = '';
    }

    public function requestReservation()
    {
        $data = $this->validate();
    }

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
