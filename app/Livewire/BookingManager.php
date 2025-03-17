<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingManager extends Component
{
    public $start_date, $end_date;

    public function saveBooking()
    {

        $userId = Auth::id();
        if (!$userId) {
            throw new \Exception('Utilisateur non connecté');
        }

        Booking::create([
            'user_id' => Auth::id(), // Vérifie que Auth est bien importé
            'property_id' => 1,
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
?>
