<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        * {box-sizing: border-box}

        .container {
        padding: 16px;
        }

        input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        }

        hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
        }

        .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        }

        .registerbtn:hover {
        opacity:1;
        }

        a {
        color: dodgerblue;
        }

        .signin {
        background-color: #f1f1f1;
        text-align: center;
        }
    </style>

    <form>
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <hr>

            <button type="submit" class="registerbtn">Register</button>
            </div>

        <div class="container signin">
            <p>Already have an account? <button href="#">Sign in</button></p>
        </div>
    </form>
        

    <script scr="class/account.php"></script>
</body>
</html>


