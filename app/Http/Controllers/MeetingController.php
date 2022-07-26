<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
    
    public function createMeeting(){
        if(!Auth::check()){
            return redirect('/login');
        }
        return view('meeting',['apikey' => env('VIDEOSDK_API_KEY')]);
    }

}
