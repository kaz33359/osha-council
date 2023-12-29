<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate\certificate;
use App\Models\Admin\admin;
use App\Models\User\contact;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function auth(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

        $result=admin::where(['email'=>$email])->first();
        if($result){
            if($request->post('password') == $result->password){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                alert()->success('Success', 'Login Success!!');
                return redirect('admin/dashboard');
            }else{
                alert()->success('Success', 'Login Success!!');
                return redirect('admin/login');
            }
        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin/login');
        }
    }
    public function dashboard()
    {
        $result['data']=certificate::all();
        return view('admin.dashboard', $result);
    }
    public function enquiries()
    {
        $result['data']=contact::all();
        return view('admin.enquiries', $result);
    }
    public function delete_enquiry(Request $request, $id)
    {
        $model=contact::find($id);
        $model->delete();
        alert()->success('Success', 'Deleted Successfully!');
        return redirect('admin/enquiries');
    }
    public function add_certificate_data_process(Request $request)
    {

        $model=new certificate();
        $model->certificate_code =$request->post('certificate_ID');
        $model->holder_name =$request->post('certificate_Holder');
        $model->save();
        alert()->success('Success', 'Added Successfully!');
        return redirect('admin/dashboard');
    }
    public function delete_certificate_data_process(Request $request, $id)
    {
        $model=certificate::find($id);
        $model->delete();
        alert()->success('Success', 'Deleted Successfully!');
        return redirect('admin/dashboard');
    }

    public function logout()
    {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        alert()->success('Success', 'Logged out');
        return redirect('admin/login');
    }
}

