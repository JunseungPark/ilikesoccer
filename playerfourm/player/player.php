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
            <h2 class="ir_so">선수 정보</h2>
            <article class="content-article">
                <div class="position_btn">
                    <span class="active"><a href="#c">ALL</a></span>
                    <span><a href="#c">GK</a></span>
                    <span><a href="#c">DF</a></span>
                    <span><a href="#c">MF</a></span>
                    <span><a href="#c">FW</a></span>
                </div>
                <section id="playerWrap">
                    <div class="GK_Wrap role">
                        <h2 class="position">GOALKEEPERS</h2>
                            <div class="playerBox">
                                <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Leno_1100x693.jpg?itok=9EhBLt-a" alt="레노">
                                <div class="player_info">
                                    <div class="palyer_lname">Bernd</div>
                                    <div class="palyer_fname">Leno</div>
                                    <div class="player_num">01</div>
                                    <div class="country">
                                        <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Germany.png?itok=KbB8KGZO" alt="독일">
                                        <span class="cname">Germany</span>
                                    </div>
                                </div>
                            </div>
                            <!--playerBox-->
                            <div class="playerBox">
                                <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Ramsdale_1100x693.jpg?itok=dsj5wyD4" alt="화이램스달트">
                                <div class="player_info">
                                    <div class="palyer_lname">Aaron</div>
                                    <div class="palyer_fname">Ramsdale</div>
                                    <div class="player_num">32</div>
                                    <div class="country">
                                        <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                        <span class="cname">England</span>
                                    </div>
                                </div>
                            </div>
                            <!--playerBox-->
                            <div class="playerBox">
                                <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Okonkwo_1100x693.jpg?itok=DfwVzL4c" alt="오콘코">
                                <div class="player_info">
                                    <div class="palyer_lname">Arthur</div>
                                    <div class="palyer_fname">Okonkwo</div>
                                    <div class="player_num">33</div>
                                    <div class="country">
                                        <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                        <span class="cname">England</span>
                                    </div>
                                </div>
                            </div>
                            <!--playerBox-->
                    </div>
                    
                    <div class="DF_Wrap role">
                    <h2 class="position">DEFENDERS</h2>
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Tierney_1100x693.jpg?itok=4Ygm52zS" alt="티어니">
                            <div class="player_info">
                                <div class="palyer_lname">Kieran</div>
                                <div class="palyer_fname">Tierney</div>
                                <div class="player_num">03</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Scotland.png?itok=8HZ_W0cF" alt="스코틀랜드">
                                    <span class="cname">Scotland</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/White_1100x693.jpg?itok=oxcwvYUz" alt="화이트">
                            <div class="player_info">
                                <div class="palyer_lname">Ben</div>
                                <div class="palyer_fname">White</div>
                                <div class="player_num">04</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Gabriel_1100x693.jpg?itok=47dgfmNH" alt="가브리엘">
                            <div class="player_info">
                                <div class="palyer_lname">Array</div>
                                <div class="palyer_fname">Gabriel</div>
                                <div class="player_num">06</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Brazil.png?itok=hH2RSAlg" alt="브라질">
                                    <span class="cname">Brazil</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Holding_1100x693.jpg?itok=U14rhbk9" alt="홀딩">
                            <div class="player_info">
                                <div class="palyer_lname">Rob</div>
                                <div class="palyer_fname">Holding</div>
                                <div class="player_num">16</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Cedric_1100x693.jpg?itok=wQUoN53X" alt="세드릭">
                            <div class="player_info">
                                <div class="palyer_lname">Soares</div>
                                <div class="palyer_fname">Cedric</div>
                                <div class="player_num">17</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-10/Portugal.png?itok=3QFfTqQX" alt="포르투갈">
                                    <span class="cname">Portugal</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/MicrosoftTeams-image%20%282%29_3.png?itok=S1lHrTnu" alt="토미야수">
                            <div class="player_info">
                                <div class="palyer_lname">Takehiro</div>
                                <div class="palyer_fname">Tomiyasu</div>
                                <div class="player_num">18</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Japan.png?itok=lNczq_Pw" alt="일본">
                                    <span class="cname">Japan</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Tavares_1100x693.jpg?itok=7bVhRSyK" alt="타바레스">
                            <div class="player_info">
                                <div class="palyer_lname">Nuno</div>
                                <div class="palyer_fname">Tavares</div>
                                <div class="player_num">20</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-10/Portugal.png?itok=3QFfTqQX" alt="포르투갈">
                                    <span class="cname">Portugal</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Chambers_1100x693.jpg?itok=pbl58pyg" alt="챔버">
                            <div class="player_info">
                                <div class="palyer_lname">Calum</div>
                                <div class="palyer_fname">Chambers</div>
                                <div class="player_num">21</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Mari_1100x693.jpg?itok=5cCY0hQ7" alt="챔버">
                            <div class="player_info">
                                <div class="palyer_lname">Calum</div>
                                <div class="palyer_fname">Chambers</div>
                                <div class="player_num">22</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Spain.png?itok=ywkQLfn3" alt="스페인">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Kolasinac_1100x693.jpg?itok=51B3mvlK" alt="챔버">
                            <div class="player_info">
                                <div class="palyer_lname">Sead</div>
                                <div class="palyer_fname">Kolasinac</div>
                                <div class="player_num">31</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Bosnia_and_Herzegovina.png?itok=rOk71SSj" alt="영국">
                                    <span class="cname">Bosnia</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                    </div>
                    
                    <div class="MF_Wrap role">
                    <h2 class="position">MIDFIELDERS</h2>
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Thomas_1100x693.jpg?itok=taMSepWV" alt="토마스">
                            <div class="player_info">
                                <div class="palyer_lname">Partey</div>
                                <div class="palyer_fname">Thomas</div>
                                <div class="player_num">05</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2020-10/Ghana.png?itok=XoB75SaL" alt="가나">
                                    <span class="cname">Ghana</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Saka_1100x693.jpg?itok=-haUUA_r" alt="사카">
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
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Odegaard_1100x693.jpg?itok=ER7Qz_to" alt="오드가드">
                            <div class="player_info">
                                <div class="palyer_lname">Martin</div>
                                <div class="palyer_fname">Odegaard</div>
                                <div class="player_num">08</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2020-08/norway.png?itok=JV-l-DjI" alt="노르웨이">
                                    <span class="cname">Norway</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/SmithRowe_1100x693.jpg?itok=7zPYf_lK" alt="로위">
                            <div class="player_info">
                                <div class="palyer_lname">Emile</div>
                                <div class="palyer_fname">Smith Rowe</div>
                                <div class="player_num">10</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/MaitlandNiles_1100x693.jpg?itok=EPJlmf6e" alt="나일스">
                            <div class="player_info">
                                <div class="palyer_lname">Ainsley</div>
                                <div class="palyer_fname">Maitland-Niles</div>
                                <div class="player_num">15</div>
                                <div class="country">
                                <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Lokonga_1100x693.jpg?itok=CbPKEHXM" alt="록온가">
                            <div class="player_info">
                                <div class="palyer_lname">Albert Sambi</div>
                                <div class="palyer_fname">Lokonga</div>
                                <div class="player_num">23</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2021-09/MicrosoftTeams-image%20%2832%29.png?itok=KmmjzXoI" alt="벨기에">
                                    <span class="cname">Belgium</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Elneny_1100x693.jpg?itok=l1FyHckN" alt="엘느니">
                            <div class="player_info">
                                <div class="palyer_lname">Mohamed</div>
                                <div class="palyer_fname">Elneny</div>
                                <div class="player_num">25</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Egypt.png?itok=RZvtPHd3" alt="이집트">
                                    <span class="cname">Egypt</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Xhaka_1100x693.jpg?itok=fQ5uzBQ1" alt="샤카">
                            <div class="player_info">
                                <div class="palyer_lname">Granit</div>
                                <div class="palyer_fname">Xhaka</div>
                                <div class="player_num">34</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Switzerland.png?itok=i7fAhpvY" alt="스위스">
                                    <span class="cname">Switzerland</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                    </div>
                    
                    <div class="FW_Wrap role">
                    <h2 class="position">FORWARDS</h2>
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Lacazette_1100x693.jpg?itok=3f6isZ8r" alt="라카제트">
                            <div class="player_info">
                                <div class="palyer_lname">Alexandre</div>
                                <div class="palyer_fname">Lacazette</div>
                                <div class="player_num">09</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/France.png?itok=F39csEk9" alt="프랑스">
                                    <span class="cname">France</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Aubameyang_1100x693.jpg?itok=mjvhVcBQ" alt="사카">
                            <div class="player_info">
                                <div class="palyer_lname">Pierre-Emerick</div>
                                <div class="palyer_fname">Aubameyang</div>
                                <div class="player_num">14</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2018-01/gabon.png?itok=fiQZpQqT" alt="오바메양">
                                    <span class="cname">Gabon</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Pepe_1100x693.jpg?itok=8ayQyNCm" alt="페페">
                            <div class="player_info">
                                <div class="palyer_lname">Nicolas</div>
                                <div class="palyer_fname">Pepe</div>
                                <div class="player_num">19</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2019-08/IvoryCoast.jpg?itok=d3W1pRrI" alt="코트디부아르">
                                    <span class="cname">CotedIvoire</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Balogun_1100x693.jpg?itok=L0I8yw1L" alt="바로건">
                            <div class="player_info">
                                <div class="palyer_lname">Folarin</div>
                                <div class="palyer_fname">Balogun</div>
                                <div class="player_num">26</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Nketiah_1100x693.jpg?itok=jqHkmx21" alt="느케티">
                            <div class="player_info">
                                <div class="palyer_lname">Eddie</div>
                                <div class="palyer_fname">Nketiah</div>
                                <div class="player_num">30</div>
                                <div class="country">
                                <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Martinelli_1100x693.jpg?itok=fSYf2jZg" alt="마틴리">
                            <div class="player_info">
                                <div class="palyer_lname">Gabriel</div>
                                <div class="palyer_fname">Martinelli</div>
                                <div class="player_num">35</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Brazil.png?itok=hH2RSAlg" alt="브라질">
                                    <span class="cname">Brazil</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
            <!--모달-->
    <?php
        include "playerModal.php"
    ?>
        <!--//모달-->
