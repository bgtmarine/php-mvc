<?php

//['nom de la page', 'nom du controleur', 'tables de views']

$routes = [
  ['home','default','index'],
  //route, controler et view
  ['contact','contact','index'],
  ['about','about','index'],
  ['articles','article','index'],
  ['article','article','show',['id']],
  ['delete','article','delete',['id']],
  ['add','article','add'],
  ['edit','article','edit',['id']],
  


];










