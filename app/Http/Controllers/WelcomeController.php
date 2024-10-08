<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $user = User::find(1);

        // $user->update(['email_verified_at' => now()->subMonths(10)]);
        // $user = User::query()->create([
        //     'name' => 'Ana',
        //     'email' => 'anaventura@gmail.com',
        //     'password' => 'teste1234'
        // ]);

        // $user->email_verified_at = now();
        // $user->save();

        $user->update(['email_verified_at' => now()->subMonths(10)]);

        dd($user->email_verified_at);

        // now()->date;

       return view('test.ana');
    }
}
