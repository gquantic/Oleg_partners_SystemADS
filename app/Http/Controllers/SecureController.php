<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SecureController extends Controller
{
    protected $tokenLength = 32;

    public function __construct()
    {

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
            ->route('settings')
            ->with('message','Успешно обновлено!');
    }
}
