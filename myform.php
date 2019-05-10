<html>
    <head>
    <style>
        form {
            font-size: 30px;
            font-family: italic;
            font-weight: bold;
            background-color: black;
            color: white;
        } 
        .large {
            font-size: 50px;
        }
    </style>
    </head>
    <body>
        <?php
            $user = $_POST['user'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            if (!empty($user)) {
                print "Welcome to williamsummer.org, $user!<br>";
            }
        ?>
        <form method="post" action="myform.php"> 
        account: <input type="text" name="user"> <?php echo $_POST['user']; ?> </input><br>
        password: <input type="password" name="password"> <?php echo $_POST['password']; ?> </input><br>
        confirm password: <input type="password" name="confirm"> <?php echo $_POST['confirm']; ?> </input><br>
        <input class="large" type="submit" name="submit" value="submit"></input>
        </form>
    </body>
</html>

