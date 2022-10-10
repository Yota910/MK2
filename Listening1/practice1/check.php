<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Grade Pre-2 Listening Practice1</title>
        <style>
            body{background-color: #F0E68C;}
            h1{
                font-size: 70px;
                text-align: center;
                margin-bottom: 30px;
            }
            a.listening{
                font-size: 30px;
                text-decoration:none;
                padding: 15px;
                color: white;
                background-color: #0000DD;
                border-radius:10px;
                margin-left: 225px;
            }
            a.listening:hover{
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
            ul{
                list-style: none;
            }
            strong{color: red}
            .listen{
                text-align:center;
            }
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
            .question{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <h1>お疲れ様でした！！</h1>
        <a href="../home.php" class="listening">リスニングトップへ</a>
        <a href="./index1.php" class="retry">リトライ</a>
        <a href="../../home.php" class="home">ホームへ</a>
        <form action="check.php" method="post" class="red">
            <button type="submit" name="answer" class="answer">解答を表示 ↓</button>
        </form>
        <?php
        if(isset($_POST['answer'])){
            echo "
            <div class='fast'>
                <p>No.1</p>
                <p>★=男性　☆=女性</p>
                <ul>
                    <li>☆ Honey, I'm home.</li>
                    <li>★ Welcome back. Did you have a good day?</li>
                    <li>☆ Yeah, but I left my umbrella at work and it rained on the way home. I'm completely wet.</li>
                </ul>
                <ul>
                    <li>★ 1. Hmm. That's not your umbrella.</li>
                    <li>★ 2. Sure, I'll drive you to the station.</li>
                    <li><strong>★ 3. Well, you should take a hot bath.</strong></li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.1.mp3' class='audio' controls></audio>
                </div>
                <p>No.2</p>
                <ul>
                    <li>★ Claire, I heard you started teaching part time at a high school.</li>
                    <li>☆ Yes, I did. My students seem really nice.</li>
                    <li>★ What subjects are you teaching?</li>
                </ul>
                <ul>
                    <li><strong>☆ 1. Mostly math and science.</strong></li>
                    <li>☆ 2. There are 20 students in all.</li>
                    <li>☆ 3. It's actually a junior high school.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.2.mp3' class='audio' controls></audio>
                </div>
                <p>No.3</p>
                <ul>
                    <li>★ What should we do our presentation about,Denise?</li>
                    <li>☆ Well, we're supposed to do something about Asian history, right?</li>
                    <li>★ Yeah, that's what Professor Thompson said.</li>
                </ul>
                <ul>
                    <li><strong>☆ 1. Let's talk about the history of China.</strong></li>
                    <li>☆ 2. Well, I finished my presentation already.</li>
                    <li>☆ 3. Hmm. I don't know much about France.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.3.mp3' class='audio' controls></audio>
                </div
                <p>No.4</p>
                <ul>
                    <li>★ What's that, Amy?</li>
                    <li>☆ It's called a didgeridoo. It's a musical instrument from Australia. My dad bought it for me last week on a business trip.</li>
                    <li>★ Oh. Can you play any songs?</li>
                </ul>
                <ul>
                    <li>☆ 1. Sorry, I've never been to Australia.</li>
                    <li><strong>☆ 2. Sorry, I'm still learning how to play it.</strong></li>
                    <li>☆ 3. Sorry, I'll be away next week.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.4.mp3' class='audio' controls></audio>
                </div>
                <p>No.5</p>
                <ul>
                    <li>★ Hello.</li>
                    <li>☆ Hi, I'm Beth Peterson with Citywide Internet. Do you have high-speed Internet service at your home?</li>
                    <li>★ Yes, I do, so I'm not interested. Please don't call here again.</li>
                </ul>
                <ul>
                    <li>☆ 1. OK. I'll try again tomorrow morning.</li>
                    <li>☆ 2. OK. But you should get Internet service.</li>
                    <li><strong>☆ 3. OK. Sorry to bother you, sir.</strong></li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.5.mp3' class='audio' controls></audio>
                </div>
                <p>No.6</p>
                <ul>
                    <li>★ Ma'am, you can't leave your bike here.</li>
                    <li>☆ But I was just going to go into the store for a minute.</li>
                    <li>★ Sorry, no bike parking allowed.</li>
                </ul>
                <ul>
                    <li>☆ 1. Well, I'm not doing any shopping.</li>
                    <li>☆ 2. Great, I'll be done in 10 minutes.</li>
                    <li><strong>☆ 3. OK. I'll put it somewhere else.</strong></li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.6.mp3' class='audio' controls></audio>
                </div>
                <p>No.7</p>
                <ul>
                    <li>☆ Can you help me? I'm trying to find Gate 77.</li>
                    <li>★ That gate's on the other side of the airport.</li>
                    <li>☆ Oh no. Can I get there in 15 minutes?</li>
                </ul>
                <ul>
                    <li><strong>★ 1. Well, you might be able to if you hurry.</strong></li>
                    <li>★ 2. Hmm. I don't know where that is.</li>
                    <li>★ 3. No, that fight was canceled.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.7.mp3' class='audio' controls></audio>
                </div>
                <p>No.8</p>
                <ul>
                    <li>☆ Dad, what are you making for dinner?</li>
                    <li>★ I'm making chicken soup.</li>
                    <li>☆ Mmm. I love chicken soup. Can I help?</li>
                </ul>
                <ul>
                    <li>★ 1. Yes, you made dinner last night.</li>
                    <li><strong>★ 2. Yes, you can chop those carrots.</strong></li>
                    <li>★ 3. Yes, I already finished cooking.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.8.mp3' class='audio' controls></audio>
                </div>
                <p>No.9</p>
                <ul>
                    <li>★ Hello, ma'am. Welcome to Fazzio's Italian Grill. Do you have a reservation?</li>
                    <li>☆ I don't. I didn't know I needed one.</li>
                    <li>★ Well, without a reservation, it's about a 20-minute wait.</li>
                </ul>
                <ul>
                    <li><strong>☆ 1. That's OK. I don't mind waiting.</strong></li>
                    <li>☆ 2. Great. I'll have the seafood salad.</li>
                    <li>☆ 3. No problem. The table by the window is perfect.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.9.mp3' class='audio' controls></audio>
                </div>
                <p>No.10</p>
                <ul>
                    <li>☆ Hello. Chang residence.</li>
                    <li>★ Hi, Mrs.Chang. This is Dan Foster from Emily's math class. Can I talk to her?</li>
                    <li>☆ Emily hasn't come home yet. She has piano practice until 8 p.m.</li>
                </ul>
                <ul>
                    <li>★ 1. No, you don't have to wake her.</li>
                    <li><strong>★ 2. OK. I'll call back later, then.</strong></li>
                    <li>★ 3. Well, I hope she feels better.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.10.mp3' class='audio' controls></audio>
                </div>
            </div>
            <div class='second'>
                <p>No.11</p>
                <p>★=男性　☆=女性</p>
                <ul>
                    <li>★ Honey, do you have any ideas for our summer vacation?</li>
                    <li>☆ Why don't we drive to California?</li>
                    <li>★ That's too far. I can only take four days off. What about going camping by the lake?</li>
                    <li>☆ We did that last fall. I want to do something different.</li>
                </ul>
                <p class='question'><b>Question : What are the man and woman talking about?</b></p>
                <ul>
                    <li>1. When to buy camping goods.</li>
                    <li>2. Where to stay in California.</li>
                    <li><strong>3. What to do this summer.</strong></li>
                    <li>4. Whether to sell their car.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.11.mp3' class='audio' controls></audio>
                </div>
                <p>No.12</p>
                <ul>
                    <li>★ Excuse me, you seem to be lost. Can I help you?</li>
                    <li>☆ Yes, I'm looking for the police station.</li>
                    <li>★ It's just around that corner, next to the movie theater.</li>
                    <li>☆ Oh, I see. Thank you very much.</li>
                </ul>
                <p class='question'><b>Question : What does the woman want to do?</b></p>
                <ul>
                    <li>1. Help the man.</li>
                    <li>2. Go to the theater.</li>
                    <li>3. Watch a movie.</li>
                    <li><strong>4. Find the police station.</strong></li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.12.mp3' class='audio' controls></audio>
                </div>
                <p>No.13</p>
                <ul>
                    <li>★ Mom, I want to join the tennis team. Would you buy me a racket?</li>
                    <li>☆ A tennis racket? No, Bobby, you just joined the soccer club. We bought you a pair of expensive soccer shoes.</li>
                    <li>★ But I'm not sure if I like soccer that much.</li>
                    <li>☆ Well, we're not buying a tennis racket. Play soccer for a few months to see if you really like it or not.</li>
                </ul>
                <p class='question'><b>Question : Why won't the woman buy her son a tennis racket?</b></p>
                <ul>
                    <li>1. She wants him to buy his own.</li>
                    <li><strong>2. She wants him to keep playing soccer.</strong></li>
                    <li>3. She thinks he needs a new pair of soccer shoes.</li>
                    <li>4. She thinks he should use his old one.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.13.mp3' class='audio' controls></audio>
                </div>
                <p>No.14</p>
                <ul>
                    <li>☆ Hi, Jason. You look tired. Were you up late working on your history paper?</li>
                    <li>★ Yeah. The Internet at my house wasn't working yesterday, so I had trouble finding the information I needed.</li>
                    <li>☆ So you went to the library?</li>
                    <li>★ I didn't need to. I found some of my dad's old books from college and used those.</li>
                </ul>
                <p class='question'><b>Question : How did the boy find information for his paper?</b></p>
                <ul>
                    <li>1. He found a useful website.</li>
                    <li>2. He called the library for help.</li>
                    <li>3. He borrowed some new magazines.</li>
                    <li><strong>4. He used some old books.</strong></li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.14.mp3' class='audio' controls></audio>
                </div>
                <p>No.15</p>
                <ul>
                    <li>★ Hello. Andrew Farmer.</li>
                    <li>☆ Hello, Mr. Farmer. This is Dr. Clark's office. We were expecting you 30 minutes ago for your dental appointment.</li>
                    <li>★ Sorry about that. I had a problem with my car, but I'm on my way now. I'll be there in 10 minutes.</li>
                    <li>☆ I see. I'm afraid you may have to wait, though.</li>
                </ul>
                <p class='question'><b>Question : Why did the woman call the man?</b></p>
                <ul>
                    <li>1. To tell him his car is fixed.</li>
                    <li>2. To tell him the dentist is sick.</li>
                    <li>3. To ask if he can work overtime.</li>
                    <li><strong>4. To ask why he is late.</strong></li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.15.mp3' class='audio' controls></audio>
                </div>
                <p>No.16</p>
                <ul>
                    <li>☆ I'm sorry, sir. You're not allowed to take pictures in this art gallery.</li>
                    <li>★ Actually. I'm a writer from Art Today magazine, and I was asked to take these pictures. I have a letter from the gallery's director.</li>
                    <li>☆ May I see it?</li>
                    <li>★ Of course. I have it right here in my bag.</li>
                </ul>
                <p class='question'><b>Question : What will the man do next?</b></p>
                <ul>
                    <li>1. Get his camera fixed.</li>
                    <li><strong>2. Show the woman a letter.</strong></li>
                    <li>3. Meet the gallery's director.</li>
                    <li>4. Buy a copy of Art Today magazine.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.16.mp3' class='audio' controls></audio>
                </div>
                <p>No.17</p>
                <ul>
                    <li>☆ Eddie, when do you want to go out for lunch?</li>
                    <li>★ Anytime you're ready.</li>
                    <li>☆ Let's go now, if that's OK. I have a meeting at one thirty.</li>
                    <li>★ In that case, we'd better go someplace close. You only have 50 minutes.</li>
                </ul>
                <p class='question'><b>Question : What does the man suggest he and the woman do?</b></p>
                <ul>
                    <li><strong>1. Eat at a nearby restaurant.</strong></li>
                    <li>2. Attend their meeting together.</li>
                    <li>3. Have lunch at 1:30.</li>
                    <li>4. Call their office</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.17.mp3' class='audio' controls></audio>
                </div>
                <p>No.18</p>
                <ul>
                    <li>☆ Dad, taste this. It's a new pasta sauce recipe from a cookbook that I just bought.</li>
                    <li>★ Mmm. That's not bad. It might need some more salt and pepper, though.</li>
                    <li>☆ Oh no. I'll never be a famous chef if I can't even follow a simple recipe.</li>
                    <li>★ It's OK, Annie. You just started cooking this year. It will take you a while to get good at it.</li>
                </ul>
                <p class='question'><b>Question : What is one thing we learn about the girl?</b></p>
                <ul>
                    <li>1. She has never cooked before.</li>
                    <li>2. She does not like spaghetti.</li>
                    <li><strong>3. She is learning how to cook.</strong></li>
                    <li>4. She is writing a cookbook.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.18.mp3' class='audio' controls></audio>
                </div>
                <p>No.19</p>
                <ul>
                    <li>★ Gingham Language School.</li>
                    <li>☆ Hello. I'm interested in taking Italian lessons for beginners.</li>
                    <li>★ Certainly, ma'am. Our beginner's class meets on Tuesday evenings. The teacher is very popular.</li>
                    <li>☆ Actually, I work late on Tuesday. I wanted to take a class on weekends. I'll try somewhere else.</li>
                </ul>
                <p class='question'><b>Question : What is the woman's problem?</b></p>
                <ul>
                    <li>1. She does not like her teacher.</li>
                    <li><strong>2. She cannot take the Tuesday class.</strong></li>
                    <li>3. She cannot find the language school.</li>
                    <li>4. She has forgotten how to speak Italian.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.19.mp3' class='audio' controls></audio>
                </div>
                <p>No.20</p>
                <ul>
                    <li>★ Good morning ma'am. Are you enjoying your stay here at the Bayside Hotel?</li>
                    <li>☆ Yes, thanks. But there's something wrong with the TV in my room.</li>
                    <li>★ I'll send someone to fix it right away.</li>
                    <li>☆ Please do. I want to watch a movie tonight.</li>
                </ul>
                <p class='question'><b>Question : What does the man say he will do for the woman?</b></p>
                <ul>
                    <li>1. Buy movie tickets.</li>
                    <li><strong>2. Send someone to fix the TV.</strong></li>
                    <li>3. Find a different hotel.</li>
                    <li>4. Help her check in.</li>
                </ul>
                <div class='listen'>
                    <audio src='../audio/No.20.mp3' class='audio' controls></audio>
                </div>
            </div>
            ";
        }
        ?>  
    </body>
</html>
