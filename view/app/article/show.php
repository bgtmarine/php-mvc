
<?= $article->title?>
<br>
<?= $article->content?>
<br>
<p>
    <strong>Publiée par :</strong> <?= $user->findById($article->author)->firstname . ' ' . $user->findById($article->author)->lastname?> le <?= $article->createdAt?>
</p>

<p><a href="<?= $view->path('delete',[$article->id])?>" class="btn"onclick="return confirm('Etes vous certain de supprimer cet article')">Supprimer</a>
<p><a href="<?= $view->path('edit',[$article->id])?>" class="btn">Modifier</a>

</p>
