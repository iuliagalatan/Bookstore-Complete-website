<h1> Lista Cartilor </h1>

<?php
    $query = "SELECT * FROM carti"; //acest query trebuie modificat
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
?>