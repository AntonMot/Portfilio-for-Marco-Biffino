<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Softwares;
use File;
use Validator;

class SoftwaresController extends Controller
{

    public function index()
    {
        $softwares = Softwares::all();

        return view('dashboard.softwares.softwares', [
            'softwares' => $softwares
        ]);
    }


    public function create()
    {
        return view('dashboard.softwares.add');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'title_en' => 'required',
            'title_it' => 'required',
            'preview' => 'required|mimes:jpeg,bmp,png'
        ]);
        $path = public_path('uploads');

        $file = $request->file('preview');

        $file->move($path, $file->getClientOriginalName());

        $data['preview'] = $file->getClientOriginalName();

        Softwares::create($data);

        return redirect()->route('softwares.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $software = Softwares::find($id);
        return view('dashboard.softwares.edit', [
            'software' => $software
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $request->validate([
            'title_en' => 'required',
            'title_it' => 'required',
            'preview' => 'mimes:jpeg,bmp,png'
        ]);
        $software = Softwares::find($id);

        if (!empty($data['preview'])) {

            $path = public_path('uploads');

            $file = $request->file('preview');

            File::delete($path . '/' . $software->preview);

            $file->move($path, $file->getClientOriginalName());

            $data['preview'] = $file->getClientOriginalName();

        }

        $software->update($data);

        return redirect()->route('softwares.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!empty($id)) {

            $software = Softwares::find($id);

            $path = public_path('uploads');

            File::delete($path . '/' . $software->preview);

            $software->delete();
        }

        return redirect()->route('softwares.index');
    }
}
