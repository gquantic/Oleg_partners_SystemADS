<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiOffersController extends Controller
{
    private $tokenLength = 255;

    public function __construct(Request $request)
    {

    }

    private function getGrants($id)
    {
        return DB::table('api_offers')->where('offer', $id)->first();
    }

    public function updateToken($id)
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token = '';

        while (strlen($token) < 255) {
            $str = str_shuffle($permitted_chars);
            $token = $token.$str;
        }

        $token = substr(str_shuffle($token), 0, 255);

        if (empty($this->getGrants($id))) {
            DB::table('api_offers')->insert([
                'offer' => $id,
                'token' => $token,
                'grants' => 'all',
                'created_at' => now(),
            ]);
        } else {
            DB::table('api_offers')->where('offer', $id)->update([
                'offer' => $id,
                'token' => $token,
                'grants' => 'all',
                'updated_at' => now(),
            ]);
        }

        return $token;
//        return ;
    }
}
