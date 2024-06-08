<?php
    include 'Model/Signup.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registeration</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/all.min.css">
    <link rel="stylesheet" href="./CSS/style.css" rel='stylesheet'>
    <style>
     
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            background: url('./WhatsApp\ Image\ 2024-03-31\ at\ 12.01.52\ AM.jpeg') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            width: 750px;
            background: rgba(255, 255, 255, .1);
            border: 2px solid rgba(255, 255, 255, .2);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            color: #fff;
            padding: 40px 35px 55px;
            margin: 0 10px;
        }

        .wrapper h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        .wrapper .input-box {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .input-box .input-field {
            position: relative;
            width: 48%;
            height: 50px;
            margin: 13px 0;
        }

        .input-box .input-field input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            outline: none;
            font-size: 16px;
            color: #fff;
            border-radius: 6px;
            padding: 15px 15px 15px 40px;
        }

        .input-box .input-field input::placeholder {
            color: #fff;
        }

        .input-box .input-field i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px
        }

        .wrapper label {
            display: inline-block;
            font-size: 14.5px;
            margin: 10px 0 23px;
        }

        .wrapper label input {
            color: #fff;
            margin-right: 5px;
        }

        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <?php
        include 'Model/Nav.php';
    ?>
    <div class="wrapper">
        <form action="./Signup.php" method="post">
            <h1>Registeration</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="Name" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="UserName" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="email" name="Email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-field">
                    <input type="number" name="Phone" placeholder="Phone Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="password" name="Password" placeholder="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="password" name="CPassword" placeholder="Confirm password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>

            <label><input type="checkbox">I hereby declare that the above information provided is trur and correct </label>
 
            <button type="submit" name="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>