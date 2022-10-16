<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    //
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
       if($admin_id){
        return Redirect::to('admin-dashboard');
       } 
       return Redirect::to('admin-login')->send();
    }
    public function show_dashboard(){
        $this->AuthLogin(); 
        return view('dashboard.admin_index');
    }
    public function dashboard(Request $request){
        $admin_email= $request->admin_email;
        $admin_password= md5($request->admin_password);

        $result = DB::table('account_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
         
        if($result){
           Session::put('admin_name',$result->admin_name);
           Session::put('admin_id',$result->admin_id);  
           return view('dashboard.admin_index');
        }else{
            Session::put('message','Tài Khoản hoặc mật khẩu chưa đúng. Vui lòng đăng nhập lại!');
            return Redirect::to('/admin-login');
        }
    }
    
    public function log_out(){
       $this->AuthLogin(); 
        Session::put('admin_name',null);
           Session::put('admin_id',null);  
         return Redirect::to('/admin-login');  
    }
}
