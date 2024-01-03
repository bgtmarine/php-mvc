

<section>
    <h3>Modifier cette article</h3>
    <form method="POST">
        <?= $formAddEdit->label('titre')?>
        <?= $formAddEdit->input('titre', 'text',$articleEdit->title)?>
        <?= $formAddEdit->error('titre')?>
       

      <br>

        <?= $formAddEdit->label('contenu')?>
        <?= $formAddEdit->textarea('contenu', $articleEdit->content)?>
        <?= $formAddEdit->error('contenu')?>

        
        
        <?= $formAddEdit->submit('submitted','Ajouter article')?>


    </form>
</section>