<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page
     * (Not needed for single-page, but kept for compatibility)
     */
    public function show()
    {
        return redirect('/#contact');
    }

    /**
     * Handle contact form submission
     */
    public function submit(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Prepare contact data
        $contactData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'timestamp' => now()->format('F j, Y - g:i A'),
        ];

        // Save to database
        Contact::create([
            'name' => $contactData['name'],
            'email' => $contactData['email'],
            'message' => $contactData['message'],
            'ip_address' => $contactData['ip_address'],
        ]);

        // Send email notification
        try {
            Mail::to(env('CONTACT_EMAIL', 'sremmeng007@gmail.com'))
                ->send(new ContactFormMail($contactData));
            
            $successMessage = 'Thank you! Your message has been sent successfully.';
        } catch (\Exception $e) {
            // If email fails, still show success but log the error
            Log::error('Contact form email failed: ' . $e->getMessage());
            $successMessage = 'Thank you! Your message has been received.';
        }

        // Redirect back to home page contact section with success message
        return redirect('/#contact')->with('success', $successMessage);
    }
}