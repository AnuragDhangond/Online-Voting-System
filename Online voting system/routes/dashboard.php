<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
?>

<html>
    <head>
        <title>Online Voting System - Dashboard</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    
        <style>
            #backbtn{
                padding: 10px;
                border-radius: 5px;
                background-color: #48dbfb;
                color: azure;
                font-size: 15px;
                float: left;
            }

            #logoutbtn{
                padding: 10px;
                border-radius: 5px;
                background-color: #48dbfb;
                color: azure;
                font-size: 15px;
                float: right;
            }

        </style>
        <div id="headersection">    
            <button id="backbtn">Back</button>
            <button id="logoutbtn">Logout</button>
            <h1>Online Voting System</h1>
        </div>
        <hr>
        <div id="Profile"></div>
        </div>
        <div id="Group"></div>
    </body>
</html>