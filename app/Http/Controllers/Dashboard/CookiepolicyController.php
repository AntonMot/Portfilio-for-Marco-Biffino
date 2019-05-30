<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cookiepolicy;

class CookiepolicyController extends Controller
{
    public function index()
    {
        $cookiepolicy = Cookiepolicy::find(1);

        return view('dashboard.cookiepolicy.cookiepolicy', [
            'cookiepolicy' => $cookiepolicy
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $cookiepolicy = Cookiepolicy::find(1);
        $cookiepolicy->update($data);

        return view('dashboard.cookiepolicy.cookiepolicy', [
            'cookiepolicy' => $cookiepolicy
        ]);
    }
}