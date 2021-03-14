<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

    public function phone()
    {

        $phones = Phone::get();

        return view('phone', [ 'phones' => $phones ]);
    }

}
