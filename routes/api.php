<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/send-email', function(Request $request){
  
    if($request->ajax()){
       
        $visitorEmail = $request->input('visitor_email');
        $visitorName = $request->input('visitor_name');
        $content = $request->input('message');
        
        $myEmail = "padalia.rushabh@gmail.com";
        $subject = "New Email from website";

        $res = [];

        Mail::send('email', ["content" => $content, "email" => $visitorEmail, "name" => $visitorName ], function ($message) use($visitorEmail, $visitorName, $myEmail) {
            $message->from($visitorEmail, $visitorName);
            $message->to($myEmail, 'Rushabh Padalia');
            $message->subject($myEmail);
      
        });

        if(count(Mail::failures()) > 0){
            $res["success"] = false;
            return $res;
        }

        $res["success"] = true;
        return $res;

    }

});
