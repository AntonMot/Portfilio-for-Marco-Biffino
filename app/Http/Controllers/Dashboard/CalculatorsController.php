<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Calculators;
use File;
use Validator;

class CalculatorsController extends Controller
{

    public function index()
    {
        $calculators = Calculators::all();

        return view('dashboard.calculators.calculators', [
            'calculators' => $calculators
        ]);
    }


    public function create()
    {
        return view('dashboard.calculators.add');
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

        Calculators::create($data);

        return redirect()->route('calculators.index');
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
        $calculator = Calculators::find($id);
        return view('dashboard.calculators.edit', [
            'calculator' => $calculator
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
        $calculator = Calculators::find($id);

        if (!empty($data['preview'])) {

            $path = public_path('uploads');

            $file = $request->file('preview');

            File::delete($path . '/' . $calculator->preview);

            $file->move($path, $file->getClientOriginalName());

            $data['preview'] = $file->getClientOriginalName();

        }

        $calculator->update($data);

        return redirect()->route('calculators.index');
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

            $calculator = Calculators::find($id);

            $path = public_path('uploads');

            File::delete($path . '/' . $calculator->preview);

            $calculator->delete();
        }

        return redirect()->route('calculators.index');
    }
}
