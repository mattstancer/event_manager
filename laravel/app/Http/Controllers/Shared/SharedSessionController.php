<?php

namespace App\Http\Controllers\Shared;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SharedSessionController extends Controller
{
    //
    public function createSessionData(Request $request, $login, $role){
        $date = DateTime::dateTime();
        $token = sha1($date.$login);

    }
}
