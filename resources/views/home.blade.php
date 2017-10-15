@extends("layouts.".((request()->ajax())?'axios':'app')) @section('content') @include('components.carousel') @include('components.course')
@endsection 