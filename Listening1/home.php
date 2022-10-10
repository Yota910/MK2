<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Grade Pre-2 Listening Home Page</title>
        <style>
            body{
                background: linear-gradient(to right, #D0FF43, #F0E68C);
            }
            h1{
                font-size: 50px;
                text-align: center;
            }
            .back{
                width: 50em;
                height: 33em;
                background-color: #CCCCCC;
                border: 10px double black;
                border-radius: 10px;
                margin-left: auto;
                margin-right: auto;
            }
            a.practice:link{
                text-decoration: none;
                background-color: #DAA520;
                color: white;
                padding: 15px;
                border-radius: 5%;
                font-size: 30px;
                margin-left: 30px;
            }
            a.practice:visited{
                text-decoration: none;
                background-color: #DAA520;
                color: white;
                padding: 15px;
                border-radius: 5%;
                font-size: 30px;
                margin-left: 30px;
            }
            a.practice:hover{
                background-color: white;
                color: #DAA520;
                border: solid 2px #DAA520;
                text-decoration: underline;
                cursor:pointer;
            }
            .fast{
                position: fixed;
                top: 25%;
            }
            .second{
                position: fixed;
                top: 40%;
            }
            .third{
                position: fixed;
                top: 55%;
            }
            .fourth{
                position: fixed;
                top: 70%;
            }
            .vertical1{
                position: fixed;
                left: 25%;
            }
            .vertical2{
                position: fixed;
                left: 50%;
                transform: translateX(-50%);
            }
            .vertical3{
                position: fixed;
                left: 60%;
            }
            a.home{
                font-size: 30px;
                text-decoration:none;
                padding: 15px;
                color: white;
                background-color: #AAAAAA;
                border-radius:10px;
            }
            a.home:hover{
                color: white;
                background-color: #BBBBBB;
            }
            .home{
                position: fixed;
                top: 87%;
                left: 50%;
                transform: translateX(-50%);
            }
        </style>
    </head>
    <body>
        <h1>準2級 Listening</h1>
        <div class="back"></div>
        <div class="fast">
            <span class="vertical1"><a href="practice1/index1.php" class="practice">practice1</a></span>
            <span class="vertical2"><a href="practice2/index1.php" class="practice">practice2</a></span>
            <span class="vertical3"><a href="practice3/index1.php" class="practice">practice3</a></span>
        </div>
        <div class="second">
            <span class="vertical1"><a href="practice4/index1.php" class="practice">practice4</a></span>
            <span class="vertical2"><a href="practice5/index1.php" class="practice">practice5</a></span>
            <span class="vertical3"><a href="practice6/index1.php" class="practice">practice6</a></span>
        </div>
        <div class="third">
            <span class="vertical1"><a href="practice7/index1.php" class="practice">practice7</a></span>
            <span class="vertical2"><a href="practice8/index1.php" class="practice">practice8</a></span>
            <span class="vertical3"><a href="practice9/index1.php" class="practice">practice9</a></span>
        </div>
        <div class="fourth">
            <span class="vertical1"><a href="practice10/index1.php" class="practice">practice10</a></span>
        </div>
        <div class="top">
            <a href="../home.php" class="home">ホームへ</a>
        </div>
    </body>
</html>