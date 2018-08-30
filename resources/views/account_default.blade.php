@extends('layouts.app_account_section')

@section('subcontent')
{{ $userdetails['name'] }}
{{ $userdetails['email'] }}
{{ $userdetails['mobile'] }}
@endsection
