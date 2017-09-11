<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Welcome to iOS Club</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bodymovin/4.10.2/bodymovin_light.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.5/require.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

</head>

<body>
<div class="wrapper">
    <div class="panel">
      <div class="panel__content-col">
        <div class="panel__content">
          <div class="panel__text">
            <p class="panel__subtitle">逢甲</p>
            <h1 class="panel__title">iOS <br>Club</h1>
            <p class="panel__addr">只有那些瘋狂到以為自己可以改變世界的人，才能改變這個世界</p>
          </div>
        </div>
      </div>
      <div class="panel__img-col">
        <img src="steve-jobs.jpg" alt="" class="panel__img">
      </div>
    </div> 
    <div class="button btn1"> 了解我們 </div>   
</div>

<div class="wrapper content0">
    <div class="title white"> 我們有..... </div>
    
  <div class="panel panel_content2">
    <div class="pg pg_1 pgup">
      <div class="icon icon_1 iconup_1"></div>
      <div class="desc_div">
        <h1 class="desc_title">Apple直屬</h1>
        <p class="desc">台灣唯一Apple公司認證學生社團。</p>
      </div>
    </div>
    <div class="pg pg_2 pgup">
      <div class="icon icon_2 iconup_2"></div>
      <div class="desc_div">
          <h1 class="desc_title">完全免費</h1>
          <p class="desc">20台Mac免費使還有定期聚餐活動。</p>
      </div>
    </div>
    <div class="pg pg_3 pgup">
      <div class="icon icon_3 iconup_3"></div>
      <div class="desc_div">
          <h1 class="desc_title">專業師資</h1>
          <p class="desc">專業講師都經過蘋果官方RTC認證。</p>
      </div>
    </div>
  </div>
  <div class="next next1">
    <i class="fa fa-angle-down" aria-hidden="true"></i>   
  </div>

</div>

<div class="wrapper content1">
    <div>
      <h1 class="title title2">我什麼都不會可以加入嗎？</h1>          
    </div>
    <div class="question" id="bm"></div>
  <div class="button btn2"> 看答案 </div>       
</div>
  
  <div class="wrapper content2">
    <div class="title white"> 當然可以！我們會教給你.. </div>
    <div class="panel panel_content2">
      <div class="pg pg_1 pgdown">
        <div class="icon icon_1"></div>
        <div class="desc_div">
          <h1 class="desc_title">UI設計</h1>
          <p class="desc">一流的設計技巧，絕對實用的教學。</p>
        </div>
      </div>
      <div class="pg pg_2 pgdown">
        <div class="icon icon_2"></div>
        <div class="desc_div">
            <h1 class="desc_title">產品管理</h1>
            <p class="desc">教你將創意轉化為產品，如何帶領團隊。</p>
        </div>
      </div>
      <div class="pg pg_3 pgdown">
        <div class="icon icon_3"></div>
        <div class="desc_div">
            <h1 class="desc_title">代碼編寫</h1>
            <p class="desc">基礎與入門班級，手把手教你寫出APP。</p>
        </div>
      </div>
    </div>
    <div class="next next2">
      <i class="fa fa-angle-down" aria-hidden="true"></i>   
    </div>
  </div>

  <div class="wrapper final">
    <div class="container">
      <div class="textcon">
          <div class="heart">心動</div>
          <div class="go">還不馬上報名</div>
      </div>

    </div>
    
    <div class="links">
      <a class="link" href="https://iosclub.typeform.com/to/kXXXVk">>  新生茶會</a>
      <a class="link" href="{{route('iosclub.home')}}">>  官方網站</a>
    </div>

    
  </div>    
</body>


<script>
var $body = $('body'),
  $panel = $('.panel'),
  $pContent = $('.panel__content'),
  $img = $('.panel__img-col'),
  $button = $('.btn1'), 
  $section2 = $('.content2'),
  $section1 = $('.content1')
  $button2 = $('.btn2');

