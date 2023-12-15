<?php 
namespace App\Model;

use App\Weblitzer\Model as ModelMVC;
use App\App;



class PostModel extends ModelMVC
{
   
    protected static $table = 'post';

    public static function insert($post)
    {
        // var_dump($post);
        // die();
      App::getDatabase()->prepareInsert(
        'INSERT INTO ' . self::$table . ' (title,content,author) VALUES (?,?,?) ' ,
        [
            $post['titre'],
            $post['contenu'],
            $post['auteur'],

        ]
        );
    }
}