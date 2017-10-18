<?php 
    $carousel = Storage::files('carousel'); 
    $active = rand(1,count($carousel)); 
    $active = -1; 
?>
<section id="contact" style="padding-top: 75px">
    <div class="carousel slide" data-ride="carousel" id="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img\banner\00.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img\banner\01.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img\banner\02.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img\banner\03.jpg">
            </div>
            {{-- @foreach ($carousel as $element)
            <div class="carousel-item @if($loop->iteration == $active)active @endif">
                <img class="d-block w-100" src="data:image/jpeg;base64,{{base64_encode(Storage::get($element))}}">
            </div>
            @endforeach --}}
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            {{-- @for ($i = 1; $i < count($carousel)+1; $i++)
            <li data-target="#carousel" data-slide-to="{{$i}}" @if($i+1 == $active) class="active" @endif></li>
            @endfor --}}
        </ol>
    </div>
</section>