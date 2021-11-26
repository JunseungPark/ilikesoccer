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
    <title>COMPARISON</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

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
    <!-- //header -->

    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <p class="content-title">COMPARISON</p>
                    <div class="comparison">
                        <div class="comparison-wrap">
                            <div class="comparison-box">
                                <div class=comparison-first>
                                    <div class="home-player dragArea first">
                                        <img src="../assets/img/player-placeholder.png" alt="이미지">
                                    </div>
                                    <div class="plus first"><img src="../assets/img/player-plus.png" alt="plus"></div>
                                    <div class="comparison-playerBox first none">
                                        <img class="comparison-player_photo" src="" alt="사카">
                                        <div class="comparison-player_info">
                                            <div class="comparison-palyer_lname">1sda</div>
                                            <div class="comparison-palyer_fname"></div>
                                            <div class="comparison-player_num">07</div>
                                            <div class="comparison-country">
                                                <img class="comparison-player-img" src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                                <span class="comparison-cname">England</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=comparison-second>
                                    <div class="away-player dragArea second">
                                        <img src="../assets/img/player-placeholder.png" alt="이미지">
                                    </div>
                                    <div class="plus second"><img src="../assets/img/player-plus-gray.png" alt="plus"></div>
                                    <div class="comparison-playerBox second none">
                                        <img class="comparison-player_photo" src="" alt="사카">
                                        <div class="comparison-player_info">
                                            <div class="comparison-palyer_lname">Bukayo</div>
                                            <div class="comparison-palyer_fname">Saka</div>
                                            <div class="comparison-player_num">07</div>
                                            <div class="comparison-country">
                                                <img class="comparison-player-img" src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                                <span class="comparison-cname">England</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="over-view none">
                            <span>overview</span>
                            <div class="over-view-wrap">
                                <table class="over-view-table">
                                    <colgroup>
                                        <col style="width:30%"/>
                                        <col style="width:35%"/>
                                        <col style="width:35%"/>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>Goals</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Assists</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Points/Per</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Creativity</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>clean_sheets</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>saves</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Yellow cards</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="chart-wrap">
                                    <canvas id="myChart" width="600" height="500"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="popular-player-wrap">
                            <span>POPULAR</span>
                            <div class="playerBox-wrap">
                                <div class="playerBox">
                                    <img class="player_photo" src="" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
                                <div class="playerBox">
                                    <img class="player_photo" src="" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
                                <div class="playerBox">
                                    <img class="player_photo" src="" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
                                <div class="playerBox">
                                    <img class="player_photo" src="" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
                             </div>
                        </div>
                    </div>
            </article>
        </section>
    </main>
    <!-- //contents -->
    <div class="search-box">
        <div class="search-box-wrap">
            <h4>Add a player</h4>
            <div class="title-wrap">
                <img src="../assets/img/searchImg.png" alt="검색">
                <input type="text" class="search-input" placeholder="player's name">
            </div>
            <div class="list-wrap">
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script type="text/javascript"> 
</script>

