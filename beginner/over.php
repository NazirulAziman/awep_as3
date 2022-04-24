<!DOCTYPE html>
<html lang="en">
<head>
    <!--font family imported here-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!--external css here-->
    <link rel="stylesheet" href="../css/alt.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--internal css here-->
<style>
    #title{
        display: block;
        width: 900px; height: 250px;
        border-radius: 30px;
        margin: auto; margin-top: 80px;
        background-color: blue;
        box-shadow: -15px 15px 2px 3px yellow;
    }
    h1{
        font-size: 150px;
        font-family: arial narrow;
        text-align: center;
        color: yellow;
        padding-top: 30px;
        text-shadow: 0 0 5px blue, 0 0 8px blue;
    }
    #myText{
        font-family: tahoma;
    }
    #congrats{
        font-size: 80px;
        font-family: indie flower;
        color: blue;
        text-shadow: none;
    }
    #myBtn{
        display: block;
        width: 250px; height: 100px;
        border-radius: 30px;
        margin-left: 2000px; margin-top: 90px;
        background-color: blue;
        box-shadow: -15px 15px 2px 3px yellow;
        font-size: 50px;
        color: yellow;
    }
    #myBtn:hover{
        cursor: pointer;
    }
</style>
<body>
    <div id="title">
        <h1>Your score</h1>
    </div>
    <h1 id="myText"></h1>
    <h1 id="congrats"></h1>
    <input type="button" id="myBtn" onclick="sub()" value="Home">
</body>

<!--script here-->
<script>
    finalScore = localStorage.getItem("score");
    document.getElementById('myText').innerHTML = finalScore + " / 12";
    if(finalScore >= "12"){
        document.getElementById('congrats').innerHTML = "Congratulations!"
    }else{
        document.getElementById('congrats').innerHTML = "Oh no!"
    }

    function sub(){
        window.location.href = "../index.php";
    }
</script>
</html>