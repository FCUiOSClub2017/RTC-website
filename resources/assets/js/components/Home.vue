<template>
  <div>
    <div class="area">
      <b-container>
        <div class="Test mb-5">
          <b-row align-h="center" align-v="center">
            <b-col cols="auto">
              <b-img src="/img/Straight.png" fluid alt="Fluid image" class="logo"></b-img>
            </b-col>
          </b-row>
        </div>
        <h2 class="text-center areaTitlec mb-4">專業課程</h2>

        <b-row align-h="center" class="mb-5">
          <b-col cols="8" class="text-center">
            影音剪輯在生活中無所不在，從我們每天在社群軟體上看到的幾秒鐘的短片到電影戲院中觀看的電影，影片及音效剪輯都扮演著重要的角色，良好的影片剪輯與音效配樂，可以使得影片內容變得更加豐富、更吸引觀眾的目光，也更清楚地傳遞影片想表達的故事內容。
          </b-col>
        </b-row>
        <b-row class="text-center" cols="1" cols-sm="2" cols-md="2" cols-lg="4">
          <b-col class="mb-5">
            <b-link to="/lesson/finalcutpro">
              <img alt="Vue logo" src="/img/final.png" style="width:150px">
            </b-link>
            <h4 class="my-3">Final Cut Pro <br /><small>影片剪輯操作班</small> </h4>
            <b-button variant="primary" target="_black" href="https://reurl.cc/bzEKAr" class="mr-2">立即報名</b-button>
            <b-button to="/lesson/finalcutpro">更多介紹</b-button>
          </b-col>
          <b-col class="mb-5">
            <b-link to="/lesson/imove">
              <img alt="Vue logo" src="/img/im.png" style="width:150px">
            </b-link>
            <h4 class="my-3">iMovie <br /><small>影片剪輯操作班</small> </h4>
            <b-button variant="primary" target="_black" href="https://reurl.cc/bzEKAr" class="mr-2">立即報名</b-button>
            <b-button to="/lesson/imove">更多介紹</b-button>
          </b-col>
         <b-col class="mb-5">
            <b-link to="/lesson/logicpro">
              <img alt="Vue logo" src="/img/lp.png" style="width:150px">
            </b-link>
            <h4 class="my-3">Logic Pro <br /><small>音樂創作班</small> </h4>
            <b-button variant="primary" target="_black" href="https://reurl.cc/bzEKAr" class="mr-2">立即報名</b-button>
            <b-button to="/lesson/logicpro">更多介紹</b-button>
          </b-col>
          <b-col class="mb-5">
            <b-link to="/lesson/garageband">
              <img alt="Vue logo" src="/img/gb.png" style="width:150px">
            </b-link>
            <h4 class="my-3">Garageband <br /><small>音樂創作班</small> </h4>
            <b-button variant="primary" target="_black" href="https://reurl.cc/bzEKAr" class="mr-2">立即報名</b-button>
            <b-button to="/lesson/garageband">更多介紹</b-button>
          </b-col>
        </b-row>
      </b-container>
    </div>

    <div class="area teacher">
      <b-container>
        <h2 class="text-center areaTitlec mb-4">專業師資陣容</h2>
        <b-row align-h="center" class="mb-5">
          <b-col cols="8" class="text-center">
            專業師資手把手教學，帶您邁向職人之路。
          </b-col>
        </b-row>
        <b-row cols="1" cols-sm="2" cols-md="2" cols-lg="4" class="text-center" align-h="center">
          <b-col>
            <b-img src="/img/teacher_1.png" fluid alt="Fluid image" class="mb-2"></b-img>
            <h5>
              蘇兆民 老師
            </h5>
          </b-col>
          <b-col>
            <b-img src="/img/teacher_3.png" fluid alt="Fluid image" class="mb-2"></b-img>
            <h5>
              Handy 老師
            </h5>
          </b-col>
          <b-col>
            <b-img src="/img/teacher_2.png" fluid alt="Fluid image" class="mb-2"></b-img>
            <h5>
              王彙筑 老師
            </h5>
          </b-col>
        </b-row>
      </b-container>
    </div>
    <div class="area">
      <b-container>
        <h2 class="text-center areaTitlec mb-4">逢甲大學 RTC 教室</h2>
        <b-row align-h="center" class="mb-5">
          <b-col cols="8" class="text-center">
            逢甲大學為全臺首間獲得Apple認證的 RTC 區域教育培訓中心 (RTC Regional Training Center)，也是全臺唯一獲得授權辦理「App移動應用創新賽」的大學。
          </b-col>
        </b-row>
        <div class="pt-5 img">
          <b-img src="/img/rtc_01.jpg" fluid alt="Fluid image"></b-img>
        </div>

      </b-container>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Home'
  }
</script>
