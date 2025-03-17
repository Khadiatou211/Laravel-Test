<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Vérifier si l'utilisateur est bien connecté
        if (!Auth::check()) {
            return response()->json(['error' => 'Vous devez être connecté pour réserver.'], 401);
        }

        // Validation des données
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Création de la réservation
        $booking = Booking::create([
            'user_id' => Auth::id(),
            'property_id' => $request->property_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        // Retourner une réponse
        return response()->json([
            'message' => 'Réservation créée avec succès.',
            'booking' => $booking
        ], 201);
    }
}
