<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
 

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {

        $articles = PostModel::all();
        $user = new UserModel;
        $nbArticles = PostModel::count();

        $this->render('app.article.index',
        [
            'articles' => $articles,
            'user' => $user,
            'nbArticles' => $nbArticles
        ]);


    }

    public function add()
    {
       $errors = [];
       $formAdd = new Form($errors);

       $this->render('app.article.addarticle',
       [
           'formAdd' => $formAdd,
           
       ]);

    }
    

    public function show($id)
    {
     $article = $this->isArticleExist($id);
     $user = new UserModel;

    $this->render('app.article.show',
    [
'article'=> $article,
'user'=> $user,
    ]);
     
    }

    public function delete($id)
    {
        $articleDelete = $this->isArticleExist($id);
        PostModel::delete($id);
        $this->redirect('articles');
    }

    public function  isArticleExist($id)
    {
        $article = PostModel::findById($id);
        return (empty($article)) ? $this->Abort404() : $article;

    }
    

  
}
