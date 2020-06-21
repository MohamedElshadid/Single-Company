<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Consultation;
use \Validator;


class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function send(Request $request)
     {

        // dd($request->all());
        // return response()->json(['message' => 'User status updated successfully.']);





                $validator = Validator::make($request->all(), [
                    'username'   =>     'required',
                    'phone'      =>     'required',
                    'comment' => 'required',
                    'date' => 'date '
                     ]);
                if ($validator->fails()) {    
                    return response()->json(['erors'=>$validator->messages()->all()]);
                }


            $consultation = new Consultation ();
            $consultation->name =$request->username;
            $consultation->timeToCall=$request->date;
            $consultation->phone=$request->phone;
            $consultation->comment = $request->comment;
            $consultation->save();
            $usersData = array(

                    'username'  =>  $request->username,
                    'phone'     =>  $request->phone,
                    'date'      =>  $request->date,
                    'comment' =>$request->comment
            );

            // Mail::to('yassminelbialy@gmail.com')
            // ->send(new SendEmail($usersData));
            // return back()->with('success' , 'thanx for contacting us :)');
            return response()->json(['message' => 'User status added successfully.']);

     }
    // ************ Yassmin Part *************************
     public function index()
    {
        return view('manager.consultations',['data'=>Consultation::all()]);

    }

     public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Contact $contact)
    {
        //
    }
    public function edit(Contact $contact)
    {
        //
    }
    public function update(Request $request, Contact $contact)
    {
        //
    }
    public function destroy($id)
    {
        $delImage = Consultation::find($id);
        $delImage->delete();

        return redirect('/manager/consultations');
    }

}
