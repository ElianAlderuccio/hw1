<?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_SESSION['id'])){
        header("Location: profilo.php");
        exit;
    }
    
    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        $conn = mysqli_connect("localhost", "root", "", "hw1");

        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        
        $query = "SELECT id, username, password FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $query);
        
        $entry = mysqli_fetch_assoc($res);
        if(mysqli_num_rows($res) > 0 && password_verify($_POST['password'], $entry['password'])){
                
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["id"] = $entry['id'];
                
                header("Location: home.php");
                exit;
            }else{
                $errore = true;
            }
        }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Accedi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png" sizes="50x50"/>
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="login.js" defer></script>
    </head>


    <body>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="images/logo.png">
                <a href="login.php"> Alicya Alderuccio</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="profilo.php" class="nav-link">Profilo</a>
                </li>
            </ul>
        </nav>

        <div id="container">
            <div id="login">
                <img src="images/bgleftlogin.jpg">
                <form name="login" method='post'>
                    <?php
                        if(isset($errore)){
                            echo "<p>";
                            echo "Credenziali non valide";
                            echo "</p>";
                        }
                    ?>
                    <div id="validation" class="hidden">
                        <p>Inserisci tutti i dati</p>
                    </div>
                    <input type='text' name='username' placeholder="Username" class="textareastyle">
                    <input type='password' name='password' placeholder="Password" class="textareastyle">
                    <input type='submit' id="button" value="Accedi">
                    Non hai ancora un account? <a id="reg" href="register.php">Registrati</a>
                </form>
                <img src="images/bgrightlogin.jpg ">
            </div>
        </div>
    </body>
</html>