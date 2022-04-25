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
        width: 1500px; height: 700px;
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
        font-size: 45px;
        text-align: center;
        font-family: sans-serif;
        font-weight: bold;
        padding-top: 250px;
    }
    #myPic{
        display: none;
        position: absolute;
        max-width: 400px;
        top: 20px; left: 1000px;
    }
    .btn{
        display: none;
        width: 200px; height: 90px;
        border: none; border-radius: 30px;
        text-align: center;
        font-size: 36px;
        line-height: 100px;
        font-family: indie flower;
        font-weight: bold;
        color: yellow;
        margin: auto; margin-top: 100px;
        background-color: blue;
        box-shadow: -10px 10px 2px 3px yellow;
    }
    .btn:hover{
        background-color: blue;
        color: #E0B223;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #E0B223;
    }
    #answer{
        display: block;
        border: 4px solid white; border-radius: 30px;
        width: 500px; height: 50px;
        margin: auto;
        color: yellow; background-color: blue;
        font-size: 40px; text-align: center;
    }
</style>
<body>
    <!--starting-->
    <div class="qBox" id="question">
        <h2>Question 8</h2>
        <h1>Fill in the <br> blank</h1>
    </div>
    <div class="goBtn" id="button" onclick="start()">
        <p id="start">GO</p>
    </div>

    <!--final-->
    <form action="q9.php" method="post">
    <img src="../../img/fill.gif" alt="Magic rat" id="myPic">
    <div id="quest">
        <h3>______ is the strongest metal.</h3>
        <input type="text" id="answer">
        <p style="text-align: center">Answer List : <br> Tungsten / Iron / Aluminium / Copper / Steel</p>
    </div>
        <input type="submit" class="btn" value="Submit" id="submit" onclick="sub()">
    </form>
</body>

<!-- Script here -->
<script>
    function start(){
        //starting
        document.getElementById("question").style.display = "none";
        document.getElementById("button").style.display = "none";

        //final
        document.getElementById("myPic").style.display = "block";
        document.getElementById("quest").style.display = "block";
        document.getElementById("submit").style.display = "block";
    }


    function sub(){
        var input = document.getElementById("answer"); //get id
        var exist = localStorage.getItem("score");

        if(input.value == "Tungsten" || input.value == "tungsten"){
            var final = parseInt(exist)+1; //add
        }else{
            var final = parseInt(exist)+0; //add
        }
        
        localStorage.setItem("score", final); //save the value input
        window.location.href="q9.php"; //to next page
    }
</script>
</html>