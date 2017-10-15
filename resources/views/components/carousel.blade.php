<?php 
                $carousel = Storage::files('carousel'); 
                $active = rand(1,count($carousel)); 
            ?>
<section id="contact">
    <div class="carousel slide" data-ride="carousel" id="carousel">
        <div class="carousel-inner">
            @foreach ($carousel as $element)
            <div class="carousel-item @if($loop->iteration == $active)active @endif">
                <img class="d-block w-100" src="data:image/jpeg;base64,{{base64_encode(Storage::get($element))}}">
            </div>
            @endforeach
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
            @for ($i = 0; $i < count($carousel); $i++)
            <li data-target="#carousel" data-slide-to="{{$i}}" @if($i+1 == $active) class="active" @endif></li>
            @endfor
        </ol>
    </div>
</section>