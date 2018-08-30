@extends('layouts.app_account_section')


@section('subcontent')
<div class="col-md-7">
  
<form class="form-horizontal" action="{{ url('/myaccount/address/add') }}" method="post">
            {!! csrf_field() !!}
  <div class="form-group{{ $errors->has('addr1') ? ' has-error' : '' }} ">
    <label class="control-label" for="addr1">Address Line1 : </label>
    <input class="form-control" type="text" id="addr1" name="addr1"> </input>
      @if ($errors->has('addr1'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('addr1') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('addr2') ? ' has-error' : '' }}">
    <label class="control-label" for="addr2">Address Line2 : </label>
    <input class="form-control" type="text" id="addr2" name="addr2"> </input>
      @if ($errors->has('addr2'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('addr2') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('addr3') ? ' has-error' : '' }}">
    <label class="control-label" for="addr3">Address Line3 : </label>
    <input class="form-control" type="text" id="addr3" name="addr3"> </input>
      @if ($errors->has('addr3'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('addr3') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group">
    <label class="control-label" for="addr4">Address Line4 : </label>
    <input class="form-control{{ $errors->has('addr4') ? ' has-error' : '' }} " type="text" id="addr4" name="addr4"> </input>
      @if ($errors->has('addr4'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('addr4') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    <label class="control-label" for="city">City : </label>
    <input class="form-control"  type="text" id="city" name="city"> </input>
      @if ($errors->has('city'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
    <label class="control-label" for="district">District : </label>
    <input class="form-control" type="text" id="district" name="district"> </input>
      @if ($errors->has('district'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }}">
    <label class="control-label" for="pin">Pin Code : </label>
    <input class="form-control" type="text" id="pin" name="pin"> </input>
      @if ($errors->has('pin'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('mobno') ? ' has-error' : '' }}">
    <label class="control-label" for="mobno">Mobile : </label>
    <input class="form-control" type="text" id="mobno" name="mobno"> </input>
      @if ($errors->has('mobno'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('mobno') }}</strong>
                                    </small>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('addrname') ? ' has-error' : '' }}">
    <label class="control-label" for="addrname">Address Type : </label>
    <input class="form-control" type="text" id="addrname" name="addrname"> </input>
      @if ($errors->has('addrname'))
                                    <small class="help-block">
                                        <strong>{{ $errors->first('addrname') }}</strong>
                                    </small>
                                @endif
  </div>

<button class="form-control btn-warning" >
  Add
</button>
</form>
</div>
@endsection
