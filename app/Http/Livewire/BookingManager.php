<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;


class BookingManager extends Component
{
    public $start_date, $end_date;

    public function saveBooking()
    {
        if (!Auth::check()) {
            session()->flash('error', 'Vous devez être connecté pour réserver.');
            return;
        } // Si l'utilisateur n'est pas connecté, Auth::id() retournera null, ce qui peut causer une erreur lors de l’insertion dans la base de données.
        Booking::create([
            'user_id' => Auth::id(),
            'property_id' => 1, // Exemple, devrait être dynamique
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        session()->flash('message', 'Réservation effectuée avec succès !');
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}