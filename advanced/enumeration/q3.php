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
        color: brown;
        margin: auto; margin-top: 200px;
        background-color: pink;
        box-shadow: -15px 15px 2px 3px red;
    }
    h2{
        font-size: 70px;
        color: brown;
        font-family: patrick hand;
        padding-left: 60px; padding-top: 100px;
    }
    h1{
        font-size: 140px;
        color: red;
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
        color: brown;
        margin-left: 1850px; margin-top: 150px;
        background-color: pink;
        box-shadow: -10px 10px 2px 3px red;
    }
    .goBtn:hover{
        background-color: #FFD6D6;
        color: red;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #FF7171;
    }
    #start{
        font-size: 50px;
        color: brown;
        text-align: center;
        font-family: indie flower;
    }

    #myContainer{
        display: none;
    }

    #left, #right{
        flex: 50%; height: 100vh;
    }
    #title{
        display: block;
        width: 900px; height: 450px;
        border-radius: 30px;
        margin: auto; margin-top: 80px;
        background-color: pink;
        box-shadow: -15px 15px 2px 3px red;
    }
    #head{
        font-size: 80px;
        padding-top: 50px;
        font-family: permanent marker;
        text-align: center;
        font-weight: bold;
        color: red;
    }
    #content{
        font-size: 50px;
        font-family: indie flower;
        text-align: center;
        font-weight: bold;
        color: brown;
    }
    #img{
        display: block;
        width: 400px; height: 400px;
        margin-left: 400px;
        margin-top: 150px;
    }
    #ans1, #ans2, #ans3, #ans4, #ans5, #ans6, #ans7{
        display: block;
        width: 500px; height: 100px;
        border: none; border-radius: 30px;
        text-align: center;
        font-size: 36px;
        font-family: indie flower;
        font-weight: bold;
        color: blue;
        margin: auto; margin-top: 50px;
        background-color: pink;
        color: brown;
        box-shadow: -10px 10px 2px 3px red;
    }
    ::placeholder{
        color: red;
    }

    .btn{
        display: block;
        width: 400px; height: 90px;
        border: none; border-radius: 30px;
        text-align: center;
        font-size: 36px;
        line-height: 100px;
        font-family: indie flower;
        font-weight: bold;
        color: red;
        margin: auto; margin-top: 150px;
        background-color: pink;
        box-shadow: -10px 10px 2px 3px red;
    }
    .btn:hover{
        background-color: #FFD6D6;
        color: brown;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #FF7171;
    }
    #top, #mid, #bot{
        display: flex;
        flex: wrap;
        margin-top: 50px;
    }
    #lft, #rgt{
        flex: 30%;
        height: 10vh;
    }

    #stopwatch {
        display: none;
        font-size: 80px;
        font-family: indie flower;
        position: absolute;
        bottom: 0%;
        left: 50%;
        color: black;
        transform: translate(-50%, -55%);
    }
</style>
<body>
    <!--starting-->
    <div class="qBox" id="question">
        <h2>Question 3</h2>
        <h1>Enumeration</h1>
    </div>
    <div class="goBtn" id="button" onclick="start()">
        <p id="start">GO</p>
    </div>

    <!--final-->
    <div class="container" id="myContainer">
        <div id="left">
            <div id="title">
                <h1 id="head">ENUMERATION</h1>
                <p id="content">What are the 7 planets <br> on our solar system?</p>
            </div>
            <img src="../../img/pink.gif" alt="pink pokemon" id="img">
        </div>

        <div id="right">
            <div id="top">
                <div id="lft">
                    <input type="text" id="ans1" style="margin-top: 50px;" placeholder="Answer here">
                </div>
                <div id="rgt">
                    <input type="text" id="ans2" placeholder="Answer here">
                </div>
            </div>
            <div id="mid">
                <div id="lft">
                    <input type="text" id="ans3" placeholder="Answer here">
                </div>
                <div id="rgt">
                    <input type="text" id="ans4" placeholder="Answer here">
                </div>
            </div>
            <div id="bot">
                <div id="lft">
                    <input type="text" id="ans5" placeholder="Answer here">
                </div>
                <div id="rgt">
                    <input type="text" id="ans6" placeholder="Answer here">
                </div>
            </div>
            <input type="text" id="ans7" placeholder="Answer here" style="margin-top: 150px; width: 500px;">
            <input type="button" class="btn" value="Submit here" id="submit" onclick="sub()">
        </div>
    </div>
    <div id="stopwatch">
        00:00
    </div>
</body>

<!--script here-->
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
        document.getElementById("myContainer").style.display = "flex";
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
            localStorage.setItem("time", minutes + "min : " + seconds + "sec");
            window.location.href="over.php"; //to next page
        },60000);
    }

    function sub(){
        var input1 = document.getElementById("ans1");
        var input2 = document.getElementById("ans2");
        var input3 = document.getElementById("ans3");
        var input4 = document.getElementById("ans4");
        var input5 = document.getElementById("ans5");
        var input6 = document.getElementById("ans6");
        var input7 = document.getElementById("ans7");

        var exist = localStorage.getItem("score");

        var solar = ['mercury', 'venus', 'earth', 'mars', 'jupiter', 'saturn', 'uranus', 'neptune'];

        for(var i = 0; i < solar.length; i++){
            if(input1.value == solar[i] || input2.value == solar[i] || input3.value == solar[i] || input4.value == solar[i] || input5.value == solar[i] || input6.value == solar[i] || input7.value == solar[i]){
                var final = parseInt(exist)+1; //add
            }else if(input1.value != solar[i] || input2.value != solar[i] || input3.value != solar[i] || input4.value != solar[i] || input5.value != solar[i] || input6.value != solar[i] || input7.value != solar[i]){
                var final = parseInt(exist)+0; //add
            }else{
                var final = parseInt(exist)+0; //add
            }
        }

        localStorage.setItem("score", final); //save the value input
        var seconds = parseInt(secs) + parseInt(sec);
        var minutes = parseInt(mins) + parseInt(min);

        if (stoptime == false) {
            stoptime = true;
            localStorage.setItem("sec", seconds);
            localStorage.setItem("min", minutes);
            localStorage.setItem("time", minutes + "min : " + seconds + "sec");
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