<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="Pictures/Z.png">
    <style>
                html {
            background-image: url(./Pictures/BGLogin.jpg);
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

        .sign-up-box{
            margin-top: 90px;
            width: 500px;
            height: 600px;
            padding: 1px;
            background-color: rgb(0, 0, 0, .8);
            border-radius: 10px;
            text-align: center;
            border: 1px solid white;
            max-width: fit-content;
            margin-inline: auto;
        }

        .underline{
            border-bottom:1px solid white;
            width:400px;
            padding-bottom:5px;
            margin-left: 20px;
            margin-right: 20px;
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
    </nav>
<div class="sign-up-box">
        <h2>Welcome</h2>
        <div class="underline"></div>
        <p>Username</p>
        <input type="text" placeholder="Username" required>
        <p>Password</p>
        <input type="password" placeholder="Password" required>
        <br><br><br>
        <button>Sign in</button>
        <p>Don't have an Account? <a href="./register.php">Sign Up</a> here</p>
    </div>
</body>
</html>
