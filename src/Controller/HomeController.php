<?php

// Cette ligne indique que ce fichier contient du code PHP
// Elle doit toujours être la première ligne d'un fichier PHP

// Le namespace définit l'emplacement de cette classe dans l'architecture de l'application
// C'est comme l'adresse d'une maison : App\Controller signifie que cette classe
// se trouve dans le dossier App/Controller de notre projet
namespace App\Controller;

// Ces lignes importent des classes dont nous avons besoin depuis Symfony
// C'est comme dire "j'ai besoin d'utiliser ces outils de Symfony"
// AbstractController nous donne des fonctions toutes prêtes pour créer des pages web
// Route nous permet de dire à Symfony quelle URL affiche quelle page
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

// Cette classe s'appelle HomeController et gère la page d'accueil du site
// "final" signifie qu'on ne peut pas créer d'autres classes basées sur celle-ci
// "extends AbstractController" signifie qu'on hérite des capacités d'AbstractController
// (comme un enfant qui hérite des capacités de ses parents)
final class HomeController extends AbstractController
{
    // Cette méthode s'appelle "index" et affiche la page d'accueil
    // #[Route('home')] dit à Symfony : "quand quelqu'un va sur /home, exécute cette méthode"
    // "public" signifie que cette méthode peut être appelée depuis l'extérieur
    #[Route('home')]
    public function index()
    {
        // On crée deux variables pour stocker le titre et la description de notre page
        // Le $ devant le nom indique que c'est une variable en PHP
        $titre = 'mon titre';
        $description = "la description de mon site";

        // On crée un tableau (array) qui contient nos données
        // Un tableau en PHP est comme une boîte qui peut contenir plusieurs choses
        // Ici on met nos données avec des noms (clés) pour les retrouver facilement
        $data = [
            'title' => $titre,        // 'title' est la clé, $titre est la valeur
            'desc' => $description    // 'desc' est la clé, $description est la valeur
        ];

        // Cette ligne dit à Symfony : "affiche le fichier home/index.html.twig
        // et donne-lui les données contenues dans $data"
        // Le fichier .twig est un template (modèle) qui définit à quoi ressemble la page
        return $this->render('home/index.html.twig', ['data' => $data]);
    }
}




