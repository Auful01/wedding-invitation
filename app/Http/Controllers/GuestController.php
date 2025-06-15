<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        // Fetch all guests
        $guests = Guests::paginate(10);

        // Return the view with guests data
        return view('pages.guests.index', compact('guests'));
    }

    public function getGuest($id){
        // Fetch a single guest by ID
        $guest = Guests::findOrFail($id);

        // Return the view with the guest data
        return response()->json($guest);
    }

    public function greets(Request $request)
    {
        // Validate the request
        $request->validate([
            'guest_id' => 'required|exists:guests,id',
            'message' => 'required|string|max:255',
        ]);

        Guests::create([
            'guest_id' => $request->input('guest_id'),
            'message' => $request->input('message'),
        ]);

        // Process the greeting
        // Here you would typically save the greeting to the database

        return response()->json(['message' => 'Greeting sent successfully!']);
    }



    public function store(Request $request)
    {
        // Validate the request

        // Create a new guest
        try {
            Guests::create($request->all());
            // Optionally, you can also create a greeting for the guest


            return response()->json(['message' => 'Guest created successfully!']);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error' => 'Failed to create guest.'], 500);

        }

    }
}
