<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function changePassword(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'old-password' => 'required',
            'password' => 'required|confirmed'
        ]);

        if (! Hash::check($request->old_password, $user->password))
        {
            return back()->with('error', 'Пароль не найден в базе');
        }

        $user->update([
            'password' => Hash::make( $request->password )
        ]);

        return redirect()
            ->route('home')
            ->with('message','Успешно обновлено!');
    }
}
