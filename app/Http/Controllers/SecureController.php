<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            'old_password' => 'required',
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



//    public function changeEmail(Request $request, $id)
//    {
//        $user = User::find($id);
//
//        $request->validate([
//            'old-email' => 'required',
//            'email' => 'required|confirmed'
//        ]);
//
//        if (User::check($request->old_email, $user->email))
//        {
//            return back()->with('error','Email не найден в базе');
//        }
//
//    }

    protected function getDeviceData()
    {
        return $data = [
            'browser' => $_SERVER['HTTP_USER_AGENT'],
            'ip' => $_SERVER['REMOTE_ADDR']
        ];
    }

    public function setAuth()
    {
        $data = $this->getDeviceData();

        DB::table('authorizationslist')->insert(
            [
                'user' => Auth::user()->id,
                'device' => $data['browser'],
                'ip' => $data['ip'],
            ]
        );
    }
}
