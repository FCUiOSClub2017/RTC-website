@section('content') @parent
<!-- Portfolio Grid Section -->
<section class="portfolio" id="teacher">
    <div class="container">
        <h2 class="text-center">教學團隊</h2>
        <hr class="star-primary">
        <div class="row justify-content-around">
            <div class="col-md-6 col-xl-4 portfolio-item">
                <a class="portfolio-link" href="#xfr" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid user" src="img/a.png" alt="">
                    <p class="user-name">許芳榮 主任</p>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 portfolio-item">
                <a class="portfolio-link" href="#yjq" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid user" src="img/b.png" alt="">
                    <p class="user-name">英家慶 助理教授</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection @section('hidden-content') @parent
<div class="portfolio-modal modal fade" id="xfr" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2>許芳榮 主任</h2>
                            <hr class="star-primary">
                            <img class="img-fluid user" src="img/a.png" alt="" width="80%" style="margin:0 10%;">
                            <ul class="list-inline item-details">
                                <li><h3><strong>專長</strong></h3></li>
                                <li><a>演算法 Algorithms</a></li>
                                <li><a>資料探勘 Data Mining</a></li>
                                <li><a>生物資訊 Bioinformatics</a></li>
                                <li><a>平行處理 Parallel Processing</a></li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li><h3><strong>聯絡</strong></h3></li>
                                <li><i class="fa fa-fw fa-envelope-o text-primary"></i> frhsu@fcu.edu.tw</li>
                                <li><i class="fa fa-fw fa-flask text-primary"></i> 生物資訊實驗室(資電244) </li>
                                <li><i class="fa fa-fw fa-mobile text-primary"></i> 04-24517250 轉 3700 / 04-24517250 轉 3755 </li>
                                <li><i class="fa fa-fw fa-map-marker text-primary"></i> 台中市西屯區文華路100號 逢甲大學 資電201 / 資電308-5</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li><h3><strong>學歷</strong></h3></li>
                                <li><a>國立交通大學 資訊工程研究所  博士學位</a></li>
                                <li><a>國立交通大學 計算機工程系 學士學位</a></li>
                            </ul>
                            <button class="btn btn-success" type="button" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="portfolio-modal modal fade" id="yjq" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2>英家慶 助理教授</h2>
                            <hr class="star-primary">
                            <img class="img-fluid user" src="img/b.png" alt="" width="80%" style="margin:0 10%;">
                            <ul class="list-inline item-details">
                                <li><h3><strong>專長</strong></h3></li>
                                <li><a>資料探勘 Data Mining</a></li>
                                <li><a>深度學習 Deep Learning</a></li>
                                <li><a>雲端運算 Cloud Computing</a></li>
                                <li><a>機器學習 Machine Learning</a></li>
                                <li><a>巨量資料分析 Big Data Analytics</a></li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li><h3><strong>聯絡</strong></h3></li>
                                <li><i class="fa fa-fw fa-envelope-o text-primary"></i> jcying@fcu.edu.tw</li>
                                <li><i class="fa fa-fw fa-mobile text-primary"></i> 04-24517250 轉 3756</li>
                                <li><i class="fa fa-fw fa-map-marker text-primary"></i> 台中市西屯區文華路100號 逢甲大學 資電241</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li><h3><strong>學歷</strong></h3></li>
                                <li><a>成功大學 資訊工程所 博士學位</a></li>
                                <li><a>銘傳大學 資訊傳播工程學系 碩士學位</a></li>
                                <li><a>中原大學 數學系 學士學位</a></li>
                            </ul>
                            <button class="btn btn-success" type="button" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection