<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZiZi</title>
    <link rel="icon" href="Pictures/Z.png">
    <style>
        html {
            background-image: url(./Pictures/Background\ .jpg);
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        nav {
            display: flex;
            align-items: center;
            padding: 1px 1px;
            background-color: rgb(0, 0, 0, .8);
            border-radius: 10px;
        }

        .z-icon {
            width: 100px;
            height: 60px;
        }

        ul {
            display: flex;
            list-style-type: none;
            margin: 0px;
            padding: 0px;
        }

        li {
            margin: 0px;
            padding: 0px;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            text-decoration: underline;
            background-color: rgb(0, 0, 0, .8);
            border: solid 1px white;
            border-radius: 10px;
        }

        .highlight{
            background-color: rgb(0, 0, 0, .8);
            border: solid 1px white;
            border-radius: 10px;
        }

        .cont1{
            float: right;
            margin-top: 90px;
            margin-right: 550px;
            width: 500px;
            height: 300px;
            padding: 1px;
            background-color: rgb(0, 0, 0, .8);
            border-radius: 10px;
            text-align: center;
            border: 1px solid white;
        }

        .cont2{
            float: right;
            margin-top: 110px;
            margin-right: 550px;
            width: 500px;
            height: 250px;
            padding: 1px;
            background-color: rgb(0, 0, 0, .8);
            border-radius: 10px;
            text-align: center;
            border: 1px solid white;
        }

        .cont3{
            float: left;
            margin-top: -180px;
            margin-left: 200px;
            width: 500px;
            height: 500px;
            padding: 1px;
            background-color: rgb(0, 0, 0, .8);
            border-radius: 10px;
            text-align: center;
            border: 1px solid white;
        }

        .underline{
            border-bottom:1px solid white;
            margin-left: 50px;
            width:400px;
            padding-bottom:5px;
        }

        button{
            width: 200px;
            height: 50px;
            background-color: black;
            color: white;
            border: solid 1px white;
            border-radius:15px;
        }

        button:hover{
            width: 200px;
            height: 50px;
            background-color: #242424;
            color: white;
            border: solid 1px white;
            border-radius:15px;
        }

        .cont1 p{
            display: inline-block;
            text-align: justify;
            word-spacing: 3px;
            font-size: 20px;
            line-height: 1.6;
            padding-left: 10px;
            padding-right: 10px;
        }
        .cont3 p{
            display: inline-block;
            text-align: justify;
            word-spacing: 5px;
            font-size: 20px;
            line-height: 1.6;
            padding-left: 10px;
            padding-right: 10px;
        }

        .space-left{
            margin-left: auto;
            margin-right:15px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="./home.php">
            <img class="z-icon" src="./Pictures/Z.png" alt="ZiZi Icon">
        </a>
        <ul>
            <li><a href="./home.php">About</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="space-left">
            <li><a href="./login.php">Login |</a> </li>
            <li><a class="highlight" href="./register.php">Register</a></li>
        </ul>
    </nav>
    <div class="cont1"><h1>Welcome to<br>ZiZi<div class="underline"></div></h1><p>Connect, chat and share your world seamlessly with friends and communities.</p></div>
    <div class="cont2"><h1>Ready To<br>Dive In?<div class="underline"></div></h1><button>Join Us</button></div>
    <div class="cont3"><h1>About ZiZi<div class="underline"></div></h1><p>Join the Next Generation of Online Communities

At Zizi, we bring you a platform that’s more than just messaging—it's a space to express, connect, and engage with people who share your passions. Whether you’re gaming, working on projects, or just hanging out, Zizi is here to make your experience meaningful and fun.
</p></div>
</body>
</html>
