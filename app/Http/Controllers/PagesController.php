<?php

namespace App\Http\Controllers;

use App\Models\Certificate\certificate;
use Illuminate\Http\Request;
use App\Models\User\contact;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about_us');
    }
    public function course()
    {
        return view('course');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contact_submit(Request $request)
    {
        $data = new contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        alert()->success('Success', 'Your Enquiry has been submitted.');
        return redirect()->back();
    }
    public function certificate_validation(Request $request)
    {
        $result=certificate::where(['certificate_code'=>$request->certificate_ID])->first();
        if($result){
            alert()->success('Success!!', 'You can find your details below. ');
            return redirect('/verification')->with('result', $result);
        }
        else
        {
            alert()->error('Invalid Certificate ID', 'The provided Certificate ID does not exist. Please enter a valid ID.');
            return redirect()->back();
        }
    }
    public function verification()
    {
        return view('verification');
    }
    public function construction_and_safety()
    {
        return view('constructionsafety');
    }
    public function fire_and_safety()
    {
        return view('fireandsafety');
    }
    public function food_and_hygeine()
    {
        return view('foodandhygeine');
    }
    public function general_safety()
    {
        return view('generalsafety');
    }
    public function environment_safety()
    {
        return view('environmentsafety');
    }
    public function certificate_hand_environment()
    {
        return view('certificates.certificate_hand_environment');
    }
    public function certificate_in_construction_industry()
    {
        return view('certificates.certificate_in_construction_industry');
    }
    public function certificate_in_fire_safety()
    {
        return view('certificates.certificate_in_fire_safety');
    }
    public function certificate_in_general_industry()
    {
        return view('certificates.certificate_in_general_industry');
    }
    public function certificate_in_oil_and_gas()
    {
        return view('certificates.certificate_in_oil_and_gas');
    }


}
