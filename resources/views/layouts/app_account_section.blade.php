@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
  <li class="{{ isset($def_active)?$def_active:'' }}"><a href="{{ url('/myaccount') }}">Profile</a></li>
  <li class="{{ isset($addr_active)?$addr_active:'' }}"><a href="{{ url('/myaccount/address') }}">Addresses</a></li>
  <li class="{{ isset($ord_active)?$ord_active:'' }}"><a href="{{ url('/myaccount/order') }}">My Orders</a></li>
  <li class="{{ isset($chan_active)?$chan_active:'' }}"><a href="{{ url('/myaccount/changepassword') }}">Change Password</a></li>
  <li><a href="{{ url('/logout') }}">Logout</a></li>
</ul>
                </div>
            </div>
        </div>
      <div class="col-md-6">
      
              @yield('subcontent')
         
      </div>
    </div>
</div>
@endsection