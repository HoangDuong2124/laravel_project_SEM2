<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    //
    public function index(){
        return view('front.Home');
       }
    public function search_hospital(){
        $cate_hospital =  DB::table('all_category_hospital')->get();
        return view('front.Search_Hospital')->with('cate_hospital',$cate_hospital);
    }   
    public function search_doctor(){
        $cate_doctor =  DB::table('all_category_doctor')->get();
        return view('front.Search_Doctor')->with('cate_doctor',$cate_doctor);
    }   
    public function search_service(){
        //$cate_doctor =  DB::table('all_category_doctor')->get();
        return view('front.Search_Service');//->with('cate_doctor',$cate_doctor);
    }   


}
