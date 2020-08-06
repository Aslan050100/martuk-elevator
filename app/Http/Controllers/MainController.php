<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Vacancy;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        $vacancies = Vacancy::all();
        return view('index',['vacancies'=>$vacancies]);
    }

    public function getInfo(Request $request){
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
