<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDetailsController extends Controller
{
    /**
     * @param int $userId Id del usuario.
     */
    public function userDetails(int $userId)
    {
        // Un objeto siempre es true salvo que su valor sea null
        if ($user = User::find($userId)) {
            return view('user-details', [
                'user' => $user
            ]);
        } else {
            abort(404);
        }
    }
}
