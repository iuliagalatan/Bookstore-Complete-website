<h1> Cautare dupa numar volume </h1>

<?php
    $numar_volume = 0;
    
    if (isset($_GET['numar_volume']))
        $numar_volume = intval($_GET['numar_volume']);
?>

<form>
    <input type="hidden" name="pagina" value="afisare">
    <div class="form-group">
        <label class="control-label" for="numar_volume">
            NUMAR VOLUME
        </label>
        <input type="text" name="numar_volume" id="numar_volume" class="form-control">
    </div>
    
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">
            CAUTA
        </button>
    </div>
</form>

<?php
    if(isset($_GET['numar_volume']))
    {
        $query = "SELECT * FROM carti WHERE NR_VOL='{$numar_volume}'"; //acest query trebuie modificat
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 0)
        {
            print("Niciun rezultat returnat!!!!!!!!!!!");
        }
        else
        {
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>
                            Nr. crt
                        </td>
                        <td>
                            ISBN
                        </td>
                        <td>
                            Titlu
                        </td>
                        <td>
                            Autor
                        </td>
                        <td>
                            Anul aparitiei
                        </td>
                        <td>
                            Numar volume
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $cnt = 0;
                        while($l = mysqli_fetch_array($result))
                        {
                            $cnt++;
                            ?>
                            <tr>
                                <td>
                                    <?=$cnt?>
                                </td>
                                <td>
                                    <?=$l['ISBN']?>
                                </td>
                                <td>
                                    <?=$l['TITLUL']?>
                                </td>
                                <td>
                                    <?=$l['AUTORUL']?>
                                </td>
                                <td>
                                    <?=$l['ANUL_AP']?>
                                </td>
                                <td>
                                    <?=$l['NR_VOL']?>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
                
                
            </table>       
            <?php 
        }
    }
?>