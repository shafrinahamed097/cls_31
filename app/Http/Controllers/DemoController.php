<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo1(){
        $result = User::with('profile')->get();
        return $result;
    }
}
