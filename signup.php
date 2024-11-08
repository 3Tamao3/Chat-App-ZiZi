<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZiZi Chat - Sign up</title>
    <link rel="icon" href="Pictures/Z.png">
    <style>
        * {
            box-sizing: border-box;
        }

        [class*="col-"]{
            float: left;
            padding: 15px;
        }

        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}

        html{
            font-family: "Inter", Arial, Helvetica, sans-serif;
        }

        .z-icon{
            width: 100px;
            height: 100px;
            border-radius: 20px;
        }

        .sign-up-box{
            color: #070809;
            width: 450px;
            height: 450px;
  background-color: #718ca2;
  opacity: 80%;
  border-radius: 10px;
  text-align: center;
  margin: 0 auto;
  margin-top: 100px;
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
        }

        h2{
            padding-bottom: 20px;
            text-decoration: underline;
        }
        body{
            background-color: #f5f6f9;
        }

        
    </style>
</head>
<body>
        <div class="col-2">
            <a href="google.com">
                <img class="z-icon" src="Pictures/Z.png" alt="Z Icon">
            </a>
        </div>

        
        <div class="sign-up-box">
            <h2>Create an Account</h2>
            <p>Username</p>
            <input type="text" placeholder="Username">
            <p>Password</p>
            <input type="text" placeholder="Password">
            <p>Confirm Password</p>
            <input type="text" placeholder="Confirm Password">
            <br><br>
            <button>Sign Up</button>
            <p>Already got an Account? <a href="google.com">Log In</a> here</p>
        </div>
        

</body>
</html>