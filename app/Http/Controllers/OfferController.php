<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;

class OfferController extends Controller
{
    use AuthenticatesUsers;

    public function getOffers()
    {
        return DB::table('offers')->where('author', Auth::user()->id)->get();
    }

    public function createOffer(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('uploads'), $imageName);

        DB::table('offers')->insert([
            'author' => Auth::user()->id,
            'image' => $imageName,
            'title' => $_POST['name'],
            'url' => $_POST['url'],
            'type' => $_POST['project_type'],
            'description' => $_POST['description'],
            'author_telegram' => $_POST['urltelegram'],
            'action' => $_POST['type_do'],
            'action_description' => $_POST['description_do'],
            'currency' => $_POST['currency'],
            'sale_percent' => $_POST['percentsale'],
            'price_min' => $_POST['minprice'],
            'price_max' => $_POST['maxprice'],
            'daily_sales' => $_POST['numberofsales'],
            'traffic_url' => $_POST['urltraffic'],
        ]);

        return redirect()->route('offer-my')->with('success','Оффер успешно добавлен!');
    }
}
