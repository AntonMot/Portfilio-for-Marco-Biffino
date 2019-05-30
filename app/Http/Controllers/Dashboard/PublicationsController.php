<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publications;
use File;
use Validator;

class PublicationsController extends Controller
{

    public function index()
    {
        $publications = Publications::all();

        return view('dashboard.publications.publications', [
            'publications' => $publications
        ]);
    }


    public function create()
    {
        return view('dashboard.publications.add');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'title_en' => 'required',
            'title_it' => 'required',
            'link' => 'required',
            'content_en' => 'required',
            'content_it' => 'required'
        ]);

        Publications::create($data);

        return redirect()->route('publications.index');
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
        $publication = Publications::find($id);
        return view('dashboard.publications.edit', [
            'publication' => $publication
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
        $publication = Publications::find($id);

        if (!empty($data['preview'])) {

            $path = public_path('uploads');

            $file = $request->file('preview');

            File::delete($path . '/' . $publication->preview);

            $file->move($path, $file->getClientOriginalName());

            $data['preview'] = $file->getClientOriginalName();

        }

        $publication->update($data);

        return redirect()->route('publications.index');
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

            $publication = Publications::find($id);

            $publication->delete();
        }

        return redirect()->route('publications.index');
    }
}
