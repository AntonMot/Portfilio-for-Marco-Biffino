<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
        $social = Social::find(1);

        return view('dashboard.social.social', [
            'social' => $social
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $social = Social::find(1);
        $social->update($data);

        return view('dashboard.social.social', [
            'social' => $social
        ]);
    }
}
