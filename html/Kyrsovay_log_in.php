<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/log_in.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/logo.svg">
            <div class="text_logo">
                <p>Q</p>
                <p>u</p>
                <p>a</p>
                <p>n</p>
                <p>t</p>
                <p>a</p>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <p>Authorization</p>
            <form action="" method="POST">
                <input type="text" name="login" placeholder="Username or Email" required>
                <input type="password" name="password" placeholder="Password"required>
                <input type="submit" VALUE="LOG IN">
                <?php
                    session_start();
                    require('../php/connect.php');
                    if (!empty($_POST['password']) and !empty($_POST['login'])) {
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                        
                        $query = "SELECT * FROM log_in WHERE login='$login' AND password='$password'";
                        $res = mysqli_query($link, $query);
                        $user = mysqli_fetch_assoc($res);
                        
                        if (!empty($user)) {
                            $_SESSION['auth'] = true;
                            $_SESSION['id'] = $user['id'];
                            $id = $_SESSION['id'];
                            $update = "UPDATE `log_in` SET `visit`='online' WHERE id='$id'";
                            $res = mysqli_query($link, $update);
                            header('Location: ../html/profile.php');
                            die();
                        } else {
                            ?><p><?php echo("invalid username or password"); ?></p><?php
                        }
                    }
                ?>
            </form>
            <div class="text_container">
                <p><a href="#">Forgot you password?</a></p>
                <p>No account?<a href = "registration.php">Registration</a></p>
            </div>
        </div>
    </main>
</body>
</html>