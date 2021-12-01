<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccessController extends OfferController
{
    public function request(Request $data)
    {
        if (DB::table('connect_requests')->where('offer', $data->offer)->where('user', Auth::user()->id)->first() === null) {
            DB::table('connect_requests')->insert([
                'user' => Auth::user()->id,
                'offer' => $data->id,
                'access' => 0,
                'link_name' => $data->urlName,
                'created_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Запрос на подключение отправлен. Пожалуйста, ожидайте ответа!');
    }
}
