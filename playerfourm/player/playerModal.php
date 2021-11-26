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

    <style>
    

    </style>
</head>
<body>

                <!--player-->
                
                <!--//player-->
                    <!-- modal -->
                    <div id="modal">
                        <div class="modal-bg">
                        <div class="modal-cont">
                            <div class="profile-view">
                                <div class="view-title">
                                    <button>X</button>
                                    <ul>
                                        <li><a href="#">Profile</a></li>
                                    </ul>
                                </div>
                                <div class="view-cont">
                                    <div class="profile_wrap">
                                        <div class="profile_photo"><img src="https://www.arsenal.com/sites/default/files/styles/player_featured_image_1045x658/public/images/Leno_1100x693.jpg?itok=aS6rMJUK" alt="Bernd Leno"></div>
                                        <div class="profile_ability"><canvas id="myChart" width="300" height="230"></canvas></div>
                                        <div class="profile_info">
                                            <div class="text-wrap">
                                                <div class="key">Name:</div>
                                                <div class="value">Bernd Leno</div>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="key">Number:</div>
                                                <div class="value">01</div>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="key">Born:</div>
                                                <div class="value">March 4, 1992/Bietighem-Bissingen, Germany</div>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="key">Nation Team:</div>
                                                <div class="value">Germany</div>
                                            </div>
                                            <div class="text-wrap">
                                                <div class="key">Debut:</div>
                                                <div class="value">Vorskla Poltava Europa League, September 20, 2018 (won 4-2)</div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <!-- //modal -->
    <!-- //contents -->

    <!-- script -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
    //function modal() {}
    document.querySelector(".playerBox").addEventListener("click", function(){

    });
    
    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");

        $("#myChart").remove();
        var canvasHtml = '<canvas id="myChart" width="300" height="230"></canvas>';

        $(".profile_ability").append(canvasHtml);
    });
    </script>
    <!-- //script -->
</body>
</html>