<script>

    let popularPlayers = new Array();
    let allPlayers = new Array();
    let selectedPopPlayers = new Array();
    let isHomePlayerApplied = false;
    let isAwayPlayerApplied = false;
    const proxyURL = 'https://corsanywhere.herokuapp.com/';
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
        console.log(exam);
        // document.write(exam.elements[0].team);

        dataP(exam);

    }

    function dataP(data1) {
        let data = data1.elements;
        allPlayers = data;
        playerbox(data);
    }
    
    // plyerbox 
    function playerbox(data) {

        let playerBox = $(".playerBox");

        playerBox.each(function(index, el) {

            for (let jsondata of data) {
                if(jsondata.id == index+233) {

                    let photo = jsondata.photo;
                    photo = photo.replace(/[^0-9]/g,'');

                    $(this).find(".player_photo").attr("src", "https://resources.premierleague.com/premierleague/photos/players/250x250/p"+photo+".png");
                    $(this).find(".palyer_lname").html(jsondata.web_name);
                    $(this).find(".palyer_fname").html(jsondata.first_name);
                    $(this).find(".player_num").html(index);

                    popularPlayers[index]= jsondata;

                }
            };
        })

    }

    
        // function rand(min, max) {
        //     return Math.floor(Math.random() * (max - min + 1)) + min;
        // }
    // 첫페이지 로딩
    window.onload = function(){
        renderExam();
    }
    // drag & drops
    {   

        var dropArea = $(".dragArea");
        var plus = $(".plus");
        var plyaerBox = $(".comparison-playerBox");
        var overlapThreshold = "75%";

        Draggable.create(".playerBox", {
            edgeResistance:0.80,
            bounds: ".comparison-wrap",
            onDrag: function(e) {
                dropArea.each((index, el) => {
                    TweenLite.to(".playerBox", 0.2, {
                    opacity:1
                    });
                    TweenLite.to(".playerBox", 0.2, {
                        scaleX:1.10,
                        scaleY:1.10
                    });
                    if (this.hitTest(el, overlapThreshold)) {
                        TweenLite.to(".playerBox", 0.2, {
                            opacity:1,
                            scaleX:1,
                            scaleY:1,  
                        });
                    } else {
                        TweenLite.to(".playerBox", 0.2, {
                            scaleX:1,
                            scaleY:1,   
                        });
                    }
                })
            },
            onDragEnd: function(e) {
                // 드랍된곳
                dropArea.each((index, el) => {
                    // 드랍성공
                    if (this.hitTest(el, overlapThreshold)) {
                        TweenLite.to(this.target, 0.2, {
                            x: 0,
                            y: 0,
                            scaleX:1,
                            scaleY:1
                        });

                        let selectedPlayer = e.path[1];
                        allPlayers.forEach((element, index) => {
                            if(element.web_name == $(selectedPlayer).find(".palyer_lname").text()){
                                selectedPlayer = element;
                            }
                        })

                        //첫번째 드랍카드 작성
                        if (el.className == "home-player dragArea first") {
                            console.log(el.className);
                            isHomePlayerApplied = true;
                            enterComPairData(selectedPlayer, "first");
                            
                        //두번째 드랍카드 작성
                        } else {
                            isAwayPlayerApplied = true;
                            enterComPairData(selectedPlayer, "second");
                            
                        }

                        $(el).addClass("none");
                        $(plus[index]).addClass("none");
                        $(plyaerBox[index]).removeClass("none");

                        if (isHomePlayerApplied && isAwayPlayerApplied){
                            enterOverViewData(selectedPopPlayers);
                        }

                    } else {
                        TweenLite.to(this.target, 0.2, {
                            x: 0,
                            y: 0,
                            scaleX:1,
                            scaleY:1
                        }); 
                    }
                })
            }
        });
    }

    //plus button
    {   
        let plusleft = $(".plus.first");
        let plusRight = $(".plus.second");
        let searchBox = $(".search-box");

        plusleft.click(function(){
            if (!isHomePlayerApplied){
                gsap.to(searchBox, {
                    right:0,
                    duration: 2
                })
                
                delSearchBoxList()
                makeSearchBoxList("first", allPlayers.length);
            }
        })

        plusRight.click(function(){
            if (!isAwayPlayerApplied){
                gsap.to(searchBox, {
                    right:0,
                    duration: 2
                })

                delSearchBoxList()
                makeSearchBoxList("second", allPlayers.length);
            
            }
        })

    }

    //searchBox action
    {   

        let listBox = $(".list-wrap ul");
        let inputbox = $(".search-input"); 
        let oldVal = ""

        inputbox.on("propertychange change keyup paste input", function() {
            var currentVal = $(this).val();
            let numberOfPlayers = new Array;
            if(currentVal == oldVal) {
                return
            }

            allPlayers.forEach((element, index) => {
                if(element.first_name.startsWith(currentVal)) {
                    numberOfPlayers.push(element.first_name);
                }
            })

            delSearchBoxList();
            remakeSearchBoxList("first", numberOfPlayers);

            oldVal = currentVal;
        })

        function makeSearchBoxList(where, num) {

            for(let i = 0; i < num; i++) {

                listBox.append(`<li>${allPlayers[i].web_name} ${allPlayers[i].first_name}</li>`);
                
            }
            clickEven(where);
        }

        function remakeSearchBoxList(where, num) {
            num.forEach((player, index) => {
                allPlayers.forEach((elelement, index) => {
                    if(player == elelement.first_name) listBox.append(`<li>${elelement.web_name} ${elelement.first_name}</li>`);    
                });
            });
            clickEven(where);
        }

        function clickEven(where) {
            listBox.children().off("click");
            
            listBox.children().click(function(){
                console.log($(this).html());
                let test = $(this).html().split(" ");
                console.log(test[1]);
                allPlayers.forEach((element, index) => {

                    if(element.first_name == test[1]){
                        
                        let playerBox = $(`.comparison-playerBox.${where}`);
                        let dargAreaBox = $(`.dragArea.${where}`);
                        let plus = $(`.plus.${where}`);
                        let searchBox = $(".search-box");

                        playerBox.removeClass("none");
                        dargAreaBox.addClass("none");
                        plus.addClass("none");

                        if (where == "first") {
                            isHomePlayerApplied = true;
                            isAwayPlayerAppliedInput = true;
                        }
                        else isAwayPlayerApplied = true;

                        enterComPairData(element,where);

                        gsap.to(searchBox, {
                            right:-400,
                            duration: 2
                        })

                        if (isHomePlayerApplied && isAwayPlayerApplied){

                            enterOverViewData(selectedPopPlayers);
                        }
                    }
                })
            })

        }

        function delSearchBoxList() {
            for(let i = 0; i < allPlayers.length; i++) {
                listBox.children().remove();
            }
        }    
    }

    // 비교할선수 카드 작성
    function enterComPairData(element, number){
            let photo = element.photo;
            photo = photo.replace(/[^0-9]/g,'');
            // let selectedElement = $(element);
            if (number == "first") {

                let playerBox = $(".comparison-playerBox."+number);
                playerBox.find(".comparison-player_photo").attr("src", "https://resources.premierleague.com/premierleague/photos/players/250x250/p"+photo+".png");
                playerBox.find(".comparison-palyer_lname").html(element.web_name);
                playerBox.find(".comparison-palyer_fname").html(element.first_name);
                playerBox.find(".comparison-player_num").html(element.number);

                selectedPopPlayers[0] = element.first_name;
            } else {

                let playerBox = $(".comparison-playerBox."+number);
                playerBox.find(".comparison-player_photo").attr("src", "https://resources.premierleague.com/premierleague/photos/players/250x250/p"+photo+".png");
                playerBox.find(".comparison-palyer_lname").html(element.web_name);
                playerBox.find(".comparison-palyer_fname").html(element.first_name);
                playerBox.find(".comparison-player_num").html(element.number);

                selectedPopPlayers[1] = element.first_name;
            }
    }

    // 오버뷰 테이블작성
    function enterOverViewData(selectedPlayers) {
        const overViewTable = $(".over-view-table tr");
        let firstPlayerData = new Array();
        let secondPlayerData = new Array();
        
        // 인기선수 스텟 검색
        allPlayers.forEach((element, index) => {

            if(element.first_name == selectedPlayers[0]) {
                
                    firstPlayerData[0]= element.goals_scored;
                    firstPlayerData[1]= element.assists;
                    firstPlayerData[2]= element.points_per_game;
                    firstPlayerData[3]= element.creativity;
                    firstPlayerData[4]= element.clean_sheets;
                    firstPlayerData[5]= element.saves;
                    firstPlayerData[6]= element.yellow_cards;
                    firstPlayerData[7]= element.first_name;


            } else if(element.first_name == selectedPlayers[1]){

                    secondPlayerData[0]= element.goals_scored;
                    secondPlayerData[1]= element.assists;
                    secondPlayerData[2]= element.points_per_game;
                    secondPlayerData[3]= element.creativity;
                    secondPlayerData[4]= element.clean_sheets;
                    secondPlayerData[5]= element.saves;
                    secondPlayerData[6]= element.yellow_cards;
                    secondPlayerData[7]= element.first_name;

            }
        })

        overViewTable.each((index, element) => {
         
            if(firstPlayerData[index] > secondPlayerData[index]) {
                $(element).children().eq(1).addClass("shadow-left").html(firstPlayerData[index]);
                $(element).children().eq(2).addClass().html(secondPlayerData[index]);
            } else if(firstPlayerData[index] < secondPlayerData[index]) {
                $(element).children().eq(1).addClass().html(firstPlayerData[index]);
                $(element).children().eq(2).addClass("shadow-right").html(secondPlayerData[index]);
            } else if (firstPlayerData[index] == 0 && secondPlayerData[index] == 0) {
                $(element).children().eq(1).html(firstPlayerData[index]);
                $(element).children().eq(2).html(secondPlayerData[index]);
            }

        })

        firstPlayerData[2] = parseInt(firstPlayerData[2]);
        firstPlayerData[3] = Math.round((firstPlayerData[3])/10);
        secondPlayerData[2] = parseInt(secondPlayerData[2]);
        secondPlayerData[3] = Math.round((secondPlayerData[3])/10);


        showData();
        makeChart(firstPlayerData, secondPlayerData)
    }
    //when aplied 2players compari
    {
        function showData(){
            let overView = $(".over-view").removeClass("none");
            gsap.fromTo(overView, 
                {   
                    opacity: 0,
                }, 
                {
                    opacity: 1,
                    duration: 3
                });
        }
    }

    //making chart
    {
        function makeChart(f, s){
            var ctx = document.getElementById("myChart"); //캔버스 id값 가져오기
            // 차트 이미지 색
            const data = {
                    labels: [
                        'Goals',
                        'Assists',
                        'PointsPer',
                        'Creativity',
                        'cleansheets',
                        'Saves',
                        'Yellowcards'
                    ],
                    datasets: [{
                        label: f[7],
                        data: [f[0], f[1], f[2], f[3], f[4], f[5], f[6]],
                        fill: true,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgb(255, 99, 132)',
                        pointBackgroundColor: 'rgb(255, 99, 132)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(255, 99, 132)'
                    }, {
                        label: s[7],
                        data: [s[0], s[1], s[2], s[3], s[4], s[5], s[6]],
                        fill: true,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgb(54, 162, 235)',
                        pointBackgroundColor: 'rgb(54, 162, 235)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(54, 162, 235)'
                    }]
            };
            // 차트 생성
            var myChart = new Chart(ctx, {
                type: 'radar',
                data: data,
                options: {
                    elements: {
                        line: {
                            borderWidth: 3
                        }
                    },
                    scales: {
                        r: {
                            angleLines: {
                                display: false
                            },
                            suggestedMin: 50,
                            suggestedMax: 100
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: true
                },
            });
        }
    }

</script>
