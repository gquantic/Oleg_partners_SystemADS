<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecureController extends Controller
{
    protected $tokenLength = 32;

    public function __construct()
    {

    }
}
