<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // to connect with database
use Illuminate\Support\Facades\session;


class PhoneController extends Controller
{

public $empid1 = "";

public function a1(Request $request)
{
session::put('empid','1');// حط هذي القيمه ب ريكوست
return "the var is stored";
}

public function a2(Request $request)
{
    $phone=DB::table('users')->where('id','=',$request->session()->get('empid'))->get();
      dd($phone);
}



   public function invoic(Request $request)
   {

    $row=[
        'name'=>$request->fullname,
        'country'=>$request->country,
        'birthdate'=>$request->d,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'productname'=>$request->productname,
        'total'=>$request->total,

    ];


    DB::table('invoic')->insert($row);
    $phone=DB::table('invoic')
    ->where('phone','=',$request->phone)
    ->first();
    

    return view('invoic',['inv'=>$phone]);
   }

    public function checkout($id)
    {
    $phone=DB::table('product')
    ->where('id','=',$id)
    ->first();//(first) give me one and (get) many

    return view('checkout',['phone'=>$phone]);
    }
    public function phonetype()
    {
      $phone=DB::table('product')->get();

      //return $phone;//or faster to reach the data-- write response()->json([$phone] );
      return view('phone',['phone'=>$phone]);
    }
    }
