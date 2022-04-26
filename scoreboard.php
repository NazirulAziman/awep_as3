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
    .board{
        display: block;
        width: 1200px; height: 950px;
        border-radius: 30px;
        margin-left: 100px; margin-top: 50px;
        background-color: white;
        box-shadow: -15px 15px 2px 3px blue;
        padding-left: 30px;
        font-family: indie flower;
        font-size: 24px;
        color: blue;
    }
    #left, #right{
        flex: 60%;
        height: 100vh;
    }
    #right{
        flex: 40%;
    }
    #myPic{
        display: block;
        max-width: 700px;
        margin: auto; margin-top: 200px;
    }
    .btn{
        display: block;
        width: 300px; height: 90px;
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

    #myTable{
        width: 90%;
        font-size: 30px;
        font-family: arial narrow;
        border: 1px solid;
        border-collapse: collapse;
        text-align: left;
    }
    th{
        background-color: #F6EAB8;
    }
    th, td{
        border: 1px solid;
        padding: 8px;
    }
</style>
<body>
    <div class="container">
        <div id="left">
            <div class="board">
            <!--connect database for beginner-->
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'trivia');
              $query="SELECT * FROM players WHERE `level` = 'beginner' ORDER BY `score` DESC, `time` ASC LIMIT 5";
              $res = $conn -> query ($query);
            ?>
            <h1 style="padding-top: 20px;">Scoreboard (Beginner)</h1>
            <!--table for beginner-->
            <table id="myTable">
                <tr>
                    <th>Username</th>
                    <th>Score</th>
                    <th>Time (sec)</th>
                    <th>Categories</th>
                </tr>
                <?php
                    if($res){
                        while ($row=$res -> fetch_assoc())
                    {
                ?>
                <tr>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["score"]; ?></td>
                    <td><?php echo $row["time"]; ?></td>
                    <td><?php echo $row["categories"]; ?></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
            
            <!--connect database for advanced-->
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'trivia');
              $query="SELECT * FROM players WHERE `level`= 'advanced' ORDER BY `score` DESC, `time` ASC LIMIT 5";
              $res = $conn -> query ($query);
            ?>
            <h1>Scoreboard (Advanced)</h1>
            <!--table for advanced-->
            <table id="myTable">
                <tr>
                    <th>Username</th>
                    <th>Score</th>
                    <th>Time (sec)</th>
                    <th>Categories</th>
                </tr>
                <?php
                    if($res){
                        while ($row=$res -> fetch_assoc())
                    {
                ?>
                <tr>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["score"]; ?></td>
                    <td><?php echo $row["time"]; ?></td>
                    <td><?php echo $row["categories"]; ?></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
            </div>
        </div>
        <div id="right">
            <img src="img/clap.gif" alt="firework" id="myPic">
            <form action="index.php" method="post">
                <input type="submit" class="btn" value="Home">
            </form>
        </div>
    </div>
</body>

</html>
