<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Achievements;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Validator;

class AchievementsController extends Controller
{

    public function index()
    {
        $achievements = Achievements::all();

        return view('dashboard.achievements.achievements', [
            'achievements' => $achievements
        ]);
    }


    public function create()
    {
        return view('dashboard.achievements.add');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'name_en' => 'required',
            'name_it' => 'required',
            'value' => 'required|numeric'
        ]);

        Achievements::create($data);

        return redirect()->route('achievements.index');
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
        $achievement = Achievements::find($id);
        return view('dashboard.achievements.edit', [
            'achievement' => $achievement
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
            'name_en' => 'required',
            'name_it' => 'required',
            'value' => 'required|numeric'
        ]);
        $achievement = Achievements::find($id);

        $achievement->update($data);

        return redirect()->route('achievements.index');
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
            $achievement = Achievements::find($id);
            $achievement->delete();
        }

        return redirect()->route('achievements.index');
    }
}
