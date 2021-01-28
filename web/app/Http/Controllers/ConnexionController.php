<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class ConnexionController extends Controller
{


    //function qui retourne le formulaire de connexion 
    // Formulaire de connexion -> email & password
    //fonction qui va traier notre formulaire
    //Utiliser les méthode de la class autheticatable
    //on va pouvoir identifier si le user qui se connecte a deja un compte 
    // si le usqer existe on le redirige vers sa page profil 
    //Si il existe pas rediriger vers le formulaire de connexion ou vers le formulaire d"inscription
    public function form() {
        return view('Connexion/connexion');
    }

    public function connexion() {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        $result = auth()->attempt([

            'email' => request('email'), 
            'password' => request('password')

        ]);

        if($result) {
            flash('You are connected')->success();
            return view('UserAccount/dashboard');
        }

        return back()->withErrors([
            'email' => 'The credentials do not match ! Try again!',
        ]);
    }

}
