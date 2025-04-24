<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function registerNotification(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bac_type' => 'required',
            'contact_method' => 'required|in:whatsapp,gmail',
            'contact' => 'required|email_if:gmail|phone_if:whatsapp',
        ]);

        // Store data or send to CRM, etc.
        // NotificationService::store($request->all());

        return back()->with('success', __('messages.notification_success'));
    }
}
