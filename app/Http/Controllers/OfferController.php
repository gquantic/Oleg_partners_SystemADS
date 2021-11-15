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

    /**
     * Вывод оффера
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showOffer($id)
    {
        $data = DB::table('offers')->where('id', $id)->first();

        return view('offers.view', ['author' => $this->checkAuthor($data), 'data' => $data]);
    }

    /**
     * Проверка пользователя, является ли он автором данного оффера
     *
     * @param $data
     * @return bool
     */
    private function checkAuthor($data)
    {
        return $data->author == Auth::user()->id ? $author = true : $author = false;
    }

    /**
     * Получение всех офферов
     *
     * @return \Illuminate\Support\Collection
     */
    public function getOffers()
    {
        return DB::table('offers')->where('author', Auth::user()->id)->get();
    }

    /**
     * Создание оффера
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
