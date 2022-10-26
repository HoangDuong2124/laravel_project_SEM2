<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckOutController extends Controller
{
     public function search_hospital(Request $request){
        $keyworks= $request->keyword_search;
        $search_hospital= DB::table('all_category_hospital')->where('name_hospital','like','%'.$keyworks.'%')->get();
        return view('front.checkout.kq_search_hospital')->with('search_hospital',$search_hospital);
     }
     public function search_doctor(Request $request){
        $keyworks= $request->keyword_search;
        $search_doctor= DB::table('all_category_doctor')->where('name_doctor','like','%'.$keyworks.'%')->orWhere('hospital_doctor','like','%'.$keyworks.'%')->orWhere('specialist_doctor','like','%'.$keyworks.'%')->get();
        return view('front.checkout.kq_search_doctor')->with('search_doctor',$search_doctor);
     }
     public function sendBook(Request $request){
        $data = array();
        $data['customer_name'] = $request->book_name;
        $data['customer_phone'] = $request->phonenumber;
        $data['customer_email'] = $request->email_address;
        $data['book_type'] = "Đặt khám nhanh";
        $data['customer_status'] = "0";
        $data['describe'] = $request->text_area;
        DB::table('all_book_appointment')->insert($data);
        
       return Redirect::to('/');

     }
    //
    public function sendEmail($order){
       $email_to = $order->email_address;
       Mail::send('front.checkout.CheckOut',
       compact('order'),
       function ($message) use ($email_to){
         $message->from('hoangduong21112003@gmail.com','Health_Plus');
         $message->to($email_to,$email_to);
         $message->subject('Bạn có thông báo từ Health Plus');
       });
       return Redirect('/');
    }
}
