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
    <title>랭킹페이지</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- 데이터 -->
    <style>
        footer {
            width: 100%;
            height: 100px;
            position: relative;
            border-top: 1px solid #fff;
            box-sizing: border-box;
            background-color: #191919;
            display: flex;
            align-items: center;
        }

        
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
    <!-- //header -->
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <div class="mainCont">
                    <div class="rankingWrap">
                        <div class="ranking-head">
                            <h3 class="ranking-title">RANKING</h3>
                            <button class="ranking-category-slide" type="button">
                                <span class="ranking-category">
                                    <ul>
                                        <li class="show">Goals</li>
                                        <li>Assists</li>
                                        <li>Points per Game</li>
                                    </ul>
                                </span>
                                <img class="ranking-category-btn" src="../assets/img/categoryArrow.svg" alt="화살표 이미지">
                            </button>
                        </div>
                        <div class="ranking-slider-wrap">
                            <div class="ranking-slider-inner">
                                <div class="rankingCont goals">
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="gRankingPlayerImg1" src="/" alt="선수1 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">1</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve goals">Goals : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="gRankingPlayerImg2" alt="선수2 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">2</span>
                                            <div class="rankingPlayer">
                                            <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve goals">Goals : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="gRankingPlayerImg3" alt="선수3 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">3</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve goals">Goals : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="gRankingPlayerImg4" alt="선수4 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">4</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve goals">Goals : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap i5th">
                                            <img id="gRankingPlayerImg5" alt="선수5 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">5</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve goals">Goals : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="rankingCont assists">
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="aRankingPlayerImg1" alt="선수1 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">1</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve assists">Assists : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="aRankingPlayerImg2" alt="선수2 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">2</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve assists">Assists : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="aRankingPlayerImg3" alt="선수3 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">3</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve assists">Assists : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="aRankingPlayerImg4" alt="선수4 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">4</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve assists">Assists : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap i5th">
                                            <img id="aRankingPlayerImg5" alt="선수5 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">5</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve assists">Assists : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="rankingCont points">
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="pRankingPlayerImg1" alt="선수1 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">1</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve points">Points : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="pRankingPlayerImg2" alt="선수2 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">2</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve points">Points : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="pRankingPlayerImg3" alt="선수3 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">3</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve points">Points : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap">
                                            <img id="pRankingPlayerImg4" alt="선수4 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">4</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve points">Points : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="ranking">
                                        <div class="rpImgWrap i5th">
                                            <img id="pRankingPlayerImg5" alt="선수5 이미지">
                                        </div>
                                        <div class="rankingPlayerDesc">
                                            <span class="rankingNum">5</span>
                                            <div class="rankingPlayer">
                                                <div class="rankingPlayerName">
                                                    <span class="rpnF">First Name</span>
                                                    <span class="rpnL">Last Name</span>
                                                </div>
                                                <div class="rankingPlayerAchieve points">Points : <span></span></div>
                                                <div class="rankingPlayerInfo">
                                                    <span class="rankingPlayerNum">No.<em>11</em></span>
                                                    <span class="rankingPlayerTeam">team</span>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
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
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
    let allPlayers = new Array();
    var requestOptions = {
        method: 'GET',
        redirect: 'follow',
        mode: 'cors'
    };
    const reqType = {
        bootstrap : 'bootstrap-static/', //Overview
        element : 'element-summary/', //Players (playderID)
        events : 'events', // Get all gameweeks
        event : 'event',  //A selected gameweek
        entry : 'entry', //Get a team
        elementTypes: 'element-types', // Get all player positions
        gameweekFixtures: 'fixtures/?event', //Get all fixtures for a specified gameweek (gameweek number)
        teams: 'teams/', //Get all teams,
        leagueClassicStanding: 'leagues-classic/' //Get league standing at current gameweek.
    }
    const proxyURL = 'https://corsanywhere.herokuapp.com/';
    //api fetch
    async function fetchExam() {
        try {
            const response = await fetch(`${proxyURL}https://fantasy.premierleague.com/api/bootstrap-static/`, requestOptions);
            const exam = await response.json();
            return exam;
        } catch (error) {
            console.error(error);
        }
    }
    // render 데이터
    async function renderExam() {
        const exam = await fetchExam();
        //console.log(exam);
        // document.write(exam.elements[0].team);
        dataP(exam);
    }
    function dataP(data1) {
        let data = data1.elements;
        allPlayers = data;
        dataExit();
        
    }
    // 첫페이지 로딩
    window.onload = function(){
         renderExam();
    }
    //예제
    {
        function dataExit() {
            // for(let ex of allPlayers) {
            //     if (ex.id == 583) {
            //         console.log(ex.web_name);

            //         console.log(ex.goals_scored);
            //     }
            // }

            //골 랭킹
            function gCompare(a,b){
                return a.goals_scored > b.goals_scored? -1: a.goals_scored < b.goals_scored? 0:1;
            }

            allPlayers.sort(gCompare);

            let gRanking = document.querySelectorAll(".rankingCont.goals .ranking");
            let gRankingGLength = gRanking.length;
            //let gRankingPlayerImg = document.getElementById("gRankingPlayerImg1");
            let gRankingPlayerNameF = document.querySelectorAll(".rankingCont.goals .rankingPlayerName .rpnF");
            let gRankingPlayerNameL = document.querySelectorAll(".rankingCont.goals .rankingPlayerName .rpnL");
            let gRankingPlayerNum = document.querySelectorAll(".rankingCont.goals .rankingPlayerNum em")
            let gRankingPlayerAchieve = document.querySelectorAll(".rankingCont.goals .rankingPlayerAchieve.goals span");
            let gRankingPlayerTeam = document.querySelectorAll(".rankingCont.goals .rankingPlayerTeam");
            

            for(let i=0; i<gRankingGLength; i++){
                let photo1g = allPlayers[0].photo;
                photo1g = photo1g.replace(/[^0-9]/g,'');
                document.getElementById("gRankingPlayerImg1").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo1g}.png`;
                let photo2g = allPlayers[1].photo;
                photo2g = photo2g.replace(/[^0-9]/g,'');
                document.getElementById("gRankingPlayerImg2").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo2g}.png`;
                let photo3g = allPlayers[2].photo;
                photo3g = photo3g.replace(/[^0-9]/g,'');
                document.getElementById("gRankingPlayerImg3").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo3g}.png`;
                let photo4g = allPlayers[3].photo;
                photo4g = photo4g.replace(/[^0-9]/g,'');
                document.getElementById("gRankingPlayerImg4").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo4g}.png`;
                let photo5g = allPlayers[4].photo;
                photo5g = photo5g.replace(/[^0-9]/g,'');
                document.getElementById("gRankingPlayerImg5").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo5g}.png`;
                //document.getElementById("gRankingPlayerImg1").attr("src", `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo}.png`);
                // gRankingPlayerImg.forEach((el,i)=>{
                //     el.attr("src", `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo}.png`);
                // });
                gRankingPlayerNameF.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].first_name;
                });
                gRankingPlayerNameL.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].web_name;
                });
                gRankingPlayerNum.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].id;
                });
                gRankingPlayerAchieve.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].goals_scored;
                });
                gRankingPlayerTeam.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].goals_scored;
                });
            }

            //어시스트 랭킹
            function aCompare(a,b){
                return a.assists > b.assists? -1: a.assists < b.assists? 0:1;
            }

            allPlayers.sort(aCompare);

            let aRanking = document.querySelectorAll(".rankingCont.assists .ranking");
            let aRankingGLength = aRanking.length;
            //let gRankingPlayerImg = document.getElementByID("rankingPlayerImg");
            let aRankingPlayerNameF = document.querySelectorAll(".rankingCont.assists .rankingPlayerName .rpnF");
            let aRankingPlayerNameL = document.querySelectorAll(".rankingCont.assists .rankingPlayerName .rpnL");
            let aRankingPlayerNum = document.querySelectorAll(".rankingCont.assists .rankingPlayerNum em")
            let aRankingPlayerAchieve = document.querySelectorAll(".rankingCont.assists .rankingPlayerAchieve.assists span");
            let aRankingPlayerTeam = document.querySelectorAll(".rankingCont.assists .rankingPlayerTeam");
            
            for(let i=0; i<aRankingGLength; i++){
                let photo1a = allPlayers[0].photo;
                photo1a = photo1a.replace(/[^0-9]/g,'');
                document.getElementById("aRankingPlayerImg1").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo1a}.png`;
                let photo2a = allPlayers[1].photo;
                photo2a = photo2a.replace(/[^0-9]/g,'');
                document.getElementById("aRankingPlayerImg2").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo2a}.png`;
                let photo3a = allPlayers[2].photo;
                photo3a = photo3a.replace(/[^0-9]/g,'');
                document.getElementById("aRankingPlayerImg3").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo3a}.png`;
                let photo4a = allPlayers[3].photo;
                photo4a = photo4a.replace(/[^0-9]/g,'');
                document.getElementById("aRankingPlayerImg4").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo4a}.png`;
                let photo5a = allPlayers[4].photo;
                photo5a = photo5a.replace(/[^0-9]/g,'');
                document.getElementById("aRankingPlayerImg5").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo5a}.png`;

                // document.getElementByID("rankingPlayerImg").forEach((el,i)=>{
                //     el.src = '"' + allPlayers[i].photo + '"';
                // });
                aRankingPlayerNameF.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].first_name;
                });
                aRankingPlayerNameL.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].web_name;
                });
                aRankingPlayerNum.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].id;
                });
                aRankingPlayerAchieve.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].assists;
                });
                aRankingPlayerTeam.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].assists;
                });
            }

            //포인트 랭킹
            function pCompare(a,b){
                return a.points_per_game > b.points_per_game? -1: a.points_per_game < b.points_per_game? 0:1;
            }

            allPlayers.sort(pCompare);

            let pRanking = document.querySelectorAll(".rankingCont.points .ranking");
            let pRankingGLength = pRanking.length;
            //let gRankingPlayerImg = document.getElementByID("rankingPlayerImg");
            let pRankingPlayerNameF = document.querySelectorAll(".rankingCont.points .rankingPlayerName .rpnF");
            let pRankingPlayerNameL = document.querySelectorAll(".rankingCont.points .rankingPlayerName .rpnL");
            let pRankingPlayerNum = document.querySelectorAll(".rankingCont.points .rankingPlayerNum em")
            let pRankingPlayerAchieve = document.querySelectorAll(".rankingCont.points .rankingPlayerAchieve.points span");
            let pRankingPlayerTeam = document.querySelectorAll(".rankingCont.points .rankingPlayerTeam");
            
            for(let i=0; i<pRankingGLength; i++){
                let photo1p = allPlayers[0].photo;
                photo1p = photo1p.replace(/[^0-9]/g,'');
                document.getElementById("pRankingPlayerImg1").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo1p}.png`;
                let photo2p = allPlayers[1].photo;
                photo2p = photo2p.replace(/[^0-9]/g,'');
                document.getElementById("pRankingPlayerImg2").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo2p}.png`;
                let photo3p = allPlayers[2].photo;
                photo3p = photo3p.replace(/[^0-9]/g,'');
                document.getElementById("pRankingPlayerImg3").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo3p}.png`;
                let photo4p = allPlayers[3].photo;
                photo4p = photo4p.replace(/[^0-9]/g,'');
                document.getElementById("pRankingPlayerImg4").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo4p}.png`;
                let photo5p = allPlayers[4].photo;
                photo5p = photo5p.replace(/[^0-9]/g,'');
                document.getElementById("pRankingPlayerImg5").src =  `https://resources.premierleague.com/premierleague/photos/players/250x250/p${photo5p}.png`;

                // document.getElementByID("rankingPlayerImg").forEach((el,i)=>{
                //     el.src = '"' + allPlayers[i].photo + '"';
                // });
                pRankingPlayerNameF.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].first_name;
                });
                pRankingPlayerNameL.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].web_name;
                });
                pRankingPlayerNum.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].id;
                });
                pRankingPlayerAchieve.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].points_per_game;
                });
                pRankingPlayerTeam.forEach((el,i)=>{
                    el.innerHTML = allPlayers[i].points_per_game;
                });
            }
        }
    }




    //카테고리 제목 바꾸기 변수
    let rankingCategory = document.querySelectorAll(".ranking-category-slide ul li");
    let rankingCategoryLength = rankingCategory.length;

    //슬라이드 변수
    const rankingCategorySlide = document.querySelector(".ranking-category-slide");
    const rankingSliderWrap = document.querySelector(".ranking-slider-wrap");
    const rankingSliderInner = document.querySelector(".ranking-slider-inner");

    let rankingCont = document.querySelectorAll(".rankingCont");
    let rankingContCount = rankingCont.length;
    let rankingWrapWidth = rankingSliderWrap.clientWidth;
    let currentIndex = 0;

    //카테고리 제목 바꾸기 함수
    function rankingCategoryChange(){
        rankingCategory.forEach(function(el){
            el.classList.remove("show");
        });

        rankingCategory[currentIndex].classList.add("show");
    }

    //슬라이드 함수
    function nextCategory(num){
        rankingSliderInner.style.transition = "all 300ms"
        rankingSliderInner.style.transform = "translateX("+ -rankingWrapWidth * num +"px)";
        currentIndex = num;
    }

    //카테고리 제목 바꾸기, 슬라이드 실행
    function moveNext(){
        let nextIndex = (currentIndex + 1) % rankingContCount;
        let cateNextIndex = (currentIndex + 1) % rankingCategoryLength;
        nextCategory(nextIndex);
        rankingCategoryChange(cateNextIndex);
    }

    rankingCategorySlide.addEventListener("click", moveNext);


    {
        let imgs = $(".rpImgWrap img");
        imgs.each(function(index, el){
            $(el).mouseover(function(){
                gsap.fromTo($(el), 
                    {   
                        scale:1,
                    }, 
                    {
                        scale:1.1,
                        duration: 3
                    }
                );
            })
            $(el).mouseout(function(){
                gsap.fromTo($(el), 
                    {   
                        scale:1.1,
                    }, 
                    {
                        scale:1,
                        duration: 3
                    }
                );
            })
        })
    }
</script>