<!DOCTYPE html>
<html lang="en">
<head>
    <!--font family imported here-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!--External css here-->
    <link rel="stylesheet" href="css/all.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--Internal css here-->
<style>
    .level{
        display: block;
        width: 1100px; height: 300px;
        border-radius: 30px;
        margin: auto; margin-top: 100px;
        box-shadow: -15px 15px 2px 3px blue;
        background-color: white;
    }
    #txt{
        padding-top: 90px;
        font-size: 80px;
        text-align: center;
        font-family: permanent marker;
        color: blue;
    }
    #left, #right{
        flex: 50%;
        height: 62.5vh;
    }
    #beginner, #advanced{
        display: block;
        width: 550px; height: 110px;
        border-radius: 30px;
        margin: auto; margin-top: 150px;
        background-color: white;
        box-shadow: -10px 10px 2px 3px blue;
    }
    #beginner:hover{
        background-color: lightgreen;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #7BBF98;
    }
    #advanced:hover{
        background-color: orange;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #DFA86E;
    }
    .levelTxt{
        line-height: 120px;
        font-size: 60px;
        text-align: center;
        font-family: indie flower;
        color: blue;
    }
    #exit{
        display: block;
        width: 160px; height: 80px;
        border: none; border-radius: 30px;
        margin-left: 150px; margin-top: 300px;
        background-color: white;
        font-family: indie flower;
        font-weight: bold;
        line-height: 80px; font-size: 40px;
        box-shadow: -10px 10px 2px 3px blue;
    }
    #exit:hover{
        background-color: red;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #CC7F7F;
        color: white;
    }
</style>
<body>
    <div class="level">
        <h1 id="txt">CHOOSE YOUR LEVEL</h1>
    </div>
    
    <div class="container">
        <div id="left">
            <div id="beginner">
                <h1 class="levelTxt">Beginner</h1>
            </div>
            <form action="player.php" method="post">
                <input type="submit" id="exit" value="Quit" class="levelTxt">
            </form>
        </div>
        <div id="right">
            <div id="advanced">
                <h1 class="levelTxt">Advanced</h1>
            </div>
        </div>
    </div>
</body>
</html>