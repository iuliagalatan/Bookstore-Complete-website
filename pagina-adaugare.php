<?php
if(login())
{   
?>

<h1> Adaugare carte </h1>

<form method="POST" action="adaugare.php">
    <div class="form-group">
        <label class="control-label" for="ISBN">
            ISBN
        </label>
        <input type="text" name="ISBN" id="ISBN" class="form-control">
    </div>
    
    <div class="form-group">
        <label class="control-label" for="AUTORUL">
            AUTORUL
        </label>
        <input type="text" name="AUTORUL" id="AUTORUL" class="form-control">
    </div>
    
    <div class="form-group">
        <label class="control-label" for="TITLUL">
            TITLUL
        </label>
        <input type="text" name="TITLUL" id="TITLUL" class="form-control">
    </div>
    
    <div class="form-group">
        <label class="control-label" for="ANUL_AP">
            ANUL APARITIEI
        </label>
        <input type="text" name="ANUL_AP" id="ANUL_AP" class="form-control">
    </div>
    
    <div class="form-group">
        <label class="control-label" for="NR_VOL">
            NUMAR VOLUME
        </label>
        <input type="text" name="NR_VOL" id="NR_VOL" class="form-control">
    </div>
    
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">
            LOVESTE-MA
        </button>
    </div>
</form>

<?php
}
else
{
    ?>
    User neautentificat
    <?php
}
?>