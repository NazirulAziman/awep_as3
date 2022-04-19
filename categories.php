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
</head>

<!--Internal css here-->
<style>
    #left, #right{
        flex: 80%;
        height: 35vh;
    }
    #right{
        flex: 20%;
    }
    #mLeft, #mRight{
        flex: 50%;
        height: 50vh;
    }
    #title{
        display: block;
        width: 1400px; height: 270px;
        border-radius: 30px;
        margin: auto; margin-top: 70px;
        background-color: white;
        box-shadow: -15px 15px 2px 3px blue;
    }
    #txt{
        font-size: 100px;
        font-family: permanent marker;
        text-align: center; padding-top: 70px;
        color: blue;
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
        margin-left: 50px; margin-top: 110px;
        background-color: white;
        box-shadow: -10px 10px 2px 3px blue;
    }
    .btn:hover{
        background-color: blue;
        color: white;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #3967D8;
    }
    .box{
        display: block;
        width: 850px; height: 300px;
        margin: auto;
    }
    #exit{
        display: block;
        width: 160px; height: 80px;
        border: none; border-radius: 30px;
        margin-left: 100px; margin-top: 20px;
        background-color: white;
        font-family: indie flower;
        font-weight: bold;
        color: blue;
        line-height: 80px; font-size: 40px;
        box-shadow: -10px 10px 2px 3px blue;
    }
    #exit:hover{
        background-color: red;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #CC7F7F;
        color: white;
    }
    .left, .right{
        flex: 60%;
        height: 25vh;
    }
    .left{
        flex: 40%;
    }
    .icon{
        max-width: 260px;
        margin: auto;
        padding-left: 90px;
    }
    .txtBox{
        display: block;
        width: 350px; height: 170px;
        border: none; border-radius: 30px;
        margin: auto; margin-top: 40px;
        background-color: white;
        font-family: indie flower;
        font-weight: bold;
        line-height: 80px; font-size: 40px;
        box-shadow: -10px 10px 2px 3px blue;
    }
    .txt{
        font-size: 50px;
        font-family: indie flower;
        text-align: center; padding-top: 50px;
        color: blue;
    }    
</style>
<body>
    <div class="container">
        <div id="left">
            <div id="title">
                <h1 id="txt">CATEGORIES SECTION</h1>
            </div>
        </div>
        <div id="right">
            <form action="player.php" method="post">
                <input type="submit" class="btn" value="Next >">
            </form>
        </div>
    </div>
    <div class="container">
        <div id="mLeft">
            <div class="box">
                <div class="container">
                    <div class="left">
                        <img src="img/spin.gif" alt="cat touch" class="icon">
                    </div>
                    <div class="right">
                        <div class="txtBox">
                            <p class="txt">YES / NO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="container">
                    <div class="left">
                        <img src="img/skate.gif" alt="cat blank" class="icon">
                    </div>
                    <div class="right">
                        <div class="txtBox">
                            <p class="txt" style="padding-top: 10px;">MUTIPLE <br> CHOICE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mRight">
            <div class="box">
                <div class="container">
                    <div class="left">
                        <img src="img/dance.gif" alt="owl stay" class="icon">
                    </div>
                    <div class="right">
                        <div class="txtBox">
                            <p class="txt" style="padding-top: 10px;">FILL IN THE <br> BLANKS</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="container">
                    <div class="left">
                        <img src="img/charge.gif" alt="owl greet" class="icon">
                    </div>
                    <div class="right">
                        <div class="txtBox">
                            <p class="txt">ENUMERATION</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="index.php" method="post">
        <input type="submit" id="exit" value="Quit" class="levelTxt">
    </form>
</body>
</html>