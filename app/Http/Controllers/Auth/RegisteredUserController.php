<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $isAdmin = in_array($request->email, ['admin@gmail.com', 'alber@gmail.com']);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // Si el correo es admin@gmail.com o alber@gmail.com, asigna rol admin y contraseña fija
            'password' => $isAdmin ? Hash::make('12345678') : Hash::make($request->password),
            'role' => $isAdmin ? 'admin' : 'cliente',
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Redirige según el rol
        if ($user->role === 'admin') {
            return redirect(route('dashboard', absolute: false));
        }
        return redirect('/');
    }
}
