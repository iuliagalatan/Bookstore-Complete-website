<?php
    session_start();
    include ("module/modul-conectare.php");
    include ("module/modul-functii.php");
    include ("module/modul-setari.php");
    $pagina = 'index';
    if (isset($_GET['pagina']))
        $pagina = $_GET['pagina'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Super atestat</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./?pagina=index">Lista carti</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    if ( esteAdmin(login()) )
                    {
                    ?>
                    <li class="nav-item <?=$pagina == "adaugare"?"active":""?>">
                        <a class="nav-link" href="./?pagina=adaugare">Adaugare</a>
                    </li>
                    
                    <?php
                    }
                    ?>
                    <li class="nav-item <?=$pagina == "afisare"?"active":""?>">
                        <a class="nav-link" href="./?pagina=afisare">Filtrare</a>
                    </li>
                    <?php
                        if( login() === false )
                        {
                            
                            ?>
                            <li class="nav-item <?=$pagina == "autentificare"?"active":""?>">
                                <a class="nav-link" href="./?pagina=autentificare">Autentificare</a>
                            </li>
                             <li class="nav-item <?=$pagina == "inregistrare"?"active":""?>">
                                <a class="nav-link" href="./?pagina=inregistrare">Inregistrare</a>
                            </li>
                            <?php
                        }
                        else
                        {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Deconectare</a>
                            </li>
                            <?php
                        }
                    ?>
                            
                        
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <?php
            
            AfisareAlerta();
            
            $nf = "pagini/pagina-{$pagina}.php";
            if (file_exists($nf))
                include $nf;
            else
            {
                print("Boo-hoo-hoo!");
                ?><img src="https://destepti.ro/wp-content/uploads/2014/04/Bufnita.jpg" height="auto" width="600"><?php 
            }
            if(login())
            {
                print "Autentificat ca: " . username(login());
            }
            
            include "module/modul-comentarii.php";
            
        ?>
    </div>
</body>
</html>
        