<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function test() {
        User::find(1);
        echo 'Hola mundo';
    }
}
