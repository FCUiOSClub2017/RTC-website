@extends("layouts.".((request()->ajax())?'axios':'rtc')) @section('content') 
    @include('rtc.header') 
@endsection 
