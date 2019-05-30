<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Legal;

class LegalController extends Controller
{
    public function index()
    {
        $legal = Legal::find(1);

        return view('dashboard.legal.legal', [
            'legal' => $legal
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $legal = Legal::find(1);
        $legal->update($data);

        return view('dashboard.legal.legal', [
            'legal' => $legal
        ]);
    }
}
