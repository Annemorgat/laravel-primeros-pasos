<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function userDetails(Request $request, $userId) {
        return $userId . ' / ' . $request->input('v', 'sin valor');
    }
}
