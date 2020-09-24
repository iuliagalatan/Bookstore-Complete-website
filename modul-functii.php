<?php
    function login(){
        if(isset($_SESSION['id_user']))
        {
            return $_SESSION['id_user'];   
        }
        return false;
    }
    
    function esteAdmin($id_user){
        if($id_user === false)
            return false;
        $q= "SELECT este_admin FROM utilizatori WHERE id='{$id_user}'";
        global $link;
        $rez=mysqli_query($link, $q);
        
        print mysqli_error($link);
        
        if(mysqli_num_rows($rez) == 0)
            return false;
        $row = mysqli_fetch_array($rez);
        if($row['este_admin'] == 1)
            return true;
        else
            return false;
    }
    
    function username($id_user){
        if($id_user === false)
            return false;
        $q= "SELECT user FROM utilizatori WHERE id='{$id_user}'";
        global $link;
        $rez= mysqli_query($link, $q);
        if(mysqli_num_rows($rez) == 0)
            return false;
        
        $row= mysqli_fetch_array($rez);
        return $row['user'];
    }
    
    function Parola($pass)
    {
        $salt = "dsrlfsdkjfh";
        return sha1(sha1($pass) . $salt);
    }
    
    function CreareAlerta($mesaj_alerta, $tip_alerta)
    {
        $_SESSION['alerta'] = [
            'mesaj' => $mesaj_alerta,
            'tip'   => $tip_alerta
        ];
    }
    
    function AfisareAlerta()
    {
        if(isset($_SESSION['alerta']))
        {
            ?>
            <div class="alert alert-<?=$_SESSION['alerta']['tip']?>">
                <?=$_SESSION['alerta']['mesaj']?>
            </div>
            <?php
            unset($_SESSION['alerta']);
        }
    }