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
    #left{
        flex: 60%; 
        height: 100vh;
    }
    #right{
        flex: 40%;
        height: 100vh;
    }
    .title{
        display: block;
        width: 900px; height: 650px;
        border-radius: 30px;
        margin: auto; margin-top: 250px;
        background-color: white;
        box-shadow: -15px 15px 2px 3px blue;
        padding-left: 130px;
        font-size: 45px;
        font-family: indie flower;
        color: blue;
    }
    h1{
        padding-top: 130px;
        font-size: 100px;
        font-family: permanent marker;
        color: blue;
    }
    img{
        max-width: 1000px;
        margin-left: 200px; margin-top: 200px;
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
        margin: auto; margin-top: 100px;
        background-color: white;
        box-shadow: -10px 10px 2px 3px blue;
    }
    .btn:hover{
        background-color: blue;
        color: white;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #3967D8;
    }

    #lft, #rgt{
        flex: 50%;
        height: 10vh;
    }
</style>
<body>
    <div class="container">
        <div id="left">
            <div class="title">
                <h1>TRIVIAME</h1>
                <p>But Who's The smartest<br>in this trivia game?</p>
            </div>
        </div>
        <div id="right">
            <img src="img/nitendo.gif" alt="Nitendo Game">
            <div class="container">
                <div id="lft">
                    <input type="submit" class="btn" value="Start" onclick="sub()">
                </div>
                <div id="rgt">
                    <input type="button" class="btn" value="Scoreboard" onclick="sub1()">
                </div>
            </div>
        </div>
    </div>
</body>

<!--script here-->
<script>
    function sub(){
        localStorage.setItem("name", "");
        localStorage.setItem("level", "");
        localStorage.setItem("score", "0");
        localStorage.setItem("time", "");
        localStorage.setItem("categories", "");

        window.location.href = "instruction.php";
    }

    function sub1(){
        window.location.href = "scoreboard.php";
    }
</script>
</html>