<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Grade Pre-2 Writing Practice1</title>
        <style>
            body{
                background-color: #F0E68C;
                margin: 0px;
            }
            .number{
                display: inline;
                text-align:left;
                margin-left: 50px;
            }
            .top{
                margin-top: 20px;
            }
            a.writing{
                font-size: 30px;
                text-decoration:none;
                padding: 15px;
                color: white;
                background-color: #0000DD;
                border-radius:10px;
                margin-left: 500px;
            }
            a.writing:hover{
                color: white;
                background-color: #0000EE;
            }
            a.home{
                font-size: 30px;
                text-decoration:none;
                padding: 15px;
                color: white;
                background-color: #AAAAAA;
                border-radius:10px;
                margin-left: 100px;
            }
            a.home:hover{
                color: white;
                background-color: #BBBBBB;
            }
            .explanation{
                background-image: url("./write.jpg");
                background-repeat: no-repeat;
                background-position: 0% 50%;
                padding-bottom: 30px;
            }
            h2{
                padding: 50px 0px 0px 80px;
                color: white;
            }
            ul{
                margin-left: 80px;
                color: white; 
            }
            li{
                padding-bottom: 5px;
            }
            h1{
                text-align: center;
                margin: 100px 0px 50px 0px;
            }
            form{
                text-align: center;
            }
            textarea{
                font-size: 20px;
                margin-bottom: -20px;
            }
            .counter{
                margin-left: 470px;
            }
            .remain{
                color: green;
            }
            .over{
                color: red;
            }
            .submit{
                font-size: 20px;
                padding: 5px 10px;
                color: white;
                background-color: black;
            }
            .submit:hover{
                cursor: pointer;
                color: white;
                background-color: gray;
            }
            .submit:active{
                color: white;
                background-color: silver;
            }
            .example{
                margin-top: 50px;
                text-align: center;
            }
            .answer{
                font-size: 25px;
                padding: 10px;
                color: white;
                background-color: #DD0000;
                border-radius:10px;
            }
            .answer:hover{
                color: white;
                background-color: #EE0000;
                cursor: pointer;
            }
            .position{
                padding: 20px 20px 20px 20px;
                background: #ffebe9;
                border-top: solid 10px #ff7d6e;
                width:54%;
                margin-right: auto;
                margin-left: auto;
            }
            .center{
                text-align: center;
            }
            .red{
                color: red;
            }
            .green{
                color: green;
            }
        </style>
    </head>
    <body>
        <div class="top">
            <h1 class="number">Practice1</h1>
            <a href="./home.php" class="writing">ライティングトップへ</a>
            <a href="../home.php" class="home">ホームへ</a>
        </div>
        <div class="explanation">
            <h2>Writingについて</h2>
            <ul>
                <li>QUESTIONについて、あなたの意見とその<strong>理由を2つ</strong>英文で下のテキストボックスに入力しなさい。</li>
                <li>「送信」のボタンを押すと、入力した英文が自動的に送信されます。</li>
                <li>解答がQUESTIONに適していない場合は、<strong>0点になることがあります。</strong></li>
                <li>QUESTIONをよく読んでから答えてください。</li>
            </ul>
        </div>
        <h1><strong>Do you think it is better for students to study alone or in a group?<strong></h1>
        <form action="index1.php" method="POST">
            <textarea cols="50" rows="10" id="sentence" value="" onKeyup="count_length();"></textarea>
            <p id="count" class="counter">現在0語</p>
            <input type="submit" value="送信" class="submit">
        </form>
        <div class="example">
            <button type="button" id="answer" class="answer" onclick= "answer();">解答例を表示/非表示 ↓</button>
        </div>
        <p id="output"></p>
        <script type="text/javascript">
            var counter = 0;
            document.getElementById("output").style.display ="none";
            function count_length() {
                word = document.getElementById("sentence").value;
                ary = word.split(" ");
                counter = document.getElementById("count");
                if(ary.length < 50){
                    counter.innerHTML = "現在"+ary.length+"語 <span class='remain'>あと"+(50-ary.length)+"語</span>";
                }
                else if(ary.length>=50 && ary.length<=60){
                    counter.innerHTML = "現在"+ary.length+"語";
                }
                else{
                    counter.innerHTML = "<span class='over'>※60語充足</span>";
                }
            }
            function answer() {
                if(output.style.display == "none"){
                    element = document.getElementById("output");
                    element.innerHTML = "<div class='position'><span class='red'><p class='center'><解答例></p>I think studying alone is better.<br>This is because students can focus on their own work.<br>If they study with their friends, they often talk about other things.<br>Also, it can save a lot of time.<br>They can study on the bus or on the train when they go to school.<br></span><span class='green'><p class='center'><コツ></p>▲１行目はI think ○○ better と答える。<br>△次に理由を示すが、I have two reasons. と始めてもよい。<br>▲結びの言葉としては、This is why （こういうわけで）を使用するとよい。<br>△文の構成は< ①opinion → ②1st reason →　③2nd reason →　④closing >にするとよい。<br>▲短縮形（例　won’t = will not ）を使い分けるとよい。</span></div>";
                    output.style.display ="block";
                }
                else{
                    output.style.display ="none";
                }
            }
        </script>
    </body>
</html>