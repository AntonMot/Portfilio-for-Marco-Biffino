<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Works;
use File;
use Validator;

class WorksController extends Controller
{

    public function index()
    {
        $works = Works::all();

        return view('dashboard.works.works', [
            'works' => $works
        ]);
    }


    public function create()
    {
        return view('dashboard.works.add');
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

        Works::create($data);

        return redirect()->route('works.index');
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
        $work = Works::find($id);
        return view('dashboard.works.edit', [
            'work' => $work
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
        $work = Works::find($id);

        if (!empty($data['preview'])) {

            $path = public_path('uploads');

            $file = $request->file('preview');

            File::delete($path . '/' . $work->preview);

            $file->move($path, $file->getClientOriginalName());

            $data['preview'] = $file->getClientOriginalName();

        }

        $work->update($data);

        return redirect()->route('works.index');
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

            $work = Works::find($id);

            $path = public_path('uploads');

            File::delete($path . '/' . $work->preview);

            $work->delete();
        }

        return redirect()->route('works.index');
    }
}
