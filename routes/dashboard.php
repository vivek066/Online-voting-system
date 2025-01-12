<?php
session_start();
if(!isset($_SESSION['userdata'])){

    header ("location:../");
}

$userdata=$SESSION['userdata'];

?>

<html>
    <head>
        <title>Online Voting System</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <style>

            #backbtn{
                padding: 5px;
                border-radius: 5px;
                background-color: #3498db;
                color: white;
                font-size: 15px;
                float: left;
            }

            #logoutbtn{
                padding: 5px;
                border-radius: 5px;
                background-color: #3498db;
                color: white;
                font-size: 15px;
                float: right;
}

            }
        </style>

          <div id="mainsection">

          <div id= "headersection">
        <button id="backbtn" >Back</button>
        
        <button id="logoutbtn">Logout</button>
        <h1>Online Voting System</h1>
        </div>
        <hr>

        <div id="Profile">
            <img src="../uploads/" alt="">
        </div>


        <div id="Group"></div>


        </div>
        </body>
</html>