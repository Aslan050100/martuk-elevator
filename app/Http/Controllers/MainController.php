<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    //
    public function index($locale = "ru"){
        $vacancies = Vacancy::all();
        if (! in_array($locale, ['en', 'ru', 'kz'])) {
            abort(400);
        }
        App::setLocale($locale);
        return view('index',['vacancies'=>$vacancies]);
    }

    public function getInfo(Request $request){
        App::setLocale('en');
        $name = $request->name;
        $phone = $request->phone;
        $text = $request->text;
        $feedback = new Feedback;
        $feedback->name = $name;
        $feedback->phone = $phone;
        $feedback->text = $text;
        $feedback->save();
        return redirect()->back();

    }
}
