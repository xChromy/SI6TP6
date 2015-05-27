
        <h2><?php echo $titre ?></h2>
        <br>

<?php echo validation_errors(); ?>

<?php echo form_open('articles/create') ?>
        
    <label for="slug">Slug</label>
    <input type="input" name="slug" /><br />
    <br>

    <label for="titre">Titre</label>
    <input type="input" name="titre" /><br />
    <br>

    <label for="texte">Texte</label>
    <textarea name="texte"></textarea><br />
    <br>

    <input type="submit" name="submit" value="Créer" />
    <br>

</form>

