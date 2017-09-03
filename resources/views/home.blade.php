@extends("layouts.".((request()->ajax())?'axios':'rtc')) @section('content') 
    @include('components.rtc.header') 
@endsection 
