<?php
require 'discordhook.php';

if(isset($_POST['msg'])) {
    
    $msg = $_POST['msg'];
    $url = "https://discordapp.com/api/webhooks/290833401890471936/OWl6Irt2lSOPIbIlrPZUQCFPv4bmotrsU4WHGeXLhkslMlhCABc-EvYJkv2xzNPpZXZg";
    DiscordHook::send(new Massage(new User($url, "IGTheBot", "http://www.solidbackgrounds.com/images/2560x1440/2560x1440-black-solid-color-background.jpg"), $msg));
    
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Discord Message Sender </title>
    </head>
    
    <style>
        
        body {
            padding: 40px;
            margin: 30px auto;
            box-shadow: 0 0 45px black;
            text-align: center;
            max-width: 700px;
        }
        
    </style>
    
    <body>
        
        <h1> Welcome! </h1>
        
        <form method="POST">
            <input type="text" name="msg" placeholder="Type a word and send!">
            <input type="submit">
        </form>
        
        <br>
        <br>
        
    <center>
        <button>
            <a href="https://discord.gg/szEWatY"> Join my Chat to test this script! </a>
        </button>
    </center>
    
    </body>
    
    <body>
        
        <br>
        <br>
        <br>
        
        <strong>
            &copy; All rights reserved RTG
        </strong>
        
    </body>
    
</html>