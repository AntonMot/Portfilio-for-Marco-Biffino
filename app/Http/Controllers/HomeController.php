<?php

namespace App\Http\Controllers;


use App\Models\Achievements;
use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\About;
use App\Models\Works;
use App\Models\Calculators;
use App\Models\Softwares;
use App\Models\Service;
use App\Models\ServiceHeader;
use App\Models\Contact;
use App\Models\Skills;
use App\Models\Publications;
use App\Models\Cookiepolicy;
use App\Models\Legal;
use App\Models\Privacy;
use App\Models\Social;
use App\User;
use Mail;
use App\Mail\Feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::find(1);
        $about = About::find(1);
        $serviceHeader = ServiceHeader::find(1);
        $works = Works::all();
        $calculators = Calculators::all();
        $softwares = Softwares::all();
        $services = Service::all();
        $contacts = Contact::find(1);
        $skills = Skills::all();
        $achievements = Achievements::all();
        $publications = Publications::all();
        $cookiepolicy = Cookiepolicy::find(1);
        $legal = Legal::find(1);
        $privacy = Privacy::find(1);
        $social = Social::find(1);

        return view('index', [
            'main' => $main,
            'about' => $about,
            'works' => $works,
            'calculators' => $calculators,
            'softwares' => $softwares,
            'services' => $services,
            'serviceHeader' => $serviceHeader,
            'contacts' => $contacts,
            'skills' => $skills,
            'achievements' => $achievements,
            'publications' => $publications,
            'cookiepolicy' => $cookiepolicy,
            'legal' => $legal,
            'privacy' => $privacy,
            'social' => $social
        ]);
    }

    public function email(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $user = new User();
        $user->email = 'marco.biffino@gmail.com';
        Mail::to($user)->send(new Feedback($data['email'], $data['message']));

        return redirect()->action(
            'HomeController@index'
        );
    }
}
