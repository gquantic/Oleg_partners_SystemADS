<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Symfony\Component\Console\Helper\Table;

class OfferController extends Controller
{
    use AuthenticatesUsers;

    public function getOfferData($id)
    {
        return DB::table('offers')->where('id', $id)->first();
    }

    /**
     * Вывод оффера
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showOffer($id)
    {
        $data = $this->getOfferData($id);
        return view('offers.view', ['author' => $this->checkAuthor($data), 'data' => $data, 'creatives' => $this->getCreatives($id)]);
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

    public function getCreatives($id)
    {
        return DB::table('offers_creatives')->where('offer', $id)->get();
    }

    public function payOffer(Request $request)
    {
        $offer = DB::table('offers')->where('author', Auth::user()->id)->where('id', $request->offer_id)->first();

        DB::table('offers')->where('author', Auth::user()->id)->where('id', $request->offer_id)
            ->update(['balance' => $offer->balance + $request->amount]);

        if ($offer->checked == 0)
            return redirect("/offer/my/{$offer->id}/edit")->with('success','Баланс успешно пополнен! Продолжите заполнение!');
        else
            return redirect("/offer/my/{$offer->id}")->with('success', 'Баланс успешно пополнен!');

        /*
        *  "amount" => "255"
        *  "offer_id" => "1"
        *  "pay" => "Перейти к пополнению"
        */
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

    /**
     * Редактирование информации об оффере
     */
    public function editDetails(Request $request)
    {
        // Проверяем на заполненность поля
        $request->validate([
            'infodetails' => 'required|max:800',
            'age_category' => 'required',
            'gender' => 'required',
            'countries' => 'required|max:255',
            'details_product' => 'required|max:800',
            'accept_money' => 'required|max:255',
            'help_methods' => 'required|max:255',
            'advantage_product' => 'required|max:255',
            'accept_traffic' => 'required|max:255',
            'reject_traffic' => 'required|max:255',
        ]);

        // Если инфа уже есть - то обновляем, если же нет - то создаем
        if ($this->checkDetails($request->id)) {
            DB::table('offer_details')->where('offer', $request->id)->update([
                'info_details' => $request->infodetails,
                'age_category' => $request->age_category,
                'gender' => $request->gender,
                'countries' => $request->countries,
                'details_product' => $request->details_product,
                'accept_money' => $request->accept_money,
                'help_methods' => $request->help_methods,
                'advantage_product' => $request->advantage_product,
                'accept_traffic' => $request->accept_traffic,
                'reject_traffic' => $request->reject_traffic,
                'moderated' => 'wait',
                'updated_at' => now(),
            ]);
        } else {
            DB::table('offer_details')->insert([
                'offer' => $request->id,
                'info_details' => $request->infodetails,
                'age_category' => $request->age_category,
                'gender' => $request->gender,
                'countries' => $request->countries,
                'details_product' => $request->details_product,
                'accept_money' => $request->accept_money,
                'help_methods' => $request->help_methods,
                'advantage_product' => $request->advantage_product,
                'accept_traffic' => $request->accept_traffic,
                'reject_traffic' => $request->reject_traffic,
                'moderated' => 'wait',
                'created_at' => now(),
            ]);
        }

        // Возвращаем с инфой
        return redirect()->back()->with('success', 'Информация была успешно обновлена!');
    }

    public function checkModeration($id)
    {
        if ($this->checkDetails($id)) {
            $details = DB::table('offer_details')->where('offer', $id)->first();
            return $details->moderated;
        } else {
            return $this->checkDetails($id);
        }
//        return $this->checkDetails($id);
    }

    public function getDetails($id, $details = 'all')
    {
        if ($details == 'all') {
            return DB::table('offer_details')->where('offer', $id)->first();
        } else {
            $details = DB::table('offer_details')->select($details)->where('offer', $id)->first();

            if ($details != null) {
                foreach ($details as $detail) {
                    return $detail;
                }
            } else {
                return false;
            }
        }
    }

    public function checkDetails($id)
    {
        return boolval(DB::table('offer_details')->where('offer', $id)->first());
    }

    public function addCreo(Request $request)
    {
        if ($request->type == "land") {
            $request->validate([
                'title' => 'required|max:255',
                'url' => 'required|max:1048',
            ]);

            DB::table('offers_creatives')->insert([
                'offer' => $request->id,
                'title' => $request->title,
                'url' => $request->url,
                'created_at' => now(),
            ]);
        } else {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|max:255',
            ]);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/creo/'), $imageName);

            DB::table('offers_creatives')->insert([
                'offer' => $request->id,
                'title' => $request->title,
                'img' => $imageName,
                'created_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Креатив успешно загружен!');
    }

    public function removeCreo($id)
    {
        $creo = DB::table('offers_creatives')->where('id', $id)->first();

        // Если есть изображение, то сначала удаляем его
        if ($creo->img != '') {
            unlink('uploads/creo/'.$creo->img);
        }

        // Удаляем запись из таблицы
        DB::table('offers_creatives')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Креатив был успешно удалён.');
    }

    public function editActiveStatus($id)
    {
        $offer = $this->getOfferData($id);

        if ($offer->author != Auth::user()->id)
            return redirect()->back();

        if ($offer->active == "active") {
            DB::table('offers')->where('id', $id)->update(['active' => 'paused']);
        } else {
            DB::table('offers')->where('id', $id)->update(['active' => 'active']);
        }

        return redirect()->back()->with('success', 'Статус оффера успешно обновлён!');
    }
}
