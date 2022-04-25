<!DOCTYPE html>
<html lang="en">
<head>
    <!--font family imported here-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!--external css here-->
    <link rel="stylesheet" href="../../css/alt.css">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--Internal css here-->
<style>
    .qBox{
        display: block;
        width: 900px; height: 600px;
        border: none; border-radius: 30px;
        font-size: 36px;
        line-height: 100px;
        font-family: indie flower;
        font-weight: bold;
        color: blue;
        margin: auto; margin-top: 200px;
        background-color: blue;
        box-shadow: -15px 15px 2px 3px yellow;
    }
    h2{
        font-size: 70px;
        color: white;
        font-family: patrick hand;
        padding-left: 60px; padding-top: 100px;
    }
    h1{
        font-size: 140px;
        color: yellow;
        font-family: garamond;
        padding-left: 60px;
    }
    .goBtn{
        display: block;
        width: 200px; height: 90px;
        border: none; border-radius: 30px;
        text-align: center;
        font-size: 36px;
        line-height: 100px;
        font-family: indie flower;
        font-weight: bold;
        color: blue;
        margin-left: 1850px; margin-top: 150px;
        background-color: blue;
        box-shadow: -10px 10px 2px 3px yellow;
    }
    .goBtn:hover{
        background-color: #115ECD;
        color: white;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #EBC864;
    }
    #start{
        font-size: 50px;
        color: white;
        text-align: center;
        font-family: indie flower;
    }
    #quest{
        display: none;;
        width: 1500px; height: 400px;
        border: none; border-radius: 30px;
        font-size: 36px;
        line-height: 100px;
        font-family: indie flower;
        font-weight: bold;
        color: blue;
        margin: auto; margin-top: 130px;
        background-color: yellow;
        box-shadow: -15px 15px 2px 3px blue;
    }
    h3{
        font-size: 60px;
        text-align: center;
        font-family: sans-serif;
        font-weight: bold;
        padding-top: 220px;
    }
    #myPic{
        display: none;
        position: absolute;
        max-width: 300px;
        top: 20px; left: 1050px;
    }
    #left, #right{
        flex: 50%;
        height: 55vh;
    }
    #first, #second, #third{
        display: none;
        width: 350px; height: 250px;
        border: none; border-radius: 30px;
        text-align: center;
        font-size: 100px;
        font-family: indie flower;
        font-weight: bold;
        margin: auto; margin-top: 180px;
        background-color: blue;
    }
    #first{
        box-shadow: -10px 10px 2px 3px lightgreen;
        color: lightgreen;
    }
    #second{
        box-shadow: -10px 10px 2px 3px pink;
        color: pink;
    }
    #third{
        box-shadow: -10px 10px 2px 3px cyan;
        color: cyan;
    }
    #first:hover, #second:hover, #third:hover{
        cursor: pointer;
        color: yellow;
    }
    .txt{
        padding-left: 0px;
        padding-top: 60px;
    }

    #stopwatch {
        display: none;
        font-size: 80px;
        position: absolute;
        bottom: 40%;
        left: 50%;
        color: black;
        transform: translate(-50%, -55%);
    }
</style>
<body>
    <!--starting-->
    <div class="qBox" id="question">
        <h2>Question 3</h2>
        <h1>Multiple <br> Choice</h1>
    </div>
    <div class="goBtn" id="button" onclick="start()">
        <p id="start">GO</p>
    </div>

    <!--final-->
    <img src="../../img/question2.gif" alt="olaf blank" id="myPic">
    <div id="quest">
        <h3>What sound does a cow make?</h3>
    </div>
    <div class="container" id="answer">
        <div id="left">
            <div id="first" onclick="first()">
                <p class="txt">Moo</p>
            </div>
        </div>
        <div id="center">
            <div id="second" onclick="sec()">
                <p class="txt">Oink</p>
            </div>
        </div>
        <div id="right">
            <div id="third" onclick="third()">
                <p class="txt">Meow</p>
            </div>
        </div>
    </div>
    <div id="stopwatch">
        00:00
    </div>
</body>

<!-- Script here -->
<script>
    //variable
    const timer = document.getElementById('stopwatch');
    var hr = 0;
    var min = 0;
    var sec = 0;
    var stoptime = true;
    var mins = localStorage.getItem("min");
    var secs = localStorage.getItem("sec");

    function start(){
        //starting
        document.getElementById("question").style.display = "none";
        document.getElementById("button").style.display = "none";

        //final
        document.getElementById("myPic").style.display = "block";
        document.getElementById("quest").style.display = "block";
        document.getElementById("first").style.display = "block";
        document.getElementById("second").style.display = "block";
        document.getElementById("third").style.display = "block";
        document.getElementById("stopwatch").style.display = "block";

        //start time
        if (stoptime == true) {
        stoptime = false;
        timerCycle();
        }

        //time
        setTimeout(function() {
            var exist = localStorage.getItem("score");
            var final = parseInt(exist)+0; //add
            localStorage.setItem("score", final); //save the value input
            stoptime = true; //time stopped when reach 1 min
            var seconds = parseInt(secs) + parseInt(sec);
            var minutes = parseInt(mins) + parseInt(min);
            localStorage.setItem("sec", seconds);
            localStorage.setItem("min", minutes);
            localStorage.setItem("time", minutes + " : " + seconds);
            window.location.href="q3.php"; //to next page
        },60000);
    }

    function first(){
        var input = document.getElementById("first"); //get id
        var exist = localStorage.getItem("score");
        var final = parseInt(exist)+1; //add
        localStorage.setItem("score", final); //save the value input
        var seconds = parseInt(secs) + parseInt(sec);
        var minutes = parseInt(mins) + parseInt(min);

        if (stoptime == false) {
            stoptime = true;
            localStorage.setItem("sec", seconds);
            localStorage.setItem("min", minutes);
            localStorage.setItem("time", minutes + " : " + seconds);
        }
        window.location.href="over.php"; //to next page
    }

    function sec(){
        var input = document.getElementById("second"); //get id
        var exist = localStorage.getItem("score");
        var final = parseInt(exist)+0; //add
        localStorage.setItem("score", final); //save the value input
        var seconds = parseInt(secs) + parseInt(sec);
        var minutes = parseInt(mins) + parseInt(min);

        if (stoptime == false) {
            stoptime = true;
            localStorage.setItem("sec", seconds);
            localStorage.setItem("min", minutes);
            localStorage.setItem("time", minutes + " : " + seconds);
        }
        window.location.href="over.php"; //to next page
    }

    function third(){
        var input = document.getElementById("third"); //get id
        var exist = localStorage.getItem("score");
        var final = parseInt(exist)+0; //add
        localStorage.setItem("score", final); //save the value input
        var seconds = parseInt(secs) + parseInt(sec);
        var minutes = parseInt(mins) + parseInt(min);

        if (stoptime == false) {
            stoptime = true;
            localStorage.setItem("sec", seconds);
            localStorage.setItem("min", minutes);
            localStorage.setItem("time", minutes + " : " + seconds);
        }
        window.location.href="over.php"; //to next page
    }

    //function for timer
    function timerCycle() {
        if (stoptime == false) {
        sec = parseInt(sec);
        min = parseInt(min);
        hr = parseInt(hr);

        sec = sec + 1;

        if (sec == 60) {
            min = min + 1;
            sec = 0;
        }

        if (sec < 10 || sec == 0) {
            sec = '0' + sec;
        }
        if (min < 10 || min == 0) {
            min = '0' + min;
        }
            timer.innerHTML = min + ':' + sec;

            setTimeout("timerCycle()", 1000);
        }
    }
</script>
</html>