</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script>
let arsenalPlayers = [
    {
        "name":"Bernd Leno",
        "number":"01",
        "Born":"March 4, 1992/Bietighem-Bissingen, Germany",
        "nation_teamr":"Germany",
        "debut":"Vorskla Poltava Europa League, September 20, 2018 (won 4-2)",
        "desc":"He made more appearances for Arsenal than any other player last term, and racked up 16 clean sheets in all competitions. He made a wonderful penalty save in the home match against Chelsea in January 2021, as Arsenal recorded the third best defensive record in the top flight."
    },
    {
        "name":"Aaron Ramsdale",
        "number":"32",
        "Born":"May 14, 1998/Stoke-on-Trent",
        "Nation Teamr":"England",
        "Debut":"v West Bromwich Albion (a) League Cup, August 25, 2021 (won 6-0)",
        "desc":"Talented young goalkeeper Aaron joined in the summer, having been part of the England squad that reached the final of Euro 2020. Very highly regarded throughout the early part of his career, Aaron made the switch from Sheffield United – the club at which he started his pro career – making his debut aged 18 in 2016."
    },
    {
        "name":"Arthur Okonkwo",
        "number":"33",
        "Born":"September 9, 2001/London",
        "Nation Teamr":"England",
        "Debut":"-",
        "desc":"A tall and modern goalkeeper, 2018/19 proved to be a breakthrough season for Arthur, as he proved his worth at both under-18 and under-23 level."
    },
    {
        "name":"Kieran Tierney",
        "number":"3",
        "Born":"June 5, 1997/Isle of Man",
        "Nation Teamr":"Scotland",
        "Debut":"v Nottingham Forest (h), League Cup, September 24, 2019 (won 5-0)",
        "desc":"Signing from boyhood club Celtic – where he won four Scottish Premier League titles, two Scottish FA Cups and two Scottish League Cups all before the age of 22 – Kieran soon settled into life in London."
    },
    {
        "name":"Ben White",
        "number":"4",
        "Born":"October 8, 1997/Poole",
        "Nation Teamr":"England",
        "Debut":"v Brentford (a), Premier League, August 13, 2021 (lost 2-0)",
        "desc":"A big-money signing in the summer, central defender Ben has gone from strength to strength in recent seasons."
    },
    {
        "name":"Array Gabriel",
        "number":"6",
        "Born":"December 19, 1997/Sao Paulo, Brazil",
        "Nation Teamr":"Brazil",
        "Debut":"-",
        "desc":"ACentral defender Gabriel joined us from French side Lille on a long-term contract in September 2020. "
    },
    {
        "name":"Rob Holding",
        "number":"16",
        "Born":"September 20, 1995",
        "Nation Teamr":"England",
        "Debut":"-",
        "desc":"Rob joined from Championship side Bolton Wanderers in the summer of 2016, and has since gone on to star in the Emirates FA Cup final of 2017, when we beat Chelsea 2-1 to lift the trophy."
    },
    {
        "name":"Cedric Soares",
        "number":"17",
        "Born":"August 31, 1991/Singen, Germany",
        "Nation Teamr":"Portugal",
        "Debut":"-",
        "desc":"Cedric Soares joined us from Southampton in January 2020. "
    },
    {
        "name":"Takehiro Tomiyasu",
        "number":"18",
        "Born":"Nomber 5, 1998, Japan",
        "Nation Teamr":"Japan",
        "Debut":"-",
        "desc":"Japan international Takehiro Tomiyasu joined us from Serie A side Bologna on a long-term contract in August 2021."
    },
    {
        "name":"Nuno Tavares",
        "number":"20",
        "Born":"January 26, 2000",
        "Nation Teamr":"Portugal",
        "Debut":"-",
        "desc":"Nuno Tavares joined us from Benfica on a long-term contract in July 2021."
    },
    {
        "name":"Calum Chambers",
        "number":"21",
        "Born":"January 25, 1995",
        "Nation Teamr":"England",
        "Debut":"-",
        "desc":"England defender Calum began his career at local club Southampton, before joining us in the summer of 2014."
    },
    {
        "name":"Pablo Mari",
        "number":"22",
        "Born":"August 31, 1993",
        "Nation Teamr":"Spain",
        "Debut":"-",
        "desc":"Spanish defender Pablo joined us from Flamengo in January 2020."
    },
    {
        "name":"Sead Kolasinac",
        "number":"31",
        "Born":"June 20, 1993/Karlsruhe, Germany",
        "Nation Teamr":"Bosnia",
        "Debut":"-",
        "desc":"Bosnia and Herzegovina international Sead joined us in June 2017 on a long-term contract, arriving from Schalke 04 in the Bundesliga."
    },
    {
        "name":"Thomas Partey",
        "number":"5",
        "Born":"June 13, 1993/Krobo Odumase, Ghana",
        "Nation Teamr":"Ghana",
        "Debut":"v Manchester City (a), Premier League, October 17, 2020 (lost 0-1)",
        "desc":"A powerful, skilful central midfielder, Thomas gave a number of stand-out performances during his debut season."
    },
    {
        "name":"Bukayo Saka",
        "number":"7",
        "Born":"September 5, 2001/Ealing",
        "Nation Teamr":"England",
        "Debut":"v Vorskla Poltava (a), Europa League, November 29, 2018 (won 3-0)",
        "desc":"Arsenal’s Player of the Season for 2020/21, Bukayo continued to make great strides forward last term, confirming his status as one of the hottest young prospects in European football."
    },
    {
        "name":"Martin Odegaard",
        "number":"8",
        "Born":"December 17, 1998/Drammen, Norway",
        "Nation Teamr":"Norway",
        "Debut":"v Manchester United (h), Premier League, January 30, 2021 (drew 0-0)",
        "desc":"Having enjoyed a highly-productive loan spell with us in the second half of last season, Martin made his switch from Real Madrid permanent in the summer."
    },
    {
        "name":"Emile Smith Rowe",
        "number":"10",
        "Born":"July 28, 2000/Croydon",
        "Nation Teamr":"England",
        "Debut":"v Vorskla Poltava (h), Europa League, September 20, 2018 (won 4-2)",
        "desc":"An immensely gifted, creative midfielder, Emile made massive strides last season and become an increasingly influential part of the team as the campaign wore on."
    },
    {
        "name":"Ainsley Maitland-Niles",
        "number":"15",
        "Born":"August 29, 1997/Goodmayes",
        "Nation Teamr":"England",
        "Debut":"v Galatasaray (a), Champions League, December 9, 2014 (won 4-1)",
        "desc":"England international Ainsley spent the second half of last season on loan to West Brom in the Premier League, making 12 appearances for the Baggies."
    },
    {
        "name":"Ainsley Maitland-Niles",
        "number":"15",
        "Born":"August 29, 1997/Goodmayes",
        "Nation Teamr":"England",
        "Debut":"v Galatasaray (a), Champions League, December 9, 2014 (won 4-1)",
        "desc":"England international Ainsley spent the second half of last season on loan to West Brom in the Premier League, making 12 appearances for the Baggies."
    },
    {
        "name":"Albert Sambi Lokonga",
        "number":"23",
        "Born":"October 22, 1999/Brussels, Belgium",
        "Nation Teamr":"Belgium",
        "Debut":"v Brentford (a), Premier League, August 13, 2021 (lost 2-0)",
        "desc":"An industrious, determined central midfielder, Albert joined us from Belgian top-flight side Anderlecht during pre-season at the age of 21."
    },
    {
        "name":"Mohamed Elneny",
        "number":"25",
        "Born":"July 11, 1992/El-Mahalla El-Kubra",
        "Nation Teamr":"Egypt",
        "Debut":"January 30, 2016",
        "desc":"A full Egypt international since 2011, Mo joined the club from Swiss champions FC Basel, where he made nearly 100 league appearances and won the Super League in three consecutive seasons from 2013 to 2015 before making the switch to north London in January 2016."
    },
    {
        "name":"Granit Xhaka",
        "number":"34",
        "Born":"September 27, 1992/Basel, Switzerland",
        "Nation Teamr":"Swizerland",
        "Debut":"-",
        "desc":"Central midfielder Granit joined the club from Borussia Monchengladbach in May 2016 and has gone on to establish himself as a key member of our midfield."
    },
    {
        "name":"Alexandre Lacazette",
        "number":"9",
        "Born":"May 28, 1991/Lyon, France",
        "Nation Teamr":"France",
        "Debut":"v Chelsea (n) Community Shield, August 6, 2017 (drew 1-1, won on penalties)",
        "desc":"With 17 goals in all competitions, Laca was our top scorer last season, bringing up his half century of Premier League goals in the win over Sheffield United in April 2021."
    },
    {
        "name":"Pierre-Emerick Aubameyang",
        "number":"14",
        "Born":"June 18, 1989/Laval, France",
        "Nation Teamr":"Gabon",
        "Debut":"v Everton (h), Premier League, February 3, 2018 (won 5-1)",
        "desc":"The leading scorer in the squad and club captain, Auba is one of the most prolific strikers in world football."
    },
    {
        "name":"Nicolas Pepe",
        "number":"19",
        "Born":"May 29, 1995/Mantes-la-Jolie, France",
        "Nation Teamr":"Gabon",
        "Debut":"-",
        "desc":"Winger Nicolas became our club-record signing after joining us from Ligue 1 club Lille in August 2019."
    },
    {
        "name":"Folarin Balogun",
        "number":"26",
        "Born":"July 3, 2001/New York, USA",
        "Nation Teamr":"England",
        "Debut":"-",
        "desc":"The pacey forward started 19 fixtures in our under-18s title-winning season, scoring an incredible 25 goals."
    },
    {
        "name":"Eddie Nketiah",
        "number":"30",
        "Born":"May 30, 1999/London",
        "Nation Teamr":"England",
        "Debut":"-",
        "desc":"After scoring 24 goals in consecutive seasons at youth level, Eddie made his mark on the first team in 2017/18, with a matchwinning brace during his home debut against Norwich City in the Carabao Cup."
    },
    {
        "name":"Gabriel Martinelli",
        "number":"35",
        "Born":"June 18, 2001/Guarulhos, Brazil",
        "Nation Teamr":"Brazil",
        "Debut":"-",
        "desc":"Brazilian forward Gabriel joined us from Ituano Futebal Clube on a long-term contract in July 2019, after scoring 10 goals in 34 appearances for the Sao Paulo-based club."
    },
    {
        "name":"Alex Runarsson",
        "number":"-",
        "Born":"-",
        "Nation Teamr":"Iceland",
        "Debut":"-",
        "desc":"Alex joined us on a four-year contract from French club Dijon in September 2020."
    },
    {
        "name":"Hector Bellerin",
        "number":"2",
        "Born":"March 19, 1995/Barcelona, Spain",
        "Nation Teamr":"Iceland",
        "Debut":"-",
        "desc":"Having previously played for Barcelona's youth teams, Hector joined us as a scholar in 2011"
    },
    {
        "name":"William Saliba",
        "number":"4",
        "Born":"March 24, 2001/Bondy, France",
        "Nation Teamr":"Iceland",
        "Debut":"-",
        "desc":"French defender William Saliba joined us from Saint-Etienne in July 2019."
    }];
