<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Validation\Rules\Password;
    use Illuminate\Support\Facades\Auth;

    class RegisteredUserController extends Controller
    {
        public function create()
        {
            return view('auth.register');
        }


        public function store()
        {
            //validate
            $validatedAttributes = request()->validate([
                'first_name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', Password::min(6), 'confirmed'],
            ]);

            //create user in db
            $user = User::create($validatedAttributes);

            //log in the user
            Auth::login($user);

            //redirect
            return redirect('/jobs');
        }
        //
    }
