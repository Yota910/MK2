<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Grade Pre-2 Reading Practice1</title>
        <style>
            body{background-color: #F0E68C;}
            h1{
                font-size: 70px;
                text-align: center;
                margin-bottom: 30px;
            }
            a.reading{
                font-size: 30px;
                text-decoration:none;
                padding: 15px;
                color: white;
                background-color: #0000DD;
                border-radius:10px;
                margin-left: 205px;
            }
            a.reading:hover{
                color: white;
                background-color: #0000EE;
            }
            a.retry{
                font-size: 30px;
                text-decoration:none;
                padding: 15px;
                color: white;
                background-color: #00DD00;
                border-radius:10px;
                margin: 0px 100px 0px 100px;
            }
            a.retry:hover{
                color: white;
                background-color: #00EE00;
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
            .answer{
                font-size: 30px;
                padding: 15px;
                color: white;
                background-color: #DD0000;
                border-radius:10px;
                margin-top: 50px;
            }
            .answer:hover{
                color: white;
                background-color: #EE0000;
                cursor: pointer;
            }
            .red{
                text-align: center;
                display: block;
            }
            strong{color: red}
            .fast{
                width: 40%;
                padding: 30px 30px 30px 50px;
                margin-left: 40px;
                background: #ffebe9;
                border-top: solid 10px #ff7d6e;
                display: inline-block;
                vertical-align: top;
            }
            .second{
                width: 40%;
                padding:30px 30px 30px 50px;
                margin-left: 30px;
                background: #ffebe9;
                border-top: solid 10px #ff7d6e;
                display: inline-block;
            }
            li{
                padding: 10px 0;
            }
        </style>
    </head>
    <body>
        <h1>お疲れ様でした！！</h1>
        <a href="../home.php" class="reading">リーディングトップへ</a>
        <a href="./index1.php" class="retry">リトライ</a>
        <a href="../../home.php" class="home">ホームへ</a>
        <form action="check.php" method="post" class="red">
            <button type="submit" name="answer" class="answer">解答を表示 ↓</button>
        </form>
        <?php
        if(isset($_POST['answer'])){
            echo "
            <ol start='1' class='fast'>
                <li>Josh and Samantha wanted to do their homework together this weekend, but they could not find a time to meet. They decided to work (<strong>separately</strong>) and check their answers before class on Monday.</li>
                <li>Last Saturday, Pete and his family drove to the beach. In order to avoid the heavy (<strong>traffic</strong>) on the highway, they left early in the morning.</li>
                <li>A : I left my notebook somewhere. Do you have a (<strong>sheet</strong>) of paper I could use to take notes?<br>B : Yes. Here you are.</li>
                <li>Because William was gaining a lot of weight, his doctor (<strong>advised</strong>) him to start exercising and to eat healthier food.</li>
                <li>The teacher told the students to (<strong>arrange</strong>) their chairs in a circle so that they would all be able to see each other while they talked.</li>
                <li>Mike has lived in Seattle for two years. He enjoys living there, but he does not like the cool, rainy (<strong>climate</strong>).</li>
                <li>Ms. Kirshman was surprised at the large number of people who (<strong>attended</strong>) her lecture on gardening. There were almost no empty seats in the room.</li>
                <li>A : Brad, what (<strong>sort</strong>) of music do you usually listen to?<br>B : I like hip-hop, but I also listen to jazz.</li>
                <li>The street outside Lisa’s apartment building is very (<strong>narrow</strong>). It is only wide enough for one car, and trucks cannot enter at all.</li>
                <li>Everyone says that Kathy (<strong>resembles</strong>) her mother. They have the same large eyes and smile in the same way.</li>
            </ol>
            <ol start='11' class='second'>
                <li>A : Hello, Jane. Where are you? The movie will start soon.<br>B : Sorry, I’ll be there before (<strong>long</strong>). Please wait for me for five more minutes.</li>
                <li>Mark started playing a new video game. It was really exciting, so he played it all (<strong>through</strong>) the night. The next day, he was really tired.</li>
                <li>James asked his father to lend him the money to go on a trip with his friends. His father said it was (<strong>out of</strong>) the question and told James to get a part-time job instead.</li>
                <li>A : Let’s have a barbecue in the park.<br>B : No, that would be (<strong>against</strong>) the park’s rules. We can have one in our backyard, though.</li>
                <li>Sam studied for his math test every evening last weekend. His hard work (<strong>resulted in</strong>) a very good score on the test.</li>
                <li>Helen took someone else’s jacket (<strong>by mistake</strong>) when she left school. She went back later to return it.</li>
                <li>Reiko told her parents that she would call them as soon as she got to Vancouver, but she did not keep her (<strong>promise</strong>). Her parents were worried about her.</li>
                <li>(<strong>Riding</strong>) the train home last night, Amy remembered that it was her grandfather’s birthday. She went to a store by the station to buy a present for him.</li>
                <li>A : Have you read that book I lend you?<br>B : I’m still reading it, but I (<strong>will have finished</strong>) it by tomorrow morning. I’ll give it back to you then.</li>
                <li>Emily has three children and works every day, so she is very busy. She likes to watch TV (<strong>wherever</strong>) she has a chance to relax.</li>
            </ol>
            ";
        }
        ?>
    </body>
</html>