const boxBtn = document.querySelectorAll(".playerBox");
const modalCont = document.querySelectorAll("#modal");
const Fname = document.querySelectorAll(".palyer_fname");
// const web_name = document.querySelectorAll(test[index].web_name);

// console.log(boxBtn);
let allPlayers = new Array();
let playerInfo = new Array();

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

};
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
;
}

// render 데이터
async function renderExam() {

    const exam = await fetchExam();
    console.log(exam);
    // document.write(exam.elements[0].team);

    dataP(exam);

};

function dataP(data1) {
    let data = data1.elements;
    allPlayers = data;
};

// 첫페이지 로딩
window.onload = function(){
    renderExam();
}

{
    const tabBtn = $(".position_btn span");     
    const tabCont = $("#playerWrap .role");   

    tabBtn.click(function(){
        let target = $(this);
        tabBtn.removeClass("active");
        target.addClass("active");

        let index = target.index() == 0 ? -1 : target.index()-1 ;
        //console.log(index)
        if(index == -1){
            // console.log(index);
            tabCont.css("display","none");
            tabCont.css("display","flex");
        } else {
            tabCont.css("display","none");
            // console.log();
            tabCont.eq(index).css("display","flex");
        }
        // tabCont.css("display","none");
        // tabCont.eq(index).css("display","block");
    });
}

