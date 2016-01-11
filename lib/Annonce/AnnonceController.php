<?php

namespace Annonce;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AnnonceController {
    
   
    // affichage de toutes les annonces
    public function getAllAnnonces(Application $app){
        
        $collection = $app['db']->annonces;
        $cursor = $collection->find();   
        foreach ($cursor as $value){
            $json[] = $value;
        }
        
        return new JsonResponse($json);
    }
    
    //affichage des annonces en fonction de leur catégorie
    public function annParCategorie($cat, application $app){
        
        $collection = $app['db']->annonces;
        $query = array( "categorie" => $cat);
        $cursor = $collection->find($query);
        foreach ($cursor as $value){
            $json[] = $value;
            }
            
        return new JsonResponse($json);
    }
}