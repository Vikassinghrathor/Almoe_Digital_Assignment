<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('registration.form');
    }

    /**
     * Handle user registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[a-zA-Z\s]+$/',
                function ($attribute, $value, $fail) {
                    // Additional name validation to prevent random strings
                    $words = explode(' ', $value);

                    // Check if there are at least two words
                    if (count($words) < 2) {
                        $fail('Please provide both first and last name.');
                    }

                    // Check each word for meaningful content
                    foreach ($words as $word) {
                        // Ensure each word is at least 2 characters long and not just repeated characters
                        if (strlen($word) < 2 || !$this->isValidName($word)) {
                            $fail('Please enter a valid name.');
                            break;
                        }
                    }
                }
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:user_registrations,email',
                function ($attribute, $value, $fail) {
                    // Enhanced email domain validation
                    $allowedDomains = ['com', 'org', 'net', 'edu', 'gov'];
                    $emailParts = explode('@', $value);

                    if (count($emailParts) !== 2) {
                        $fail('Invalid email format.');
                        return;
                    }

                    $domainParts = explode('.', $emailParts[1]);

                    // Check if domain has at least two parts (domain and top-level domain)
                    if (count($domainParts) < 2) {
                        $fail('Email must include a valid domain name.');
                        return;
                    }

                    // Get the top-level domain
                    $topLevelDomain = strtolower(end($domainParts));

                    // Check if top-level domain is in allowed domains
                    if (!in_array($topLevelDomain, $allowedDomains)) {
                        $fail('Email must have a valid domain (.com, .org, .net, .edu, .gov).');
                    }
                }
            ],
            'phone_number' => [
                'required',
                'regex:/^[0-9]{10}$/', // Validates 10-digit phone number
                'unique:user_registrations,phone_number'
            ]
        ], [
            'name.required' => 'Please enter your full name.',
            'name.min' => 'Name must be at least 2 characters long.',
            'name.max' => 'Name cannot exceed 100 characters.',
            'name.regex' => 'Name can only contain letters and spaces.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'phone_number.required' => 'Phone number is required.',
            'phone_number.regex' => 'Phone number must be 10 digits.',
            'phone_number.unique' => 'This phone number is already registered.'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create new user registration
        try {
            $registration = UserRegistration::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number')
            ]);

            // Redirect with success message
            return redirect()->back()
                ->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Registration failed: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->back()
                ->with('error', 'Registration failed. Please try again.');
        }
    }

    /**
     * Check if a name is valid (not just repeated characters)
     *
     * @param string $name
     * @return bool
     */
    private function isValidName(string $name): bool
    {
        // Convert to lowercase for case-insensitive check
        $name = strtolower($name);

        // Check if the name is just repeated characters
        return !($name === str_repeat($name[0], strlen($name)));
    }
}
