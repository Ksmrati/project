<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Donate;
use Illuminate\Http\Request;
use Mail;



class DonateController extends Controller
{
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
  /**
  function create() {
        
  
        return view('donate');
    }
    */

    function create() {
        
  
         return view('donate');
    }


    function process(Request $request) {
        
   $prod=array(
     'name'=> $request->input('name'),
     'mobile_no'=> $request->input('mobile_no'),
      'email'=> $request->input('email'),
       'amount'=> $request->input('amount'),
        'message'=> $request->input('message'),
      );
 //   $prod = json_encode($prod, true); setcookie('products', $prod);

      return view('payumoney',compact('prod'));

    }     




      function success(Request $request)
     {
     $donate = \App\Donate::create([

    'paymentId' => $request->input('txn_id'),
    'token' => $request->input('hash'),
    'amount' => $request->input('txn_amt'),
    'status' => $request->input('txn_msg'),
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'mobile_no' => $request->input('mobile_no'),
    'message' => $request->input('message'),
    
    ]);
     
      $donate = $request->all();
      $to_email = $donate['email'];
       $paymentId = $donate['txn_id'];
        \Mail::send('emails.donateemails', compact('donate'), function($message) use ($to_email){
            $message->to($to_email, 'Donatelaravel')->subject('you have received a message');
        });
   
  
     return redirect()->route('invoice', $paymentId);
   }


    public function invoice($paymentId) {
         
       $donate = \App\Donate::where('paymentId' ,'=', $paymentId)->limit(1)->first();
  
        return view('invoice', compact('donate'));
    }




      function Paymentfailure()
    {
     return view('Paymentfailure');
    }


     function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
     function show(Donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    function edit(Donate $donate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
     function update(Request $request, Donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donate  $donate
     * @return \Illuminate\Http\Response
     */
     function destroy(Donate $donate)
    {
        //
    }
}

