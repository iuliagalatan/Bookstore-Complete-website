<?php
    session_start();
    include ("module/modul-conectare.php");
    include ("module/modul-functii.php");
    include ("module/modul-setari.php");
    
    if( !login())
    {
        header("Location: ./");
        die();
    }
    
    $clean = [
        //valorile primite cu post le punem aici si le escapuim
        'ISBN' => mysqli_real_escape_string($link, $_POST['ISBN']),
        'TITLUL' => mysqli_real_escape_string($link, $_POST['TITLUL']),
        'AUTORUL' => mysqli_real_escape_string($link, $_POST['AUTORUL']),
        'ANUL_AP' => intval($_POST['ANUL_AP']),
        'NR_VOL' => intval($_POST['NR_VOL'])
    ];
    $query = "insert INTO carti (ISBN, TITLUL, AUTORUL, ANUL_AP, NR_VOL) VALUES (
        '{$clean['ISBN']}',
        '{$clean['TITLUL']}',
        '{$clean['AUTORUL']}',
        '{$clean['ANUL_AP']}',
        '{$clean['NR_VOL']}'
    )";//acest query il adaptezi in functie de nevoie
    
    mysqli_query($link, $query);
    
    header("Location: ./?pagina=index");
    
    