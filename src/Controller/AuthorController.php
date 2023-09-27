<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/author/show/{name}", name="show_author")
     */
    public function showAuthor($name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }
    public  function getAuthorsList() {
        $authors = array(
            array('id' => 1, 'picture' => '/images/victor.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/images/taha-hussein-1068737-330-540.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $authors;
        $totalBooksCount = array_sum(array_column($authors, 'nb_books'));
    }
    public function authorDetails($id) {
        // Supposons que vous ayez déjà une variable $authors contenant la liste des auteurs
        // Vous pouvez rechercher l'auteur avec l'ID donné
        $author = null;
        foreach ($authors as $a) {
            if ($a['id'] == $id) {
                $author = $a;
                break;
            }
        }
    
        // Si aucun auteur correspondant n'a été trouvé, vous pouvez gérer cette condition ici
    
        // Passer les détails de l'auteur à la vue "showAuthor.html.twig"
        return $this->render('showAuthor.html.twig', [
            'author' => $author,
        ]);
    }
    
}
