<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

class FormController extends Controller
{
    public function submitForm(Request $request, Turnstile $turnstile)
    {
        try {

            $request->validate([
                'cf-turnstile-response' => ['required', $turnstile],
            ]);
            // Validate the form data
            $validatedData = $request->validate([
                'student_name' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'whatsapp_number' => 'required|string|max:12',
                'education_level' => 'required|string|max:255',
                'board_of_studies' => 'required|string|max:255',
                'queries' => 'nullable|string',
            ]);

            $existingNumber = FormData::where('whatsapp_number', $validatedData['whatsapp_number'])->first();

            if ($existingNumber) {
                // WhatsApp number already exists, show alert message and redirect back
                return back()->with('error', 'WhatsApp number already exists');
            }

            // Create a new record in the database using the FormData model
            FormData::create($validatedData);

            // Redirect to the 'thanks' page on success
            return redirect('/thanks')->with('success', 'Form submitted successfully!');
        } catch (\Exception $e) {
            // Return error message as JSON if an exception occurs
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
