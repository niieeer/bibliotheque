<?php

namespace App\Controller;

use App\Entity\Book;
use App\Helpers\EntityManagerHelper as Em;
use App\Models\AbstractRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

use Exception;

class BookController
{

    public function indexbook()
    {

        $entityManager = Em::getEntityManager();
        $class = new ClassMetadata("App\Entity\Book");
        $bookRepository = new AbstractRepository($entityManager, $class);
        try {
            $book = $bookRepository->findAll();
            include "./src/Vues/indexBook.php";
        } catch (\Throwable $th) {
            exit('Une erreur est survenue dans la récupération des livres');
        }
    }

    public function showform()
    {
        include './src/vues/addBookForm.php';
    }

    public function add()
    {
        // Verification des champs
        if (isset($_POST['title'], $_POST['resume'], $_POST['author'], $_POST['editor'], $_POST['No_of_copies'])) {
            $post = array_map('trim', array_map('strip_tags', $_POST));
        } else
            throw new Exception("Error when retrieving registration fields", 1);
        $entityManager = Em::getEntityManager();
        $book = new Book($post['title'], $post['resume'], $post['author'], $post['editor'], $post['No_of_copies']);
        // Send to BDD
        try {
            $entityManager->persist($book);
            $entityManager->flush();
            print("Livre ajouter avec succès");
            // Timer de 3 secondes avant de renvoyer sur la page d'acceuil
            header('Refresh: 3; URL=http://localhost/bibliotheque/index');
        } catch (\Throwable $e) {
            print($e->getMessage());
        }
    }

    public function showedit($id)
    {
        $entityManager = Em::getEntityManager();
        $class = new ClassMetadata("App\Entity\Book");
        $bookRepository = new AbstractRepository($entityManager, $class);
        try {
            $book = $bookRepository->find($id);
        } catch (\Throwable $th) {
            echo "$th->getMessage()";
        }
        include './src/vues/modifyBook.php';
    }

    public function deleteBook($id)
    {
        $entityManager = Em::getEntityManager();
        $class = new ClassMetadata("App\Entity\Book");
        $bookRepository = new AbstractRepository($entityManager, $class);
        $book = $bookRepository->find($id);
        $entityManager->remove($book);
        $entityManager->flush();
        echo "C'est bon man y'a plus rien";
          // Timer de 3 secondes avant de renvoyer sur la page d'acceuil
          header('Refresh: 3; URL=http://localhost/bibliotheque/index');
    }



    public function modify($id)
    {
        if (isset($_POST['title'], $_POST['resume'], $_POST['author'], $_POST['editor'], $_POST['No_of_copies'])) {
            $post = array_map('trim', array_map('strip_tags', $_POST));
            $entityManager = Em::getEntityManager();
            $class = new ClassMetadata("App\Entity\Book");

            $bookRepository = new AbstractRepository($entityManager, $class);
            try {
                $book = $bookRepository->find($id);
                $book->setTitle($_POST['title']);
                $book->setResume($_POST['resume']);
                $book->setAuthor($_POST['author']);
                $book->setEditor($_POST['editor']);
                $book->setNoOfCopies($_POST['No_of_copies']);
                $entityManager->flush();
                echo "C'est bon mon reuf c'est update !";
                // Timer de 3 secondes avant de renvoyer sur la page d'acceuil
                header('Refresh: 3; URL=http://localhost/bibliotheque/index');
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
        } else
            throw new Exception("Error when retrieving registration fields", 1);
    }
}
