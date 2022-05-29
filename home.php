<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo.png" sizes="50x50"/>
        <link rel="stylesheet" href="home.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="home.js" defer></script>
    </head>

    <body>
        <header>
            <nav class="navbar">
                <div class="nav-logo">
                    <img src="images/logo.png">
                    <a href="home.php">Alicya Alderuccio</a>
                </div>

                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#about" class="nav-link" class="scroll">About me</a>
                    </li>
                    <li class="nav-item">
                        <a href="#album" class="nav-link" class="scroll">Galleria</a>
                    </li>
                    <li class="nav-item">
                        <a href="profilo.php" class="nav-link">Profilo</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <?php
                                session_start(); 
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION["username"];
                                } 
                            ?> 
                            Esci
                        </a>
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
                        <a href="#about" class="nav-link">About me</a>
                    </li>
                    <li>
                        <a href="#album" class="nav-link">Galleria</a>
                    </li>
                    <li>
                        <a href="profilo.php" class="nav-link">Profilo</a>
                    </li>
                    <li>
                        <a href="login.php" class="nav-link">Accedi</a>
                    </li>
                    <li>
                        <a href="logout.php" class="nav-link">
                            <?php 
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION["username"];
                                } 
                            ?> 
                            Esci
                        </a>
                    </li>
                    </ul>
                    <span id="close">Chiudi</span>
                </div>
            </div>
        
            <div id="container">
                <div id="titoli">
                    <img src="images/emoj.png">
                    <p>Ehi ciao <strong>
                                <?php 
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION["username"];
                                } 
                                ?>
                                </strong> , mi chiamo <strong>Alicya</strong></p>
                    <h1>Sono una dottoressa in chimica industriale appassionata di fotografia</h1>
                    <p>In particolare mi occupo di fotografia naturalistica, registrati per interagire con i contenuti che creo</p>
                    <a href="register.php">
                        <button id="sub">Registrati</button>
                    </a>
                </div>

                <div id="imgali"></div>
            </div>
        </header>

        <article id="about">
            <div class="grid">
                <div class="card">
                    <img src="images/chimica.png">
                </div>
                <div class="textcard">
                    <p>
                        Mi sono approcciata al mondo della chimica all'età di 14 anni, conseguendo prima il
                        diploma di perito chimico, poi la laurea triennale in Chimica industriale presso UniCT, 
                        e attualmente sto proseguendo i miei studi magistrali in chimica dei materiali e nanotecnologie.
                    </p>
                    
                    <p>
                        La scienza mi appassiona perchè mi permette di capire quali sono le leggi che governano tutto ciò che
                        ci circonda, ma non solo ... la scienza mi affascina perchè permette di migliorare lo stile di vita 
                        dell'uomo, è allo stesso tempo il problema ma anche la soluzione, tutto dipende dalla propria missione.
                    </p>

                    <p>
                        La mia missione è quella di affrontare il disastro ambientale che attualmente sta coinvolgendo il
                        nostro pianeta, studiando i problemi e i potenziali rischi, e cercando possibili soluzioni. Uno dei
                        miei principali obbiettivi è quello di sperimentare materiali innovativi a basso impatto ambientale.
                    </p>
                </div>
            </div>

            <div class="grid">
                <div class="card">
                    <img src="images/ali.png">
                </div>
                <div class="textcard">
                    <p>
                        Da qualche anno ho trovato nella fotografia il modo per esprimere tutto lo stupore che provo davanti
                        ad un tramonto, il mare, i boschi e le curiosità che provo nell'osservare i comportamenti degli
                        animali e degli insetti.
                    </p>

                    <p>
                        Tra le cose che più amo fare vi sono escursioni naturalistiche nei boschi, in montagna, al mare, nei
                        fiumi, ma adoro anche visitare città, musei e luoghi a me nuovi, il tutto rigorosamente con la mia
                        fotocamera al collo.
                    </p> 
                    
                    <p>
                        Sicuramente non sono una professionista, ma trovo in ogni mia foto un'emozione, una storia da raccontare, ed
                        è per questo che ho deciso di accettare la creazione di questo sito web, semplicemente per dare luce ai miei
                        scatti piuttosto che lasciarli archiviati nella galleria del mio smartphone.
                    </p>
                </div>
            </div>
        </article>

        <article id="album">
            <h1>Dai un'occhiata ad alcuni dei miei scatti e salva i tuoi preferiti</h1>
            <h2>Scatti naturalistici</h2>
            <section class="choice-grid">
                <div>
                    <img class= "photo" src="images_1/1.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/2.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/3.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/4.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/5.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/6.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/7.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/8.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/9.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_1/10.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>
            </section>
        
            <h2>La fantastica Trapani</h2>
            <section class="choice-grid">
                <div>
                    <img class= "photo" src="images_2/11.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/12.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/13.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/14.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/15.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/16.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/17.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/18.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/19.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_2/20.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>
            </section>

            <h2>Pantalica è una riserva naturale mozzafiato</h2>
            <section class="choice-grid">
                <div>
                    <img class= "photo" src="images_3/21.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/22.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/23.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/24.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/25.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/26.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/27.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/28.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/29.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>

                <div>
                    <img class= "photo" src="./images_3/30.jpg"/>
                    <img class="preferiti" src="images/notstella.png"/>
                </div>
            </section>

            <section>
                <p id="albumlink">Visualizza le immagini salvate all'interno del tuo <a href="profilo.php" class="nav-link">profilo</a> personale</p>
            </section>

            <section id="modal-view" class="hidden"></section>
        </article>
        
        <article id="pexels">
            <a href="https://www.pexels.com/it-it/">
                <img src="images/pexels.png">
            </a>
            <h1>Pexels è una piattaforma dove milioni di utenti pubblicano i loro scatti</h1>
            <h2>Fatti ispirare da un community di appassionati fotografi</h2>
            <div>
                <input type="text" class="input" placeholder="Inserisci un topic">
                <button class="search_btn">Cerca</button>
                <div id="alert" class="hidden"><p>Inserisci un topic</p></div>
            </div>
            <div class="display_images"></div>
        </article>

        <footer>
            <div id="saluti">
                <h1>Sei giunto alla fine!</h1>
                <p>
                    Spero che la permanenza nel sito sia stata di tuo gradimento 
                    <br>
                    <strong>Torna a trovarmi</strong>
                </p>
                <img src="images/razzo.png">
                <p>@2022 Alderuccio Alicya. Tutti i diritti riservati</p>
            </div>
            
            <div id="contatti">
                <h2>Trovami su</h2>
                <a href="https://www.facebook.com/alicya.alderuccio">
                    <img src="images/fb.png">
                </a>
                <a href="https://it.linkedin.com/in/alicya-alderuccio-b425a5232">
                    <img src="images/linkedin.png">
                </a>

                <a href="https://www.instagram.com/accounts/login/?next=/alicya.alderuccio/">
                    <img src="images/insta.png">
                </a>
            </div>
        </footer>
    </body>
</html>