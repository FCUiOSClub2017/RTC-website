<template>
	<div>
		<Header></Header>
		<div class="area black">
			<b-container>
				<div class="Test mb-5">
					<b-row align-h="center" align-v="center">
						<b-col cols="auto">
							<b-img :src="'/img/logo_w.png'" fluid alt="Fluid image" class="logo"></b-img>
						</b-col>
					</b-row>
				</div>
				<div class="main pb-5">
					<b-row align-h="center" align-v="center">
						<b-col cols="6" sm="12" md="3" class="text-center">
							<b-img :src="'/img/lp.png'" fluid alt="Fluid image" class="logo"></b-img>
						</b-col>
						<b-col sm="12" md="auto">
							<h1 class="classTitle">Logic Pro
								<small>音樂創作班</small>
							</h1>
						</b-col>
					</b-row>
				</div>
				
				<b-row cols="1" cols-sm="1" cols-md="2" cols-lg="2">
					<b-col class="mb-5">
						<h2 class="areaTitle mb-4">課程介紹</h2>
						<p>學習MacOS進階音樂製作軟體-Logic Pro X重點操作功能，課堂上將實際演示歌曲從創作想法延伸為完整作品的過程。課程內容包含基礎樂理與創作，學員亦能藉著實戰過程完成屬於自己的作品。</p>
						<div class="pt-5 images">
							<b-img :src="'/img/l001.png'" fluid alt="Fluid image"></b-img>
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
									4/17、4/18、4/24、4/25
								</div>
							</b-col>
						</b-row>
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">上課時段</span></b-col>
							<b-col>
								<div class="aaa">
									09:30-12:30，14:00-17:00
								</div>
							</b-col>
						</b-row>
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">總時數</span></b-col>
							<b-col>
								<div class="aaa">
									24小時
								</div>
							</b-col>
						</b-row>
						<b-row class="item" align-v="center">
							<b-col cols="auto"><span class="title">課程費用</span></b-col>
							<b-col>
								<div class="aaa price">
									$10000
								</div>
							</b-col>
						</b-row>
						<b-button variant="primary" block size="lg" target="_black" href="https://reurl.cc/bzEKAr" >立即報名</b-button>
					</b-col>
				</b-row>
			</b-container>
		</div>
		<div class="area black teacher">
			<b-container>

	<h2 class="areaTitle mb-4">授課教師</h2>
				<b-row align-v="center" class="mb-5">
					<b-col sm="12" md="3" class="text-center">
						<b-img :src="'/img/teacher_2.png'" fluid alt="Fluid image" class="logo"></b-img>
					</b-col>
					<b-col md="9">
						
						<h4 class="mb-4">王彙筑 <small>老師</small></h4>
						<ul>
							<li>新銳唱作人、作詞人、作曲人</li>
							<li>第 26 屆金曲奬《最佳新人獎》 入圍（《少女維拉》個人創作專輯 ）</li>
							<li>入選《中國好歌曲》羽泉戰隊前三強</li>
							<li>參與電影《女朋友。男朋友》原聲帶演唱</li>
							<li>擁有豐富詞曲創作及現場表演經驗，曾為多位藝人量身訂做歌曲，並於全台巡演</li>
							<li>教學經驗豐富，曾於台北市音樂創作職業工會舉辦之「詞曲創作實戰班」擔任創作導師，亦常受邀至各大專院校舉辦音樂講座。</li>
						</ul>
					</b-col>
				</b-row>
				<hr>
				<b-row cols="1" cols-sm="1" cols-md="2" cols-lg="2">
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/yDwghJaHt98"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">王彙筑 Hui Chu Wang - It's All Imagination (Lyric Video)</h6>
					</b-col>
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/F_j-XrWR414"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">王彙筑 Hui Chu Wang - 幽默以對 Humor Has It (Official Audio)</h6>
					</b-col>
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/u3OT2pSeB7E"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">王彙筑 Hui Chu Wang - Dear Sappy 親愛的傻皮 (Lyric Video)</h6>
					</b-col>
					<b-col class="mb-5">
						<b-embed type="iframe" aspect="16by9" src="https://www.youtube.com/embed/rq88ToaUebw"
							allowfullscreen></b-embed>
						<h6 class="text-center pt-2">瘋女人首支單曲《Laugh Louder Live High》ft.王彙筑</h6>
					</b-col>
				</b-row>
			</b-container>
		</div>
		<div class="area black">
			<b-container>
				<h2 class="areaTitle mb-4">課程大綱</h2>
				<b-table responsive table-variant="dark" head-variant="dark"  bordered :items="items_515" :fields="fields" class="course">
					<template #cell(theme)="data" >
								<div class='text-center'>
								{{data.value}}
								</div>
							</template>
					<template #cell(Description)="data">
						<span v-html="data.value"></span>
					</template>
				</b-table>
			</b-container>
		</div>
		<div class="area black footer">
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
						key: 'theme',
						label: '課程主題',
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
						tdClass: "hours lg"
					},
					{
						key: 'Description',
						label: '課程說明'
					}
				],
				items_515: [{
						theme: '4／17 ',
						week:"星期六",
						timePeriod: "09:30-12:30",
						Description: '1.認識你的音樂製作軟體 Logic Pro：<ul class="mb-0"><li>認識數位音樂及其製作環境</li><li>Logic Pro 基本操作介面：偏好設定及工作區域認識</li><li>音軌概念與認識</li><li>Apple Loops 使用與編輯方法</li><li>Drummer 認識與應用</li></ul>'
					},
					{
						theme: '4／17',
						week:"星期六",
						timePeriod: "14:00-17:00",
						Description: '2.透過 Logic Pro 建置歌曲基本架構：<ul><li>認識內建音色及其角色</li><li>Midi 音軌錄製與編輯</li><li>編曲創作的基本元素:基礎樂理與創作概述</li><li>常見旋律型、節奏組樂器的編排方法</li><li>氛圍型音色選用及疊用的方法</li></ul>'
					},
					{
						theme: '4／18',
						week:"星期日",
						timePeriod: "09:30-12:30",
						Description: '3.透過 Logic Pro 錄製與剪輯原聲素材：錄音環境建置<ul><li>Audio 錄製設定</li><li>udio 音軌編輯方法</li><li>Auto Punch、Flex Time、Flex Pitch</li><li>不同的錄音模式</li><li>其他常見錄製與編輯技巧</li></ul>'
					},
					{
						theme: '4／18',
						week:"星期日",
						timePeriod: "14:00-17:00",
						Description: '4.編曲與 Logic Pro 進階工具認識：<ul><li>重點內建 Midi Plug-in 的認識 (Ex.Appregiator) </li><li>重點內建音源插件操作 (Ex.Retro Synth)</li><li>外部插件使用</li></ul>'
					},
					{
						theme: '4／24 ',
						week:"星期六",
						timePeriod: "09:30-12:30",
						Description:"5.基本混音 Rough Mix 讓歌曲聽起來更完整：<ol><li>「混音」基本概念</li><li>音量平衡與相位配置</li><li>內建效果器基本操作</li><li>Automation</li><li>存檔與輸出</li></ol>"
					},
					{
						theme: '4／24',
						week:"星期六",
						timePeriod: "14:00-17:00",
						Description:"6.Logic Pro 10.5 Live Loops 功能認識與現場演出：<ol><li>Live Loops 認識</li><li>素材建立</li><li>外部器材連結操作</li></ol>"
					},
					{
						theme: '4／25',
						week:"星期日",
						timePeriod: "09:30-12:30",
						Description:"7.從無到有-創作與編曲實際演練示範：<ul><li>創作基本概論與方法:旋律、歌詞創作工具</li><li>編曲與宅錄實際進行</li></ul>"
					},
					{
						theme: '4／25',
						week:"星期日",
						timePeriod: "14:00-17:00",
						Description:"8.實戰導引與交流：<ul><li>學員作品創作與編寫</li><li>提問與交流</li></ul>"
					}
				]
			}
		},
	}
</script>