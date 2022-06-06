<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
    public function getToken(){
        if(!Auth::check()){
            return redirect('/login');
        }

        $issuedAt   = new DateTime();
        $expire     = $issuedAt->modify('+24 hours')->getTimestamp();

        $payload = [
            'apikey' => env('VIDEOSDK_API_KEY'),
            'permissions' => ["allow_join", "allow_mod"],
            'iat' => $issuedAt->getTimestamp(),
            'exp' => $expire
        ];
    
        $jwt = JWT::encode($payload, env('VIDEOSDK_SECRET_KEY'), 'HS256');
    
        return response($jwt)->header('Content-Type', 'application/json');
        // return json_encode($jwt);
        // eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhcGlrZXkiOiJiNGM4OTI1NC1mMDc1LTQxNzQtOGQ0Zi05Mjk1MDFhMGU2ZGIiLCJwZXJtaXNzaW9ucyI6WyJhbGxvd19qb2luIiwiYWxsb3dfbW9kIl0sImlhdCI6MTY1NDU0MTM1MCwibmJmIjoxNjU0NTQxMzUwfQ.NvUqNrMDURdHOJCry2bsWx1NQ98BLKxP_ahrEoBBzP8
    }
    
    public function createMeeting(){
        if(!Auth::check()){
            return redirect('/login');
        }
        $token = $this->getToken()->content();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('VIDEOSDK_API_ENDPOINT') . '/api/meetings',
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return view('meeting',['response' => $response,'token' => $token]);
        // return $response;
    }

    public function validateMeeting($id){
        if(!Auth::check()){
            return redirect('/login');
        }
        // dd($id);
        // header("Content-type: application/json; charset=utf-8");

        // $meetingId = $request->meetingId;

        $data = json_decode(file_get_contents('php://input'), true);
    
        $token = $data["token"];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('VIDEOSDK_API_ENDPOINT') . '/api/meetings/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return view('meeting',['response' => $response]);
    }


}
