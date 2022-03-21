<?php

namespace Muradsaifi\Bulkemailtool\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Muradsaifi\Bulkemailtool\Models\Bulkemailtool;
use Muradsaifi\Bulkemailtool\Mail\BulkEmailToolTemplate;

class BulkController extends Controller
{
    public function send(){

        return view('bulkemailtool::send');
    }

    public function submit(Request $request){


        $request->validate([
            'subject'   =>  'required|string|max:100',
            'message'   =>  'required|string'
        ]);

        $email_list = $request->list;
        $email_list_validated = false;
        $subject = $request->subject;

        if(strpos($email_list, ',')){
            $email_list_validated = explode(',', $email_list);
        }elseif(strpos($email_list, "\r\n")){
            $email_list_validated = explode("\r\n", $email_list);
        }

        if(!$email_list_validated){
            return redirect()->back()->with('message', 'Email List Error!');
        }

        // dd($email_list_validated);

        $seconds = 3;
        foreach($email_list_validated as $email){

            Mail::to(str_replace(' ', '', $email))->later($seconds, new BulkEmailToolTemplate($request->subject, $request->message));
            $seconds += 3;
        }

         //insert to database
         Bulkemailtool::create([
            'subject'   =>  $subject,
            'message'   =>  $request->message,
            'email_list'=>  $email_list_validated
        ]);


        return redirect()->back()->with('message', 'Email send successfully!');

    }


    public function bulk_email_recent(){
        $bulkemailtool = Bulkemailtool::orderBy('id', 'desc')->get();
        return view('bulkemailtool::sent', compact('bulkemailtool'));
    }


    public function view($id){
        $email = Bulkemailtool::findOrFail($id);
        return view('bulkemailtool::view', compact('email'));
    }


}
