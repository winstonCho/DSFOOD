<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/ds.css" type="text/css">
    <link href="img/pabicon.png" type="image/icon" rel="shortcut icon">
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/ds.js"></script>
    

</head>
<body>
    <div class="warp">

        <? include "header.html"; ?>
        <section class="visual">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide s1">
                        <a href="#"><img src="img/v1.png" alt="kanu"></a>
                    </div>
                    <div class="swiper-slide s2">
                        <a href="#"><img src="img/v2-2.png" alt="봄카누"></a>
                    </div>
                    <div class="swiper-slide s3">
                        <a href="#"><img src="img/v2.png" alt="top10주년"></a>
                    </div>
                    <div class="swiper-slide s4">
                        <a href="#"><img src="img/v4.png" alt="oreo"></a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </section>
        <section class="tab">
            <div class="tab_container">
                <div class="tab_in">
                    <div class="tab_btn">
                        <ul>
                            <li><a href="#" ><span>MAXIM</span><p class="active">맥심</p></a></li>
                            <li><a href="#" ><span>KANU</span><p>카누</p></a></li>
                            <li><a href="#" ><span>RITZ</span><p>리츠</p></a></li>
                            <li><a href="#" ><span>OREO</span><p>오레오</p></a></li>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <div class="tab_list">
                            <div class="tab_img">
                                <iframe width="1040" height="585" src="https://www.youtube.com/embed/U-Rlaqvdb7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <a href="#"><img src="img/p-1.png" alt="맥심"></a>
                                <p>맥심 모카골드 마일드는 고급 마일드<br>
                               커피원두를 마일드 로스팅 공법으로<br>
                               볶아 순하고 감미로운 맛과 향을<br> 
                               느낄 수 있는 제품으로 아침에 <br>
                               잠자리에서 일어나 부담없이 마실 수<br>
                               있는 부드러운 커피의 대명사입니다.<br> 
                               진정한 부드러움을 느껴보세요.</p>
                            </div>
                        </div>
                        <div class="tab_list">
                            <div class="tab_img">
                                <iframe width="1040" height="585" src="https://www.youtube.com/embed/RLOix7KwBe8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <a href="#"><img src="img/p-2.png" alt="카누"></a>
                                    <p>맥심카누 마일드로스트 아메리카노는<br>
                                        '미디엄로스팅'으로 볶은 콜롬비아,<br>
                                        과테말라, 코스타리카 원두를 <br>
                                       블렌딩하여, 미디엄 로스팅으로 <br>
                                       발현되는 산뜻한 과일향과 달콤한 <br>
                                       와인향미를 느낄 수 있습니다.</p>
                            </div>
                        </div>
                  
                        <div class="tab_list">
                            <div class="tab_img">
                            <iframe width="1040" height="585" src="https://www.youtube.com/embed/DpoVTCqZgH0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <a href="#"><img src="img/p-3.png" alt="리츠"></a>
                                    <p>전세계가 사랑하는 오리지날 크래커<br>
                                        Since 1935, 담백하고 바삭한
                                        크래커</p>
                            </div>
                        </div>
                   
                        <div class="tab_list">
                            <div class="tab_img">
                                 <iframe width="1040" height="585" src="https://www.youtube.com/embed/8hAVAmOJTr8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <a href="#"><img src="img/p-4.png" alt="오레오"></a>
                                    <p>오레오는 100여년간 전 세계인들
                                        에게 <br>가장 사랑 받는 쿠키 브랜드
                                        입니다. <br>쿠키를 비틀어 크림을 맛 
                                        보고 우유에 <br>퐁당 담가먹는 재미가
                                         있습니다.</p>
                            </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="collection">
            <h1>DS PRODUCTS</h1>
            <div class="tab_slide">
                    <div class="tab_title">
                        <a href="#" class="coffee active">coffee</a>
                         <a href="#" class="dessert">dessert</a>
                    </div>
                    <div class="tab_slide_con">
                        <div class="tab_slide_list t1">
                            <div class="swiper coffeeSwiper">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide c1">
                                    <div class="slide_img">
                                        <img src="img/c1.png" />
                                    </div>
                                    <div class="slide_txt">
                                        <h1>카누<br>트리플샷 라떼</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>에스프레소 추출 방식의 카누 아메리카노 함량을 높여<br> 더욱 진하고 풍부해진 맥심 카누 트리플 샷 라떼를 즐겨 보세요</p>
                                    </div>
                                  </div>
                                  <div class="swiper-slide c2">
                                    <div class="slide_img">
                                        <img src="img/c2.png" />
                                    </div>
                                    <div class="slide_txt">
                                        <h1>카누<br>너티 카라멜 라떼</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>에스프레소 방식으로 추출한 에티오피아산 100% <br>카누 커피와 마카다미아향, 천연 아몬드향,카라멜,라떼 <br>크리머의 조화가 만들어내는 고소한 달콤함</p>
                                    </div>
                                  </div>
                                  <div class="swiper-slide c3">
                                    <div class="slide_img">
                                        <img src="img/c3.png" />
                                    </div>
                                    <div class="slide_txt">
                                        <h1>카누<br>라이트로스트 아메리카노</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>맥심 카누 라이트 로스트 아메리카노는 고품질의 <br>에티오피아, 콜롬비아, 코스타리카 원두를 블렌딩하고<br> 라이트 로스팅으로 화사한 꽃향과 상큼한 과일향을 <br>발현했습니다. 더욱 깔끔하고 부드러운 <br>카누 라이트 로스트를 즐겨보세요</p>
                                    </div>
                                  </div>
                                  <div class="swiper-slide c4">
                                    <div class="slide_img">
                                        <img src="img/c4.png" />
                                    </div>
                                    
                                    <div class="slide_txt">
                                        <h1>T.O.P<br>스위트 아메리카노</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>티오피 스위트 아메리카노는 달콤함과 커피 본연의<br> 맛과 향을 즐길 수 있는 프리미엄 커피음료입니다. <br>아라비카 원두만을 선별하여, 에스프레소 추출  방식으로 뽑은 맥심 에스프레소커피 추출액을 담았습니다.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-button-next myNext1"></div>
                                <div class="swiper-button-prev myPrev1"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="tab_slide_list t2">
                            <div class="swiper dessertSwiper">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide d1">
                                    <div class="slide_img">
                                        <img src="img/d1.png" />
                                    </div>
                                    <div class="slide_txt">
                                        <h1>POST<br>콘푸러스트 바</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>가볍지만 든든한 아침을 위한 포스트 시리얼바를 만나보세요~! <br> -우유와 시리얼 본연의 맛과 함께 9가지 <br>비타민에 3가지 미네랄이 들어있어 언제 어디서나 든든한 <br>한끼를 채울 수 있는 포스트 콘푸라이트바!</p>
                                    </div>
                                  </div>
                                  <div class="swiper-slide d2">
                                    <div class="slide_img">
                                        <img src="img/d2.png" />
                                    </div>
                                    <div class="slide_txt">
                                        <h1>리츠<br>샌드위치 치즈 크래커</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>전세계가 사랑하는 오리지날 크래커 Since 1935, <br>풍부한 치즈향의 샌드위치 크래커 치즈</p>
                                    </div>
                                  </div>
                                  <div class="swiper-slide d3">
                                    <div class="slide_img">
                                        <img src="img/d3.png" />
                                    </div>
                                    <div class="slide_txt">
                                        <h1>POST<br>오곡코코볼바</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>가볍지만 든든한 아침을 위한 포스트 시리얼바를 만나보세요~! <br>- 귀리, 보리 등 몸에 좋은 다섯가지 곡물로 만들어진 <br>오곡 코코볼에 밀크 코팅이 더해져 영양은 든든히 <br>입안은 가볍게 챙기는 포스트 오곡코코볼바!</p>
                                    </div>
                                  </div>
                                  <div class="swiper-slide d4">
                                    <div class="slide_img">
                                        <img src="img/d4.png" />
                                    </div>
                                    <div class="slide_txt">
                                        <h1>OREO<br>초콜릿 샌드위치 쿠키</h1>
                                        <a href="#"><span></span><i>VIEW MORE</i></a>
                                        <p>오레오는 100여년간 전 세계에서 가장 사랑받는쿠키 <br>브랜드입니다. 쿠키를 비틀어 크림을 맛 보고 우유에 <br>퐁당 담가먹는 재미가 있습니다.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-button-next myNext2"></div>
                                <div class="swiper-button-prev myPrev2"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="racipe">
            <h1>DS RACIPE</h1>
            <div class="racipe_box">
                <div class="racipe_right">
                    <h1>동서식품제품들의 맛있는<br> 레시피를 알려드립니다!!!</h1>
                </div>
                <div class="racipe_img">
                    <ul>
                        <li>
                            <a href="#"><img src="img/racipe1.png" alt="레시피1"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/racipe2.png" alt="레시피2"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/racipe3.png" alt="레시피3"></a>
                        </li>
                    </ul>
                </div>
                <div class="racipe_left">
                    <ul>
                        <li>
                            <a href="#" class="active">
                                <h2>Racipe...01</h2>
                                <span>리츠하트</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h2>Racipe...02</h2>
                                <span>오레오아이스박스</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h2>Racipe...03</h2>
                                <span>오트밀오리지널</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>   
        <section class="sns">
            <div class="sns_header">
                <h1>DS SNS</h1>
            </div>
            <div class="sns_img">
                <div class="sns_img_up">
                    <ul>
                        <li>
                            <a href="#"><img src="img/ns-1.png" alt="sns1"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/ns-2.png" alt="sns2"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/ns-3.png" alt="sns3"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/ns-4.png" alt="sns4"></a>
                        </li>
                    </ul>
                </div>
                <div class="sns_img_down">
                    <ul>
                        <li>
                            <a href="#"><img src="img/ns-5.png" alt="sns5"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/ns-6.png" alt="sns6"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/ns-7.png" alt="sns7"></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/ns-8.png" alt="sns8"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sns_icon">
                <ul>
                    <li>
                        <a href="#"><img src="img/icon1.png" alt="인스타"></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icon2.png" alt="페이스북"></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icon3.png" alt="블로그"></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icon4.png" alt="유트브"></a>
                    </li>
                </ul>
            </div>
        </section>    
        <section class="h2mak">
        <h1>HOW TO MAKE OUR COFFEE</h1>
            <div class="h2mak_img">
                <a href="#">
                    <img src="img/how2make.png" alt="how2make">
                </a>
             </div>
        </section> 
        <section class="icon_btn">
            <div class="icon_btn_box">
                <ul>
                    <li>
                        <a href="#">
                            <img src="img/p-1.png" alt="">
                            <h1>ABOUT MAXIM</h1>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/p-2.png" alt="">
                            <h1>ABOUT KANU</h1>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/p-3.png" alt="">
                            <h1>ABOUT RITZ</h1>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/p-4.png" alt="">
                            <h1>ABOUT OREO</h1>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/p-5.png" alt="">
                            <h1>Q & A</h1>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </section>
        <section class="call">
            <div class="call_box">
                <div class="call_box_right">
                    <div class="call_box_right_1">
                        <ul>
                            <li>
                                <a href="#">
                                    <h2>고객센터</h2>
                                    <h1>1588-2233</h1>
                                    <p>(09:30~18:30, 토요일&공휴일 휴무)</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="call_box_right_2">
                        <ul>
                            <li>
                                <a href="#">
                                    <h2>고객상담실</h2>
                                    <h1>080-023-9114</h1>
                                    <p>(09:30~18:30, 토요일&공휴일 휴무)</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="call_box_left">
                    <div class="swiper callSwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <a href="#">
                                  <img src="img/call-1.png" alt="c1">
                              </a>
                          </div>
                          <div class="swiper-slide">
                            <a href="#">
                                <img src="img/call-2.png" alt="c2">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="img/call-3.png" alt="c3">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="img/call-4.png" alt="c4">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <img src="img/call-5.png" alt="c5">
                            </a>
                        </div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
            </div>
        </section>
        <? include "footer.html"; ?>
        <div class="top_btn">
            
        </div>
        <? include "site.html"; ?>
    </div>
</body>
</html>