boxBtn.forEach(element => {
    element.addEventListener("click", function(){
        const modalCont = document.querySelectorAll("#modal");
        let fname = element.querySelector(".palyer_fname").innerHTML;

            allPlayers.forEach(el => {
                if(el.web_name == fname) {
                    playerInfo[0] = el.goals_scored;
                    playerInfo[1] = el.assists;
                    playerInfo[2] = el.points_per_game;
                    playerInfo[3] = Math.round(el.creativity / 10);
                    playerInfo[4] = el.clean_sheets;
                    playerInfo[5] = el.saves;    
                    playerInfo[6] = el.yellow_cards;
                    playerInfo[7] = el.web_name + " " + el.first_name;
                    playerInfo[8] = el.photo;

                    // makeModalPage(el);4
                }
        }); 
    makeModalPage(arsenalPlayers, fname, playerInfo[8]);
    makeChart(playerInfo);
    document.querySelector("#modal").classList.add("show");
    document.querySelector("#modal").classList.remove("hide");
    });
});

{  
    function makeModalPage(playerInfo, playerName, img) {
        let photo = img;
            photo = photo.replace(/[^0-9]/g,'');
        playerInfo.forEach(el => {
            if (el.name.includes(playerName)){
                $(".profile_photo img").attr("src", "https://resources.premierleague.com/premierleague/photos/players/250x250/p"+photo+".png");
                document.querySelector(".profile_info > div:nth-child(1) .value").innerHTML = el.name;
                document.querySelector(".profile_info > div:nth-child(2) .value").innerHTML = el.number;
                document.querySelector(".profile_info > div:nth-child(3) .value").innerHTML = el.Born;
                document.querySelector(".profile_info > div:nth-child(4) .value").innerHTML = el.nation_teamr;
                document.querySelector(".profile_info > div:nth-child(5) .value").innerHTML = el.debut;
            }
        });

    }
}



//making chart
{
    function makeChart(playerInfo){
        let ctx = document.getElementById("myChart"); //캔버스 id값 가져오기
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
            datasets: [
                {
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3cba9f","#3e95cd"],
                data: [playerInfo[0],playerInfo[1],playerInfo[2],playerInfo[3],playerInfo[4],playerInfo[5],playerInfo[6]]
                }
            ]
        }
        // 차트 생성
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: data,
            options: {
                title: {
                    display: true,
                    text: "Seaseon 2021/22" + playerInfo[7]
                },
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            },
        });
    }
}
</script>