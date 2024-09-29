<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo1(){

        // embeded json shape
        $result = User::with(['profile', 'post'])->get();
        return $result;
    }
}
