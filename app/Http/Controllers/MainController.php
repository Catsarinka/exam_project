<?php

namespace App\Http\Controllers;

use App\ContactModel;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function main(){
        return view('main');

    }

    public function project_birds(){
        return view('project_birds');
    }

    public function project_winter(){
        return view('project_winter');
    }

    public function project_squirrel(){
        return view('project_squirrel');
    }

    public function reviews(){

        $review = new ContactModel();
        // dd($review->all());
        return view('reviews', ['review'=>$review->all()]);
    }

    public function reviews_check(Request $request){
        // dd($request);
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'subject'=>'required|min:4|max:100',
            'message'=> 'required|min:15|max:500',
        ]);
    

    $reviews = new ContactModel();
    $reviews->email = $request->input('email');
    $reviews->subject = $request->input('subject');
    $reviews->message = $request->input('message');

    $reviews->save();

    return redirect()->route('reviews');
}

}
