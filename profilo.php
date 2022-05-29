<?php
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['id'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Profilo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png" sizes="50x50"/>
        <link rel="stylesheet" href="profilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="profilo.js" defer></script>
    </head>

    <body>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="images/logo.png">
                Alicya Alderuccio
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Accedi</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link"><?php echo $_SESSION['username']; ?> Esci</a>
                </li>
            </ul>
            <div id="menuMOBILE">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
        </nav>

        <div id="cont" class="hidden">
            <div id="menuMobView">
                <ul id="nav-menu-mob">
                    <li>
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li>
                        <a href="login.php" class="nav-link">Accedi</a>
                    </li>
                    <li>
                        <a href="logout.php" class="nav-link"> <?php echo $_SESSION["username"]; ?> Esci</a>
                    </li>
                </ul>
                <span id="close">Chiudi</span>
            </div>
        </div>

        <div id="container">
            <div class="banner">
                <img src="images/imggenerica.jpg">
                <br>
                <?php
                    echo $_SESSION['username'];
                ?>
            </div>
    
            <div class="bannerphoto">
                <img class="logo" src="images/stella.png">
                
                <div id="albumdatabase">
                    <?php 
                        $conn = mysqli_connect("localhost", "root", "", "hw1");
                        
                        $sess = $_SESSION['id'];
                        $query = "SELECT photosrc FROM photo WHERE id = '$sess'";
                        $res = mysqli_query($conn, $query);

                        while($entry = mysqli_fetch_array($res)){
                    ?>
                            <img id="photoid" class = "photoprofilo" src="<?php echo $entry['photosrc'];?>">
                    <?php
                        }
                    ?>
                </div>
                <p>Clicca le foto per eliminarle dai preferiti</p>
            </div>
        </div>
    </body>
</html>