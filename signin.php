<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZiZi Chat - Sign In</title>
    <link rel="icon" href="Pictures/Z.png">
    <style>
    * {
        box-sizing: border-box;
    }

    html{
        font-family: "Inter", Arial, Helvetica, sans-serif;
    }

    .z-icon{
        position: relative;
        left: 0px;
        top: 0px;
        width: 100px;
        height: 100px;
        border-radius: 20px;
    }

    .sign-up-box{
        font-size: large;
        color: #070809;
        width: 650px;
        height: 750px;
        background-color: #718ca2;
        opacity: 80%;
        border-radius: 10px;
        text-align: center;
        margin: 0 auto;
        margin-top: 0px;
        padding-top: 1px;
        padding-bottom: 10px;
        box-shadow:
        0 2.8px 2.2px rgba(0, 0, 0, 0.034),
        0 6.7px 5.3px rgba(0, 0, 0, 0.048),
        0 12.5px 10px rgba(0, 0, 0, 0.06),
        0 22.3px 17.9px rgba(0, 0, 0, 0.072),
        0 41.8px 33.4px rgba(0, 0, 0, 0.086),
        0 100px 80px rgba(0, 0, 0, 0.12)
    }

    input{
        border: 1px solid black;
        border-radius: 5px;
        height: 40px;
        width: 380px;
    }

    h2{
        padding-bottom: 20px;
        text-decoration: underline;
    }
    body{
        background-color: #f5f6f9;
    }

    button{
        width: 240px;
        height: 40px;
        background-color:white ;
        color: #070809;
        border-radius: 15px;
    }
    .sign-up-box p{
        padding-top: 20px;
    }

.cover{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
    </style>
</head>
<body>

        <a href="google.com">
            <img class="z-icon" src="Pictures/Z.png" alt="Z Icon">
        </a>


        
    <div class="sign-up-box">
        <h2>Welcome</h2>
        <p>Username</p>
        <input type="text" placeholder="Username" required>
        <p>Password</p>
        <input type="password" placeholder="Password" required>
        <br><br><br>
        <button>Sign in</button>
        <p>Don't have an Account? <a href="google.com">Sign Up</a> here</p>
    </div>
        

</body>
</html>