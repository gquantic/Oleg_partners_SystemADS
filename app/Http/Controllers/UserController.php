<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLinks()
    {
        return DB::table('connect_requests')->where('user', Auth::user()->id)->get();
    }
}
