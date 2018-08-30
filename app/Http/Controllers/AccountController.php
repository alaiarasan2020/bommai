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
        'addr1' => 'required',
        'addr2' => 'required',
        'city'  => 'required',
        'district' => 'required',
        'pin' => 'required',
        'mobno' => 'required',
        'addrname' => 'required',
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
