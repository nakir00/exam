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

        $validated=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prename' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'classe' => ['required', 'string', 'max:255'],
            'ecole' => ['required', 'string', 'max:255'],
            'domaine' => ['required', 'string', 'max:255'],
            'niveau' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'numeric'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'prename'=>$request->prename,
            'adresse'=>$request->adresse,
            'classe'=>$request->classe,
            'ecole'=>$request->ecole,
            'domaine'=>$request->domaine,
            'niveau'=>$request->niveau,
            'numero'=>$request->numero,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
