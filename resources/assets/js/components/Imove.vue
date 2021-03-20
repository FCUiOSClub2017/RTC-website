<template>
	<div>
		<Header></Header>
		<div class="area">
			<b-container>
				<div class="Test mb-5">
					<b-row align-h="center" align-v="center">
						<b-col cols="auto">
							<b-img :src="'/img/logo_b.png'" fluid alt="Fluid image" class="logo">
							</b-img>
						</b-col>
					</b-row>
				</div>
				<div class="main pb-5">
					<b-row align-h="center" align-v="center">
						<b-col cols="6" sm="12" md="3" class="text-center">
							<b-img :src="'/img/im.png'" fluid alt="Fluid image" class="logo"></b-img>
						</b-col>
						<b-col sm="12" md="auto">
							<h1 class="classTitle">iMovie
								<small>影片剪輯操作班</small>
							</h1>
						</b-col>
					</b-row>
				</div>
				
				<b-row cols="1" cols-sm="1" cols-md="2" cols-lg="2">
					<b-col class="mb-5">
						<h2 class="areaTitle mb-4">課程介紹</h2>
						<p>針對完全沒有基礎的人所規劃的，從零開始學習iMovie，一步一步認識影片後製步驟與熟悉iMovie各工具的操作運用。</p>
						<p>拍攝影片並實際操作各種剪輯技巧，像是裁剪、操控時間及節奏，然後搭配加入音訊和標題，適合所有技巧程度的參加者。</p>
						<div class="pt-5 images">
							<b-img :src="'/img/m004.png'" fluid alt="Fluid image"></b-img>
						</div>
					</b-col>
					<b-col class="info">
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">上課教室</span></b-col>
							<b-col>
								<div class="aaa">
									逢甲大學RTC教室
								</div>
							</b-col>
						</b-row>
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">上課期間</span></b-col>
							<b-col>
								<div class="aaa">
									5/24、5/26、5/31、6/2
								</div>
							</b-col>
						</b-row>
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">上課時段</span></b-col>
							<b-col>
								<div class="aaa">
									每週一、每周三 19:00 ~ 22:00
								</div>
							</b-col>
						</b-row>
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">總時數</span></b-col>
							<b-col>
								<div class="aaa">
									12小時
								</div>
							</b-col>
						</b-row>
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">課程費用</span></b-col>
							<b-col>
								<div class="aaa price">
									$6500
								</div>
							</b-col>
						</b-row>
						<b-button variant="primary" block size="lg" target="_black" href="https://reurl.cc/bzEKAr" >立即報名</b-button>
					</b-col>
				</b-row>
			</b-container>
		</div>
		<div class="area teacher">
			<b-container>
				<h2 class="areaTitle mb-4">授課教師</h2>
				<b-row align-v="center">
					<b-col sm="12" md="3" class="text-center">
						<b-img :src="'/img/teacher_3.png'" fluid alt="Fluid image" class="logo"></b-img>
					</b-col>
					<b-col md="9">
						
						<h4 class="mb-4">Handy <small>老師</small></h4>
						天下雜誌中部約聘攝影師、遠見雜誌中部約聘攝影師、太格建材約聘攝影、晨禎建設約聘攝影師<br>
						Handy Photography 林煒庭 攝影工作室 攝影師<br>
						台中林酒店、中僑飯店 婚禮體驗日合作攝影師<br>
						2019年新加坡國慶 燈光廠商產品預演現場拍攝
					</b-col>
				</b-row>
				<hr>
				<b-row cols="1" cols-sm="1" cols-md="2" cols-lg="2">
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/kMRLblDvPIw"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">黛瑪集團_時尚走秀 動態紀錄</h6>
					</b-col>
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/lOCLmvhKGGY"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">婚紗愛情故事(振＆蕙)HD版</h6>
					</b-col>
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/18MGMDPuD0o"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">紀錄的不只是台灣的宗教，而更是一份屬於台灣文化的力量。</h6>
					</b-col>
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/TZ05jPNXypk"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">鐵匠職人 鄒線良師傅</h6>
					</b-col>
				</b-row>
			</b-container>
		</div>
		<div class="area">
			<b-container>
				<h2 class="areaTitle mb-4">課程大綱</h2>
				<b-table responsive striped hover bordered :items="items_515" :fields="fields" class="course">
					<template #cell(Description)="data">
						<span v-html="data.value"></span>
					</template>
				</b-table>
			</b-container>
		</div>
		<div class="area footer">
			<Footer />
		</div>
	</div>
</template>
<script>
	import Header from './Header.vue';
	import Footer from './Footer.vue';
	export default {
		components: {
            Header,
			Footer
        },
		data() {
			return {
				fields: [
					{
						key: 'EchelonTwo',
						label: '日期',
						tdClass: "echelon"
					},
					{
						key: 'week',
						label: '星期',
						tdClass: "week"
					},
					{
						key: 'timePeriod',
						label: '時數',
						tdClass: "hours"
					},
					{
						key: 'Description',
						label: '上課單元'
					}
				],
				items_515: [{
						EchelonOne:"3/15",
						EchelonTwo:"5/10",
						week:"一",
						timePeriod: "3",
						Description: '<strong>掌握簡單原則，拍出好畫面：</strong><ol><li>構圖、運鏡基本技巧</li><li>分鏡表、文字腳本製作方法</li><li>影片、圖片、音樂素材庫使用介紹</li></ol>'
					},
					{
						EchelonOne:"3/17",
						EchelonTwo:"5/12",
						week:"三",
						timePeriod: "3",
						Description: '<strong>基礎功能操作，聲音資訊處理：</strong><ol start="4"><li>基礎功能操作 / Library、Event、 Project、解析度、FPS / 變形工具 / 速度調整工具 / 影片後期穩定器</li><li>新增字幕 / 字體樣式設定 / 建立常用字幕預設集</li><li>音效使用 / 配樂銜接 / 配樂基本技巧</li></ol>'
					},
					{
						EchelonOne:"3/22",
						EchelonTwo:"5/17",
						week:"一",
						timePeriod: "3",
						Description: '<strong>調色 / 轉場 / 特效</strong><ol start="7"><li>基礎調色操作 / 建立常用色調預設集 / LUT使用</li><li>基礎應用 / 長度調整 / 新增外掛方法 / 好用推薦</li><li>基礎應用 / 複製貼上屬性 / 新增外掛方法 / 好用推薦 建立代理文件 / Rendering Files設定 / 外接硬碟 / 剪輯設備 編碼形式 / 封裝格式</li></ol>'
					},
					{
						EchelonOne:"3/24",
						EchelonTwo:"5/19",
						week:"三",
						timePeriod: "3",
						Description: '<ol start="10"><li>實戰操作</li></ol>'
					}
				],
			}
		},
	}
</script>