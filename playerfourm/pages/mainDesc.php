<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mixed content 문제 해결(https 사이트에서 http 사이트 요청 시 발생하는 보안 문제) -->
    <title>메인페이지</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style2.css">

    <style>
        
    </style>
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header"> 
        <?php
            include "../include/header.php";
        ?>
    </header>
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <div class="main-banner-img">
                <img class="img img1" src="../assets/img/main-banner3.jpg" alt="이미지1">
                <img class="img img2" src="../assets/img/main-banner2.jpg" alt="이미지1">
                <img class="img img3" src="../assets/img/main-banner1.jpg" alt="이미지1">
                <div class="main-banner-desc">
                    <span>THE<br>ARSENAL<br>PLAYERS’<br>ASSOCIATION</span>
                </div>
            </div>
            <article class="content-article">
                <div class="overview">
                    <div class="overview-wrap">
                        <div class="overviwe-title">PLAYER<br>FOURUM</div>
                        <div class="overviwe-img">
                            <img src="../assets/img/overviewImg.png" alt="오버뷰">
                        </div>
                    </div>
                    <div class="overviwe2">
                        <div class="overviwe-title">OVERVIEW</div>
                        <div class="overviwe-desc">플레이어 포럼은 아스널FC의 소속된 선수, 팀과 , 랭킹을 알 수 있는<br>축구 데이터 전달이 주 목적인 웹사이트 입니다.  선수들의 정보를 수치화하여<br>선수들과 서로 비교할 수 있도록 구현하였습니다.</div>
                    </div>
                    <div class="background">
                        <div class="overviwe-title">BACKGROUND</div>
                        <div class="overviwe-desc">어제 축구 보셨나요?<br>축구 데이터를 그래프 및 시각화하여 가독성을 높인 차별화된 데이터 사이트인<br>플레이어 포럼을 통해 경기결과 및 선수 정보를 쉽게 확인할 수 있습니다.</div>
                    </div>
                </div>
                <div class="persona">
                    <div class="persona-wrap">
                        <div class="persona-title">PERSONA</div>
                        <div class="persona-cont">
                            <div class="persona-p">
                                <img src="../assets/img/persona1.png" alt="페르소나">
                                <div class="persona-p-text-wrap">
                                    <div class="persona-p-text">이번 주말에 축구 경기가 4경기가<br>준비되어있는데 뭘 봐야하지? </div>
                                </div>
                            </div>
                            <div class="persona-p">
                                <img src="../assets/img/persona2.png" alt="페르소나">
                                <div class="persona-p-text-wrap">
                                    <div class="persona-p-text">이번 시즌 어떤 선수가 경기력이 좋았지?</div>
                                </div>
                            </div>
                            <div class="persona-p">
                                <img src="../assets/img/persona3.png" alt="페르소나">
                                <div class="persona-p-text-wrap">
                                    <div class="persona-p-text">사카의 이번시즌 골 현황이 어떻게 되지?</div>
                                </div>
                            </div>
                            <div class="persona-p">
                                <img src="../assets/img/persona4.png" alt="페르소나">
                                <div class="persona-p-text-wrap">
                                    <div class="persona-p-text">요즘 축구 분석 사이트들은 직관적이지<br>않아 보기 불편해요</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="solution">
                    <div class="solution-wrap">
                        <div class="solution-title">SOLUTION</div>
                        <div class="solution-text-wrap">
                            <div class="top">
                                <div class="solution-qus">
                                    <div>1. 차별화</div>
                                </div>
                                <div class="solution-qus">
                                    <div>2. 누구나</div>
                                </div>
                                <div class="solution-qus">
                                    <div>3. 실시간</div>
                                </div>
                            </div>
                            <div class="buttom">
                                <div class="solution-qus">
                                    <div>다양한 카테고리별로 개개인의<br>선수능력치를 보기 쉽게 </div>
                                </div>
                                <div class="solution-qus">
                                    <div>시간이 없는 사람, 연령대에<br>상관 없이, 편리하게</div>
                                </div>
                                <div class="solution-qus">
                                    <div>시간대에 구애받지 않고<br>최신 정보를 받아볼 수 있는</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="diagram-wrap">
                        <div class="diagram-title">AFFINITY<br>DIAGRAM</div>
                        <div class="diagram-cont-wrap">
                            <div class="diagram-img-wrap">
                                <div class="line line1">
                                    <img src="../assets/img/diagramImg1.jpg" alt="다이어그램">
                                    <img src="../assets/img/diagramImg2.jpg" alt="다이어그램">
                                    <img src="../assets/img/diagramImg3.jpg" alt="다이어그램">
                                </div>
                                <div class="line line2">
                                    <img src="../assets/img/diagramImg4.jpg" alt="다이어그램">
                                    <img src="../assets/img/diagramImg5.jpg" alt="다이어그램">
                                    <img src="../assets/img/diagramImg6.jpg" alt="다이어그램">
                                    <img src="../assets/img/diagramImg7.jpg" alt="다이어그램">
                                </div>
                                <div class="line line3">
                                    <img src="../assets/img/diagramImg8.jpg" alt="다이어그램">
                                    <img src="../assets/img/diagramImg9.jpg" alt="다이어그램">
                                    <img src="../assets/img/diagramImg10.jpg" alt="다이어그램">
                                </div>
                            </div>
                            <div class="diagram-about">
                                <div class="diagram-about-wrap">
                                    <div class="diagram-sub-title">About<br><span>Function</span></div>
                                    <div class="diagram-sub-text">저희 웹 사이트에서 구현 할 웹기능<br>데이터들을 분류하였습니다.</div>
                                    <div class="diagram-sub-eng">This is a picture of classifying web functions to be<br>implemented on our website by category.</div>
                                </div>
                                <div class="diagram-about-wrap">
                                    <div class="diagram-sub-title">About<br><span>Data Analysis</span></div>
                                    <div class="diagram-sub-text">저희 웹 사이트에서 사용할 수 있는 <br>카테고리 별로 분류한 사진 입니다.</div>
                                    <div class="diagram-sub-eng">We classified the data available on our website.</div>
                                </div>
                                <div class="diagram-about-wrap">
                                    <div class="diagram-sub-title">About<br><span>Community</span></div>
                                    <div class="diagram-sub-text">축구 커뮤니티에 관련된 주제들을<br>분류해 보았습니다. </div>
                                    <div class="diagram-sub-eng">Topics related to the soccer community were classified.</div>
                                </div>
                            </div>
                            <div class="sub-img">
                                <img src="../assets/img/diagramSubImg1.jpg" alt="다이어그램">
                                <img src="../assets/img/diagramSubImg2.jpg" alt="다이어그램">
                                <img src="../assets/img/diagramSubImg3.jpg" alt="다이어그램">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flowchart">
                    <div class="flowchart-wrap">
                        <div class="flowchart-title">FLOW CHART</div>
                        <img src="../assets/img/flowchart.jpg" alt="플로우차트">
                    </div>
                </div>
                <div class="paperprototype">
                    <div class="paperprototype-wrap">
                        <div class="paperprototype-title">PARPER PROTOTYPE</div>
                        <div class="paperprototype-sub-title">페이퍼 프로토타이핑은 스케치보다 좀 더 사실적으로 아이디어를 표현하는 방법입니다. <br>종이와 연필만 있으면 언제 어디서나 쉽고 빠르게 할 수 있다는 장점이 있습니다.<br>신속하게 아이디어를 담을 수 있다는 측면에서 페이퍼 프로토타이핑은 <br>다른 프로토타이핑 작업을 위한 사전 작업으로서 큰 의미를 갖습니다.</div>
                    </div>
                    <div class="paperprototype-img-wrap">
                        <div class="paper-line line1">
                            <img src="../assets/img/paperImg1.jpg" alt="페이퍼">
                            <img src="../assets/img/paperImg2.jpg" alt="페이퍼">
                            <img src="../assets/img/paperImg3.jpg" alt="페이퍼">
                        </div>
                        <div class="paper-line line2">
                            <img src="../assets/img/paperImg4.jpg" alt="페이퍼">
                            <img src="../assets/img/paperImg5.jpg" alt="페이퍼">
                            <img src="../assets/img/paperImg6.jpg" alt="페이퍼">
                            <img src="../assets/img/paperImg7.jpg" alt="페이퍼">
                        </div>
                    </div>
                    <div class="paperprototype-subimg-wrap">
                    </div>
                </div>
                <div class="play-youtube">
                    <div class="play-youtube-wrap">
                        <div class="play-youtube-title">PLAY YOUTUBE</div>
                        <div class="play-youtube">
                            <img src="../assets/img/youtube.png" alt="유튜">
                            <iframe width="493" height="310" src="https://www.youtube.com/embed/s_D2Xd2gbV8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script type="text/javascript"> 

    
    // 이미지 슬라이드 - 배너
    {
        let bannerImgBox = $(".img");
        let countImg = bannerImgBox.length;
        console.log(bannerImgBox[3]);
        var gs = new TimelineMax({repeat:-1, repeatDelay:1});
        setTimeout(function() {
            gs.to(bannerImgBox[2], 6, {
                opacity:1,
                ease: "power2.out"
            })
            gs.to(bannerImgBox[2], 6, {
                opacity:0,
                ease: "power2.out"
            })
            .to(bannerImgBox[1], 6, {
                opacity:0,
                ease: "power2.out"
            })
            .to(bannerImgBox[0], 1, {
                opacity:0,
                ease: "power2.out"
            })
            .to(bannerImgBox[2], 6, {
                opacity:1,
                ease: "power2.out"
            })
            .to(bannerImgBox[1], 0.5, {
                opacity:1,
                ease: "power2.out"
            })
            .to(bannerImgBox[0], 0.5, {
                opacity:1,
                ease: "power2.out"
            })
        }, 3000);
    }

</script>