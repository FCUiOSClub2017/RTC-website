@extends("layouts.".((request()->ajax())?'axios':'app')) @section('content') 
<div id="home">
  @include('components.carousel') 
{{--  @include('components.teacher') --}}
  @include('components.intro') 
{{-- @include('components.course') --}}
</div>
@endsection 
