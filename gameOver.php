<!DOCTYPE html>
<html lang="en">
<head>
    <!--font family imported here-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!--external css here-->
    <link rel="stylesheet" href="css/alt.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #myBox{
        display: block;
        width: 1000px; height: 850px;
        position: absolute;
        left: 30%; top: 15%;
        border-radius: 30px;
        background-color: blue;
        box-shadow: -15px 15px 2px 3px yellow;
    }
    #myPic{
        position: absolute;
        width: 500px; height: 500px;
        left: 50%; top: 40%;
    }
    p{
        font-size: 100px; padding-left: 40px;
        font-family: arial bold;
        color: yellow;
    }
    h1{
        font-size: 170px; padding-left: 50px;
        font-family: arial narrow;
        font-weight: bold;
        color: yellow;
    }
</style>
<body>
    <div id="myBox">
        <p>Thank You for playing</p>
        <h1>GAME <br> OVER </h1>
    </div>
    <img src="img/bye.gif" alt="cat paw" id="myPic">
</body>

<!--script here-->
<script>
    setTimeout(function(){
        window.location.href = "index.php";
    },5000) //redirect to index.php page for 5 seconds
</script>
</html>