@extends('layouts.app_account_section')


@section('subcontent')
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-body">
      <i class="fa fa-plus "></i>
    </div>
    <a href="{{ url('myaccount/address/add') }}">
    <div class="panel-footer">
      Add New
      </div></a>
  </div>
</div>
@foreach($addrdetails as $addr)
<div class="col-md-4">
  <div class="panel panel-default">
  <div class="panel-body">
  {{ $addr['addr_line1'] }}
    <br />
{{ $addr['addr_line2'] }}
    <br />
{{ $addr['addr_line3'] }}
    <br />
{{ $addr['addr_line4'] }}
{{ $addr['city'] }}
    <br />
{{ $addr['district'] }}
    <br />
{{ $addr['mob_no'] }}
</div>
  <div class="panel-footer text-uppercase">
  {{ $addr['addr_name'] }}
  </div>
</div>

</div>
@endforeach
@endsection