var animation = bodymovin.loadAnimation({
  container: document.getElementById('bm'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'new1.json'
})

  setTimeout(function() { window.scrollTo((0,0), 1)});


function initTilt() {
  TweenMax.set([$pContent, $img], { transformStyle: "preserve-3d" });

  $body.mousemove(function(e) {
    var sxPos = e.pageX / $panel.width() * 100 - 100;
    var syPos = e.pageY / $panel.height() * 100 - 100;
    TweenMax.to($pContent, 2, {
      rotationY: 0.03 * sxPos,
      rotationX: -0.03 * syPos,
      transformPerspective: 500,
      transformOrigin: "center center -400",
      ease: Expo.easeOut
    });
    TweenMax.to($img, 2, {
      rotationY: 0.03 * sxPos,
      rotationX: -0.03 * syPos,
      transformPerspective: 500,
      transformOrigin: "center center -200",
      ease: Expo.easeOut
    });
  });
}

function initTilt2() {
  window.addEventListener('deviceorientation', function(event) {
    var beta = event.beta;
    var gamma = event.gamma;

    var sxPos = event.gamma * 7.5 + 5 / $panel.width() * 100 - 100;
    var syPos = -(event.beta-50)*10 -10 / $panel.height() * 100 - 100;
    TweenMax.to($pContent, 2, {
      rotationY: 0.03 * sxPos,
      rotationX: -0.03 * syPos,
      transformPerspective: 500,
      transformOrigin: "center center -400",
      ease: Expo.easeOut
    });
    TweenMax.to($img, 2, {
      rotationY: 0.03 * sxPos,
      rotationX: -0.03 * syPos,
      transformPerspective: 500,
      transformOrigin: "center center -200",
      ease: Expo.easeOut
    });
  }, false);
}

$button.on('click', function(){
  console.log('click');
  $body.animate({
    scrollTop: $('.content0').offset().top 
  }, 500);
  return false;
});

$button2.on('click', function(){
  console.log('click');
  $body.animate({
    scrollTop: $section2.offset().top 
  }, 500);
  return false;
});

$('.next1').on('click', function(){
  console.log('click');
  $body.animate({
    scrollTop: $('.content1').offset().top 
  }, 500);
  return false;
});

$('.next2').on('click', function(){
  console.log('click');
  $body.animate({
    scrollTop: $('.final').offset().top 
  }, 500);
  return false;
});



  // Check if it's time to start the animation.
function checkAnimation() {
    var $elem = $('.pgup');
    var $elem2 = $('.pgdown');
    if (isElementInViewport($elem)) {
        // Start the animation
        $elem.addClass('start');
    } else if(isElementInViewport($elem2)) {
        $elem2.addClass('start');
    }else{

    }
}

function isElementInViewport(elem) {
  var $elem = $(elem);

  // Get the scroll position of the page.
  var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
  var viewportTop = $(scrollElem).scrollTop();
  var viewportBottom = viewportTop + $(window).height();

  // Get the position of the element on the page.
  var elemTop = Math.round( $elem.offset().top );
  var elemBottom = elemTop + $elem.height();

  return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}

  // Capture scroll events
$(window).scroll(function(){
    checkAnimation();
});

initTilt2();
initTilt();

//console.clear();
</script>

<style>
html {
  box-sizing: border-box;
font-family: 'Varela Round', sans-serif;

}

*, *:before, *:after {
  box-sizing: inherit;
}

html, body {
  width: 100%;
  height: 100%;
margin: 0;

}




body {
  background-color: white;
  color: #2e2e2e;
  font-size: 18px;
  font-feature-settings: "kern" 1,"liga" 1,"frac" 1, "lnum" 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

h1 {
  font-family: 'Varela Round';
}

p {
  font-family: 'Varela Round', sans-serif;
}

.container{
width: 100%;
height: 100%;
display: flex;
justify-content: center;
align-items: center;
background-color: #fff;
font-size: 3rem;
}

.heart{
color: red;
font-weight: bolder;
animation:breath infinite;
animation-fill-mode: forwards;
animation-duration: 1s;
animation-timing-function: ease-in;
}

.go{
font-size: 2.3rem;
}

.finalbtn{
margin-top: 0% !important;
margin-bottom: 15%;
}

.textcon{
margin-top: -10%;
}

.links{
position: absolute;
cursor: pointer;
bottom: 30%;
left: 42%;
}


a:link {
text-decoration: none;

  color:black;
}

/* visited link */
a:visited {
text-decoration: none;
  color: black;
}

/* selected link */
a:active {
  color: black;
}

.link{
margin: 10px;
margin-top: 40px;
display: block;
border-bottom: 1px solid white;

transition: 0.4s;
}

.link:hover{
border-bottom: 1px solid darkgray;
color: darkgray;

}

@keyframes breath {
0%{
  font-size: 3rem;
}

40%{
  font-size: 3.2rem;
}

46%{
  font-size: 2.6rem;
}

53%{
  font-size: 3.2rem;
}

60%{
  font-size: 3rem;
}

64%{
  font-size: 2.6rem;
}

70%{
  font-size: 3.4rem;
}

76%{
  font-size: 3rem;
}


100%{
  font-size: 3rem;
}

}


@media all and (min-width: 320px) and (max-width: 480px) {
  h1{
    font-size: 75px;
  }

  p{
    font-size: 17px;
    width: 70%;
  }
  
  .container{
    flex-direction: column;
  }

  .panel__content{
    top: 12% !important;
  }
  .panel{
    height: 350px !important;
    margin-top: -30% !important;
    width: 100%;
  }

  .button{
   margin-top: 20% !important;
  }

  .panel_content2{
    flex-direction: column;
  }

  .desc_title{
    font-size: 30px !important;
  }

  .icon{
    width: 50px !important;
    height: 50px !important;
    flex-basis: 27%;
    transition: 1s;
  }

  .icon:hover{
    cursor: pointer;
  }

  .pg{
    flex-direction: row !important;
    transition: 0.5s;
    width: 100% !important;

  }

  .title{
    padding-bottom: 100px;
    margin-top: -80px;
    font-size: 25px !important;
  }


  .title2{
    margin-bottom: -100px;
  }

  .textcon{
    margin-top: -50% !important;
  }

}



.next{
position: absolute;
top: 83%;
left: 50%;
transform: translate(-50%,-50%);
color: white;
bottom: 50px;
font-size: 3rem;
animation:fadeInloop infinite;
animation-fill-mode: forwards;
animation-duration: 2.2s;
animation-timing-function: ease-in;
cursor: pointer ;
}

.next:hover{

animation-play-state: paused;
font-size: 3.5em;
}

@keyframes fadeInloop {
    0% {
      font-size: 3rem;

      opacity: 0.4;
    }

    50%{
      opacity: 1;
      font-size: 3.3rem;
    }

    100% {
      font-size: 3rem;

      opacity: 0.4;
    }
}

.content0{
background-color: #2e2e2e; 
}


.title{
font-size: 30px;
}

.white{
color: white;
}

.desc_div{
padding-top: 20px;
}


.desc_title{
font-size: 50px;
margin: 0 auto;

}


.content2{
height: 200px;
background-color: #2e2e2e; 
}

.question{
width: 50%;
height: 50%;
margin: 0 auto;
}


.pg{
color: white;
height: 100%;
width: 80%;
flex-basis: 33%;
text-align: center;
padding: 3%;
display: flex;
align-items: center;
  justify-content: center;
flex-direction: column;
opacity: 0;
opacity: 1 \9; /*just in case ie*/
}

.start{
animation:fadeIn  1, down 1;

animation-fill-mode: forwards;
animation-duration: 1.5s;
}

.pg_1{
animation-delay: 0.6s;
}
.pg_2{
animation-delay: 1.4s;
}
.pg_3{
animation-delay: 2.2s;
}


@keyframes fadeIn {
    from {
      opacity: 0;
    
    }

    to {
      opacity: 1;
     
    }
}

@keyframes down{
    from {
      transform: translateY(35px);
    }

    to {
      transform: translateY(0px);
    }
}


.icon{
margin: 0 auto;
margin-top: 5%; 
width: 100px;
height: 100px;
border-radius: 50%;
background-image: url('icon_1.png');
background-repeat: no-repeat;
background-position: center; 
background-size: contain;
transition: 1s;
}


.icon_2{
background-image: url('icon_2.png');
}

.icon_3{
background-image: url('icon_3.png');
}

.iconup_1{
background-image: url('apple.png');
}

.iconup_2{
background-image: url('money.png');
}

.iconup_3{
background-image: url('people.png');
}

.desc{

text-align: center;
margin: 0 auto;
}

.title{
white-space: nowrap ;
font-size: 35px;
align-items: row;
display: flex;
}

.button, .button:focus{
z-index: 1000;
margin-top: 15%;
width: 130px;
height: 50px;
border-radius: 6px;
border: 1.4px solid #2e2e2e;
text-align: center;
vertical-align: middle;
line-height: 50px;       /* the same as your div height */
transition: 0.5s;
cursor: pointer;
animation: black 1s infinite;
background-color: black;
color: white;

}

.button:hover{
background-color: white;
color: black;
}

.wrapper {
position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
flex-direction: column;
  width: 100%;
  height: 100vh;
  padding: 5vh 5%;
overflow: hidden;
}



.panel {
  position: relative;
align-items: center;
  justify-content: center;
  display: flex;
  width: 100%;
  max-width: 1200px;
  height: 466px;
  user-select: none;
margin-top: 0%;
}

.panel__subtitle{
padding-left: 40px;
letter-spacing: 30px;
text-align: left;
}

.panel__content-col {
  flex-basis: 25%;
}

.panel__content {
  position: absolute;
  top: 26%;
  left: 10%;
  z-index: 2;
  width: 100%;
}



.panel__text {
  display: inline-block;
  text-align: right;
}

.panel__img-col {
  flex-basis: 75%;
box-shadow: 0px 20px 100.28px 8.72px rgba(0, 0, 0, 0.35);
}


.panel__title {
  margin: 0;
text-align: left;
line-height: 110px;
font-size: 96px;
position: relative;
overflow: hidden;
width: 80%;
}

.panel__title::after{
content: '';
position: absolute;
background-color: black;
top: 0;
left: 0;
width: 100%;
height: 100%;
animation:fast 1;
animation-fill-mode: forwards;
animation-duration: 0.8s;
}

@keyframes fast {
0%{
  transform: scaleX(0);
  transform-origin: left center;
  left: 0%;

}
30%{
  transform-origin: left center;
  left: 0%;
}
65%{
  transform: scaleX(1);
  transform-origin: left center;
  left: 0%;
}
100%{
  left: 100%;
}
}

.panel__addr {
text-align: left;
background-color: black;
color: white;
padding: 8px;
  position: relative;
  display: flex;
  margin: 10px 0 0;
  justify-content: flex-end;
}

.panel__line {
  width: 64%;
  height: 3px;
  margin: 24px 0 0 36%;
  background-color: #fff;
}

.panel__img-col {
  width: 100%;
}

.panel__img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>