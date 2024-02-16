<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    /**
     * @param Request $request Instancia de la request.
     * @param int $userId Id del usuario.
     */
    public function userDetails(Request $request, int $userId) {
        return $userId . ' / ' . $request->input('v', 'sin valor');
    }
}
