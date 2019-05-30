<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Skills;

class AboutController extends Controller
{
    public function index()
    {
        $skills = Skills::all();
        $about = About::find(1);

        return view('dashboard.about.about', [
            'about' => $about, 'skills' => $skills
        ]);
    }

    public function header(Request $request)
    {
        $data = $request->all();
        About::find(1)->update($data);

        return redirect()->route('about.index');
    }

    public function create()
    {
        return view('dashboard.about.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'skill_en' => 'required',
            'skill_it' => 'required',
            'ability' => 'required|numeric',
            'description_en' => 'required',
            'description_it' => 'required'
        ]);

        Skills::create($data);

        return redirect()->route('about.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skills::find($id);
        return view('dashboard.about.edit', [
            'skill' => $skill
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
            'skill_en' => 'required',
            'skill_it' => 'required',
            'ability' => 'required|numeric',
            'description_en' => 'required',
            'description_it' => 'required'
        ]);
        Skills::find($id)->update($data);

        return redirect()->route('about.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skills::find($id);
        if (!empty($skill)) {
            $skill->delete();
        }
        return redirect()->route('about.index');
    }
}
