<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Address;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'addresses' => Address::query()->where('user_id', 1)->get(),
        ]);
    }
}
