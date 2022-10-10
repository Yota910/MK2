<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Grade Pre-2 Reading Practice1</title>
        <style>
            body{background-color: #F0E68C;}
            .area{
                display: flex;
                margin-left: 650px; 
            }
            .do{
                font-size: 20px;
                background-color: white;
                margin-right: 20px;
            }
            .no{
                font-size: 20px;
                margin-right: 20px;
            }
            .question{
                font-size: 30px;
                margin-top: 200px;
            }
            .answer{
                margin: 0px 70px;
                font-size: 30px;
                color: white;
                background-color: black;
            }
            .answer:hover{
                cursor: pointer;
                color: white;
                background-color: gray;
            }
            .answer:active{
                color: white;
                background-color: silver;
            }
            .caution{
                font-size: 20px;
                color: red;
            }
            .select{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div class="area">
            <div class="no">1</div><div class="no">2</div><div class="no">3</div><div class="no">4</div>
            <div class="no">5</div><div class="no">6</div><div class="no">7</div><div class="no">8</div>
            <div class="no">9</div><div class="no">10</div><div class="no">11</div><div class="no">12</div>
            <div class="no">13</div><div class="no">14</div><div class="no">15</div><div class="no">16</div>
            <div class="no">17</div><div class="do">18</div><div class="no">19</div><div class="no">20</div>
        </div>
        <p class="question"><strong>(&emsp;&emsp;&emsp;) the train home last night, Amy remembered that it was her grandfather’s birthday. She went to a store by the station to buy a present for him.</strong></p>
        <div id="select_button" class="select">
            <button type="button" id="false1" class="answer">1. Ridden</button>
            <button type="button" id="false2" class="answer">2. Ride</button>
            <button type="button" id="false3" class="answer">3. Rode</button>
            <button type="button" id="true" class="answer">4. Riding</button>
            <p class="caution">※選択ボタンを押すと効果音が流れます。</p>
        </div>
        <img id="image_place">
        <a id="link_id" cursor="pointer"></a>
        <script type="text/javascript">
            var music1 = new Audio('../../music/true.mp3');
            var music2 = new Audio('../../music/false.mp3');
            document.getElementById("true").onclick = function() {
                music1.play();
                element=document.getElementById("select_button");
                element.innerHTML = "正解○";
                next_page = document.getElementById("link_id");
                next_page.href = "./index19.php"
                next_page.textContent = '次へ';
                document.getElementById("image_place").src = "../../picture/松岡修造.png";

                $("#select_button").css({
                    'color': 'red',
                    'font-size': '40px',
                    'text-align': 'center'
                });
                $("#image_place").css({
                    'width': '368px',
                    'height': '350px',
                    'display': 'inline-block',
                    'margin-left': '550px'
                });
                $("#link_id").css({
                    'text-decoration': 'none',
                    'background-color': 'black',
                    'color': 'white',
	                'border': '1px solid transparent',
                    'font-size': '40px',
                    'padding':'5px',
                    'margin-left': '200px'
                });
                $("#link_id").hover(
                    function() {
                        $(this).css('background-color', 'gray');
                        $(this).css('color', 'white');
                        $(this).css('border', '1px solid gray');
                    },
                    function() {
                        $(this).css('background-color', 'black');
                        $(this).css('color', 'white');
                        $(this).css('border', '1px solid transparent');
                    }
                );
            };

            document.getElementById("false1").onclick = function() {
                false_click();
            };
            document.getElementById("false2").onclick = function() {
                false_click();
            };
            document.getElementById("false3").onclick = function() {
                false_click();
            };

            function false_click(){
                music2.play();
                element=document.getElementById("select_button");
                element.innerHTML = "不正解×";
                next_page = document.getElementById("link_id");
                next_page.href = "./index19.php"
                next_page.textContent = '次へ';
                document.getElementById("image_place").src = "../../picture/泣くな.jpg";

                $("#select_button").css({
                    'color': 'blue',
                    'font-size': '40px',
                    'text-align': 'center'
                });
                $("#image_place").css({
                    'width': '431px',
                    'height': '350px',
                    'display': 'inline-block',
                    'margin-left': '510px'
                });
                $("#link_id").css({
                    'text-decoration': 'none',
                    'background-color': 'black',
                    'color': 'white',
	                'border': '1px solid transparent',
                    'font-size': '40px',
                    'padding':'5px',
                    'margin-left': '200px'
                });
                $("#link_id").hover(
                    function() {
                        $(this).css('background-color', 'gray');
                        $(this).css('color', 'white');
                        $(this).css('border', '1px solid gray');
                    },
                    function() {
                        $(this).css('background-color', 'black');
                        $(this).css('color', 'white');
                        $(this).css('border', '1px solid transparent');
                    }
                );
            }
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>