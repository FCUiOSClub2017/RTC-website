@extends("layouts.".((request()->ajax())?'axios':'app')) @section('content') 
<div id="home">
    @include('components.carousel') 
@include('components.course')
@include('components.teacher')
</div>
@endsection 