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
        flex: 60%; height: 100vh;
    }
    #right{
        flex: 40%;
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
        margin-left: 500px;
        margin-top: 150px;
    }
    #ans1, #ans2, #ans3, #ans4, #ans5{
        display: block;
        width: 600px; height: 120px;
        border: none; border-radius: 30px;
        text-align: center;
        font-size: 36px;
        font-family: indie flower;
        font-weight: bold;
        color: blue;
        margin: auto; margin-top: 100px;
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
</style>
<body>
    <!--starting-->
    <div class="qBox" id="question">
        <h2>Question 11</h2>
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
                <p id="content">What are the 4 <br> elements of nature?</p>
            </div>
            <img src="../../img/pink.gif" alt="pink pokemon" id="img">
        </div>

        <div id="right">
            <input type="text" id="ans1" style="margin-top: 100px;" placeholder="Answer here">
            <input type="text" id="ans2" placeholder="Answer here">
            <input type="text" id="ans3" placeholder="Answer here">
            <input type="text" id="ans4" placeholder="Answer here">
            <input type="button" class="btn" value="Submit here" id="submit" onclick="sub()">
        </div>
    </div>
</body>

<!--script here-->
<script>
    function start(){
        //starting
        document.getElementById("question").style.display = "none";
        document.getElementById("button").style.display = "none";

        //final
        document.getElementById("myContainer").style.display = "flex";
    }

    function sub(){
        var input1 = document.getElementById("ans1");
        var input2 = document.getElementById("ans2");
        var input3 = document.getElementById("ans3");
        var input4 = document.getElementById("ans4");

        var exist = localStorage.getItem("score");

        var nature = ['earth', 'water', 'fire', 'air'];

        for(var i = 0; i < nature.length; i++){
            if(input1.value == nature[i] || input2.value == nature[i] || input3.value == nature[i] || input4.value == nature[i]){
                var final = parseInt(exist)+1; //add
            }else if(input1.value != nature[i] || input2.value != nature[i] || input3.value != nature[i] || input4.value != nature[i]){
                var final = parseInt(exist)+0; //add
            }else{
                var final = parseInt(exist)+0; //add
            }
        }

        localStorage.setItem("score", final); //save the value input
        window.location.href="q12.php"; //to next page
    }
</script>
</html>