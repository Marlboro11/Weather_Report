<!DOCTYPE HTML>
<?php
$time=htmlspecialchars($_GET["time"]);
$temp=htmlspecialchars($_GET["temp"]);
$humi=htmlspecialchars($_GET["humi"]);
$pm25=htmlspecialchars($_GET["pm25"]);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee:wght@400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira Sans Extra Condensed:wght@400&display=swap" rel="stylesheet">
    

    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        html{
 
            max-width: 100vw;
            max-height: 100vh;
            overflow: hidden;      
        }
       
        .topright {
            position: absolute;
            top: 8px;
            right: 16px;
            font-size: 18px;
        }


        .justify{
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        body {
            max-width: 100vw;
            max-height: 100vh;
            overflow: hidden;
            flex-direction: column;
            background: linear-gradient(-45deg, #371f53, #63458a, #837f87);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            flex-direction: column;
            overflow: visible;
            margin-bottom: 3rem;
        }

        .top {
            max-width: 50rem;
            animation: slam-in 0.4s forwards ease-in;
        }

        .bottom {
            position: absolute;
            max-width: 50rem;
            animation: slam-in 0.65s forwards ease-in;
        }

        .data {
            flex-direction: column;
        }

        @keyframes slam-in {
            0% {
                transform: scale(18);
            }
            60% {
                transform: scale(1);
            }
            80% {
                transform: scale(1.6);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes slide-in {
            0% {
                transform: translateY(50rem);
                opacity: 0;
            }
            50% {
                transform: translateY(50rem);
                opacity: 0;
            }
            100% {
                opacity: 1;
                transform: translateY(0rem);
            }
        }

        p {
            font-size: 2.0rem;
        }

        p:nth-child(1) {
            animation: slide-in 1s forwards ease-out;
        }

        p:nth-child(2) {
            animation: slide-in 1.2s forwards ease-out;
        }

        p:nth-child(3) {
            animation: slide-in 1.4s forwards ease-out;
        }
        
        p:nth-child(4) {
            animation: slide-in 1.6s forwards ease-out;
        }

        .units {
            font-size: 1.2rem;
            padding-left: 1rem;
        }

        .dht{
            font-size: 1.5rem;
            padding-inline: 1rem;
        }

    </style>
</head>


<body>
<section class="container justify">
    <img src="https://cdn.discordapp.com/attachments/557166230595698689/1088611560169148586/weather_only.png" alt="" class="top" >
    <img src="https://cdn.discordapp.com/attachments/557166230595698689/1088611560450162758/report_only.png" alt="" class="bottom" >

</section>
<section class="data justify">
    <p class="justify" style="font-family: Bungee">
        <img src="https://cdn.discordapp.com/attachments/520899392778010634/1088888119316725900/My_project.png" alt="" style="width:50px;height:70px;">
        <span class="dht">Time</span>
        <span id="time"><?=$time?></span>
        <sup class="units">Hours</sup>  
    </p>
    <p class="justify" style="font-family: Bungee">
        <img src="https://cdn.discordapp.com/attachments/520899392778010634/1088890137942970368/Screenshot_2023-03-24_111900-removebg-preview.png" alt="" style="width:75px;height:80px;">
        <span class="dht">Temperature</span>
        <span id="temperature"><?=$temp?></span>
        <sup class="units">&deg;C</sup>
    </p>
    <p class="justify" style="font-family: Bungee">
        <img src="https://cdn.discordapp.com/attachments/520899392778010634/1088896454573174924/image-removebg-preview.png" alt="" style="width:75px;height:80px;">
        <span class="dht">Humidity</span>
        <span id="humidity"><?=$humi?></span>
        <sup class="units">percent</sup>
    </p>
    <p class="justify" style="font-family: Bungee">
        <img src="https://cdn.discordapp.com/attachments/520899392778010634/1089564956858515487/image-removebg-preview_1.png" alt="" style="width:75px;height:80px;">
        <span class="dht">PM2.5</span>
        <span id="aqi"><?=$pm25?></span>
        <sup class="units">ug/m^3</sup>
    </p>
</section>
<section class="topright">
    <p style="font-family:Fira Sans Extra Condensed">
    <i class="fa-solid fa-location-dot" style="color: #e10e39;"></i>
    <span style="font-size: xx-large;">Pilani, RJ</span>
    </p>
</section>

</body>
</html>