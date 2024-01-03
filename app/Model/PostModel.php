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

    public static function update($post,$id)
    {
        
      App::getDatabase()->prepareInsert(
        'UPDATE ' . self::$table .  ' SET title = ?, content = ? WHERE id = ' . $id ,
        [
            $post['titre'],
            $post['contenu'],
           

        ]
        );
    }
}