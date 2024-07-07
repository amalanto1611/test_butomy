<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Exceptions\InvalidCredentialsException;
use Exception;

class RegistrationController extends Controller
{
    public function index()
{
    return view('registration');
}
public function loginindex()
{
    return view('login');
}
public function register(Request $request)
    {
        //dd($request);
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:4|confirmed',
                
            ]);

            if ($validator->fails()) {
                throw ValidationException::withMessages($validator->errors()->toArray());
            }

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
    public function check(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            // Attempt to log the user in
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed, redirect to the dashboard
                return redirect()->route('dashboard.index');
            } else {
                // Authentication failed, redirect back to the login with an error message
                return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.')->withInput();
            }
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', $e->getMessage())->withInput();
        }
    }
}
