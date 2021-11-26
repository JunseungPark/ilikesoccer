<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
    
    <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">  
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->
    <main id="contents">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">팀 소개</h2>
            <article class="content-article">
                <div class="team-introduce">
                    <h3>Arsenal</h3>
                    <div class="card-wrap">
                        <div class="card">
                            <div class="card-desc">
                                <p>아스널 풋볼 클럽(영어: Arsenal Football Club→아스널 축구단)은 런던을 연고지로 홀로
                                웨이의 에미레이츠 스타디움을 홈구장으로 하는 잉글랜드의 축구 클럽이다. 현재 잉글랜드
                                의 1부 리그인 프리미어리그에 속해 있다. 아스널 FC(이하 아스널)는 현재 잉글랜드에서 13
                                번의 리그 우승을 이뤘다. FA컵에서 14번의 우승으로 잉글랜드 최다 우승 기록을 가지고있다.<br><br>
                                아스널은 제2차 세계 대전 이후인 1970-71 시즌에 리그와 FA컵에서 우승하면서 20세기에 
                                더블을 기록한 두 번째 팀이 되었다. 이후 지금까지 두 번의 리그와 FA컵 우승 더블, 한 번의 
                                컵 더블, 그리고 프리미어리그 최초의 무패 우승을 기록하였다. 또한 2005-06년 UEFA 챔피
                                언스리그 결승전에 진출해, 런던 연고 축구단으로는 UEFA 챔피언스리그 결승전에 진출한 첫
                                번째 팀이 되기도 하였다.
                                </p>
                            </div>
                            <div class="card-img">
                                <img src="https://www.arsenal.com/sites/default/files/styles/large_16x9/public/images/royal_arsenal_1888.jpg?itok=rzmRzZmE" alt="이미지1">
                            </div>  
                        </div>
                        <div class="card">
                            <div class="card-img">
                                <img src="https://www.arsenal.com/sites/default/files/styles/large_16x9/public/images/arsenal_1948_brochure.jpg?itok=8xaHg9jb" alt="이미지2">
                            </div>  
                            <div class="card-desc">
                                <p>아스널의 홈 유니폼 색깔은 전통적으로 레드 앤 화이트(Red & White)였지만 이는 시간이
                                흘러감에 따라 점차 변해 갔다. 연고지도 클럽 창단시에는 켄트주 울위치였으나 1913
                                년 북런던의 하이버리 아스널 스타디움으로 옮겼다. 2006년엔 다시 하이베리와 가까
                                운 홀로웨이의 에미레이트 스타디움으로 홈구장을 옮겼다.<br><br>
                                그들이 달성한 위업은 영국 축구 문화에서 정기적으로 다뤄지고 있다. 팀의 애칭에는 거너스(Gunners)라고 불린다.
                                현재 감독은 미켈 아르테타이며 주장은 피에르에메리크 오바메양이고 부주장은 엑토르 베예린이다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->

    <!-- script -->
    <script>

    </script>
    <!-- //script -->
</body>
</html>