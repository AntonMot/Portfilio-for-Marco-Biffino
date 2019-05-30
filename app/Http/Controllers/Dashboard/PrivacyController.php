<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::find(1);

        return view('dashboard.privacy.privacy', [
            'privacy' => $privacy
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $privacy = Privacy::find(1);
        $privacy->update($data);

        return view('dashboard.privacy.privacy', [
            'privacy' => $privacy
        ]);
    }
}
