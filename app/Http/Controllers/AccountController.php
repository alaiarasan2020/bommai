<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\useraddr;

class AccountController extends Controller
{
    public function index()
    {
      $user=Auth::user();
      return view('account_default',['def_active'=>'active','userdetails'=>$user]);
    }
  public function addressindex()
    {
      $id = Auth::id();
      $addr=useraddr::where('user_id',$id)->get();
      return view('account_address',['addr_active'=>'active','addrdetails'=>$addr]);
    }
  public function addressaddindex()
  {
    return view('account_address_add',['addr_active'=>'active']);
  }
  public function addressadd(Request $request)
  {
    $this->validate($request,[
        'addr1' => 'required|regex:/^[a-zA-Z0-9][a-zA-z0-9 ]+$/|max:255',
        'addr2' => 'required|regex:/^[a-zA-Z0-9][a-zA-z0-9 ]+$/|max:255',
        'addr3' => 'regex:/^[a-zA-Z0-9][a-zA-z0-9 ]+$/|max:255',
        'addr4' => 'regex:/^[a-zA-Z0-9][a-zA-z0-9 ]+$/|max:255',
        'city'  => 'required|regex:/^[a-zA-Z][a-zA-z ]+$/|max:90',
        'district' => 'required|regex:/^[a-zA-Z][a-zA-z ]+$/|max:90',
        'pin' => 'required|regex:/^[0-9]{6}$/',
        'mobno' => 'required|regex:/^[6-9][0-9]{9}$/',
        'addrname' => 'required|regex:/^[a-zA-Z0-9][a-zA-z0-9 ]+$/|max:255',
    ]);
    useraddr::create(['user_id'=>Auth::id(),'addr_line1'=>$request['addr1'],
                     'addr_line2'=>$request['addr2'],'addr_line3'=>$request['addr3'],
                     'addr_line4'=>$request['addr4'],'city'=>$request['city'],
                     'district'=>$request['district'],'pin'=>$request['pin'],
                     'mob_no'=>$request['mobno'],'addr_name'=>$request['addrname']
                      
                     ]);
    return redirect()->action("AccountController@addressindex");
  }
  public function orderindex()
    {
      return view('account_order',['ord_active'=>'active']);
    }
  public function changepassindex()
    {
      return view('account_changepass',['chan_active'=>'active']);
    }
}
