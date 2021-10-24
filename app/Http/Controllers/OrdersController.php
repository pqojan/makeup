<?php

namespace App\Http\Controllers;

use App\Mail\OrderShip;
use App\Models\orders;
use App\Models\works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Mail\Mailable;


class OrdersController extends Controller
{
    public function index()
    {
        $db = works::all();
        return view('orderPage',compact('db'));
    }

    public function signup(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone_number' => 'required',
        ]);

        $orders = orders::create([
            'name' => $request->first_name,
            'order_date' => $request->date,
            'order_type' => $request->subject,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);
        Session::flash('success', 'This is a message!'); 
        Session::put('email', 'Email is send!'); 
 
        if($request->method() == "POST")
        {
          $zakaz = 'У ВАС НОВЫЙ ЗАКАЗ!';
          $mail = $request->email;
          $name = $request->name;
          $phone = $request->phone_number;
          $order_date = $request->date;
          Mail::to('pargev90@gmail.com')->send(new OrderShip($zakaz, $mail, $name, $phone, $order_date));
        } 

       
        return redirect()->route('home');
               
    }
}
