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
        border-radius: 50px;
        margin-left: 2000px; margin-top: 90px;
        background-color: blue;
        box-shadow: -15px 15px 2px 3px yellow;
        font-size: 50px;
        color: yellow;
    }
    #myBtn:hover{
        cursor: pointer;
    }

    #forName, #forLevel, #forScore, #forTime, #forCat{
      display: none;
    }
</style>
<body>
    <div id="title">
        <h1>Your score</h1>
    </div>
    <h1 id="myText"></h1>
    <h1 id="congrats"></h1>
    <form action="" method="post">
        <input type="text" id="forName" name="name">
        <input type="text" id="forLevel" name="level">
        <input type="text" id="forScore" name="score">
        <input type="text" id="forTime" name="time">
        <input type="text" id="forCat" name="cat">
        <input type="submit" id="myBtn" value="Save" name="submit">
    </form>


    <!--php mysql database here-->
    <?php
    //if submit button is clicked
    if(isset($_POST['submit'])){
        //create connection to trivia database
        $conn = mysqli_connect('localhost', 'root', '', 'trivia');

        //get input name and make it as variable
        $name = $_POST['name'];
        $score = $_POST['score'];
        $level = $_POST['level'];
        $time = $_POST['time'];
        $cat = $_POST['cat'];
        

        if(!empty($name)){
            //insert detail from localstorage to database
            $sql = "INSERT INTO players (`username`,`score`,`level`,`time`,`categories`)
                    VALUES ('$name','$score','$level','$time','$cat')";

            $result = mysqli_query($conn,$sql);
            header("refresh: 1; url=../../gameOver.php"); //this will redirect to gameOver page
        }
    }
    
    ?>
</body>

<!--script here-->
<script>
    finalScore = localStorage.getItem("score");
    username = localStorage.getItem("name");
    document.getElementById('myText').innerHTML = finalScore + " / 3";
    if(finalScore == "3"){
        document.getElementById('congrats').innerHTML = "Congratulations! " + username;
    }else if(finalScore == "2"){
        document.getElementById('congrats').innerHTML = "Not Bad! " + username;
    }else{
        document.getElementById('congrats').innerHTML = "Try Again! " + username;
    }

    //get item from localstorage
    var myName = localStorage.getItem("name");
    var myLevel = localStorage.getItem("level");
    var myScore = localStorage.getItem("score");
    var myTime = localStorage.getItem("time");
    var myCat = localStorage.getItem("categories");

    //display it to input field
    document.getElementById("forName").value = myName;
    document.getElementById("forLevel").value = myLevel;
    document.getElementById("forScore").value = myScore;
    document.getElementById("forTime").value = myTime;
    document.getElementById("forCat").value = myCat;
</script>



</html>