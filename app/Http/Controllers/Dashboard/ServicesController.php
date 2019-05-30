<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('dashboard.services.services');
    }

    public function header(Requres $request)
    {
        $data = $request->all();
        ServiceHeader::find(1)->update($data);
        return redirect()->route('services.index');
    }
}
