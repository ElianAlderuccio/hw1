<?php
    session_start();

    if(isset($_SESSION["username"])){
        header("Location: profilo.php");
        exit;
    }
    
    if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])){
        $errors = array();
        $conn = mysqli_connect("localhost", "root", "", "hw1");


        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $query = "SELECT username FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
            $errors[] = "Username gia' utilizzato";
        }


        if (strlen($_POST["password"]) < 8) {
            $errors[] = "Caratteri password insufficienti";
        }

        
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email non valida";
        } else {
            $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
            $res = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
            if (mysqli_num_rows($res) > 0) {
                $errors[] = "Email gia' utilizzata";
            }
        }

        
        if (count($errors) == 0) {
            $nome = mysqli_real_escape_string($conn, $_POST['nome']);
            $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);

            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password = password_hash($password, PASSWORD_BCRYPT);

            $query = "INSERT INTO users(nome, cognome, username, email,  password) VALUES('$nome', '$cognome', '$username', '$email', '$password')";
            
            if (mysqli_query($conn, $query)) {
                $_SESSION["username"] = $_POST["username"];
                header("Location: home.php");
                exit;
            } else {
                $errors[] = "Errore di connessione al Database";
            }
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Registrati</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png" sizes="50x50"/>
        <link rel="stylesheet" href="register.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="register.js" defer></script>
    </head>

    <body>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="images/logo.png">
                <a href="register.php"> Alicya Alderuccio</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Accedi</a>
                </li>
            </ul>
        </nav>    

        <div id="container">
            <div id="register">
                <img src="images/bgleftregister.jpg">
                <form  name="register" method='post'>
                    <div id="validation" class="hidden">
                        <p>Inserisci tutti i dati</p>
                    </div>
                    <?php
                        if(isset($errors)){
                            foreach($errors as $error){
                                echo $error;
                                echo "<br>";
                            }
                        }
                        
                    ?>
                    <input type='text' name='nome' placeholder="Nome" class="textareastyle">
                    <input type='text' name='cognome' placeholder="Cognome" class="textareastyle">
                    <input type='text' name='username' placeholder="Username" class="textareastyle">
                    <input type='email' name='email' placeholder="Email" class="textareastyle">
                    <input type='password' name='password' placeholder="Password > 8 caratteri" class="textareastyle">
                    <input type='submit' id="button" value="Registrati">
                </form>
                <img src="images/bgrightregister.jpg ">
            </div>
        </div>
    </body>
</html>