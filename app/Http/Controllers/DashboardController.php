<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class DashboardController extends Controller
{
    public function __construct()

    {
        $this->middleware('auth');
    }

    public function index()
    {
        $main = Main::find(1);
        return view('dashboard.index', ['main' => $main]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        Main::find(1)->update($data);
        return back();
    }
}
