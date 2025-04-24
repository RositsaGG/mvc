<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|min:4',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:4',
        'psw-repeat' => 'required|same:password',
    ]);

    // Ако паролата е ок, махни psw-repeat и създай потребителя
    unset($validated['psw-repeat']);
    $validated['password'] = bcrypt($validated['password']);

    User::create($validated);

    // Flash message
    return redirect()->route('login')
        ->with('success', 'Регистрацията беше успешна! Влезте със своя имейл и парола.');
}

    // Login
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($validated)) {
            return redirect()->route('home')->with('success', 'Успешен вход! Добре дошли в системата.');
        }
    
        return back()->withErrors([
            'email' => 'Грешни имейл или парола!'
        ])->withInput();
    }
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
