<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class AboutController extends Controller
{

    public function index()
    {
        $titreContact = 'Bienvenue sur la page contact';

        $persons = 
            "lorem"
        

        ;

        $this->render('app.about.index',[
            'titrePage' => $titreContact,
            'persons'=> $persons
        ]);
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
