<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    // Redirect user to Google for authentication
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function googleAuthentication()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Check if the user already exists in the database
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Create a new user if not found
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt('randompassword'), // Not used, but required for Laravel
                ]);
            }

            // Log the user in
            Auth::login($user);

            // Redirect to dashboard or home
            return redirect('/dashboard')->with('success', 'Logged in successfully!');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}

