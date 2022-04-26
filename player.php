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
<style>
    .player{
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
    #left{
        flex: 100%;
        height: 62.5vh;
    }
    #full{
        display: none;
        flex: 100%;
        height: 62.5vh;
    }
    #add, #choose{
        display: block;
        width: 550px; height: 110px;
        border-radius: 30px;
        margin: auto; margin-top: 150px;
        background-color: white;
        box-shadow: -10px 10px 2px 3px blue;
    }
    #add:hover{
        background-color: lightgreen;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #7BBF98;
    }
    #choose:hover{
        background-color: orange;
        cursor: pointer;
        box-shadow: -10px 10px 2px 3px #DFA86E;
    }
    .levelTxt{
        line-height: 120px;
        font-size: 50px;
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
    .insert{
        display: block;
        width: 1000px; height: 350px;
        margin: auto; margin-top: 250px;
    }
    #myInput{
        display: block;
        border: 4px solid; border-radius: 30px;
        width: 550px; height: 70px;
        margin: auto;
        color: black;
        font-size: 40px; text-align: center;
    }
    #save{
        display: block;
        width: 300px; height: 80px;
        border-radius: 30px;
        margin: auto; margin-top: 150px;
        background-color: white;
        box-shadow: -10px 10px 2px 3px blue;
        font-size: 40px;
        border: none; color: blue;
        font-family: indie flower; font-weight: bold;
    }
    #save:hover{
        cursor: pointer;
        color: orange;
    }
</style>
<body>
    <div class="player">
        <h1 id="txt">CHOOSE THE PLAYER</h1>
    </div>
    
    <div class="container">
        <div id="left">
            <div id="add" onclick="add()">
                <h1 class="levelTxt">Add new player</h1>
            </div>
            <form action="index.php" method="post">
                <input type="submit" id="exit" value="Quit" class="levelTxt">
            </form>
        </div>
        <div id="right">
            
        </div>
        <div id="full">
            <div class="insert">
                <input type="text" id="myInput" placeholder="Enter Name here">
                <input type="button" id="save" value="Submit" onclick="datasave()">
            </div>
            <div id="exit" onclick="back()">
                <h1 class="levelTxt" style="line-height: 90px; margin-top: 150px;">Back</h1>
            </div>
        </div>
    </div>
</body>


<!--Script here-->
<script>
    function add(){
        //starting
        document.getElementById("left").style.display = "none";
        document.getElementById("right").style.display = "none";

        //final
        document.getElementById("full").style.display = "block";
        
    }


    function back(){
        //starting
        document.getElementById("left").style.display = "block";
        document.getElementById("right").style.display = "block";

        //final
        document.getElementById("full").style.display = "none";
    }

    
    function datasave(){
        var input = document.getElementById("myInput"); //get id
        localStorage.setItem("name", input.value); //save the value input
        window.location.href="level.php"; //to next page
    }
</script>
</html>