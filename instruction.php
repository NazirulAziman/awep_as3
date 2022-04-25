<!DOCTYPE html>
<html lang="en">
<head>
    <!--font family imported here-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!--external css here-->
    <link rel="stylesheet" href="css/all.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Internal css here-->
    <style>
        #left, #right{
            flex: 50%;
            height: 100vh;
        }
        #sLeft, #sRight{
            flex: 70%;
            height: 60vh;
        }
        #sRight{
            flex: 30%;
        }
        .instruction{
            display: block;
            width: 610px; height: 210px;
            border-radius: 30px;
            margin: auto; margin-top: 50px;
            background-color: white;
            box-shadow: -10px 10px 2px 3px blue;
        }
        #title{
            display: block;
            width: 700px; height: 370px;
            border-radius: 30px;
            margin: auto; margin-top: 100px;
            background-color: white;
            box-shadow: -15px 15px 2px 3px blue;
        }
        #txt{
            font-size: 90px;
            font-family: permanent marker;
            padding-left: 50px; padding-top: 50px;
            color: blue;
        }
        .insText{
            font-size: 35px;
            font-family: indie flower;
            color: blue; 
            padding-top: 20px;
            text-align: center;
        }
        .btn{
            display: block;
            width: 200px; height: 90px;
            border: none; border-radius: 30px;
            text-align: center;
            font-size: 36px;
            line-height: 100px;
            font-family: indie flower;
            font-weight: bold;
            color: blue;
            margin-left: 50px; margin-top: 450px;
            background-color: white;
            box-shadow: -10px 10px 2px 3px blue;
        }
        .btn:hover{
            background-color: blue;
            color: white;
            cursor: pointer;
            box-shadow: -10px 10px 2px 3px #3967D8;
        }
    </style>


</head>
<body>
    <div class="container">
        <div id="left">
            <div id="title">
                <h1 id="txt">HOW TO <br> PLAY?</h1>
                <div class="container" style="width: 800px;">
                    <div id="sLeft">
                        <img src="img/float.gif" alt="bmo floating" style="padding-top: 100px;">
                    </div>
                    <div id="sRight">
                        <form action="player.php" method="post">
                            <input type="submit" class="btn" value="Next >">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="right">
            <div class="instruction" style="margin-top: 80px;">
                <p class="insText">This game has 2 levels. Beginner <br> and advanced. Players may <br> choose any!</p>
            </div>
            <div class="instruction">
                <p class="insText">Each question only has one <br> correct answer. Wrong spelling <br> of answers doesn't count.</p>
            </div>
            <div class="instruction">
                <p class="insText">Players aren't allowed to ask <br> for help, and that includes <br> looking up answers online</p>
            </div>
            <div class="instruction">
                <p class="insText" style="padding-top: 60px;">The quiz is limited to<br> 1 minute per question</p>
            </div>
        </div>
    </div>
</body>
</html>