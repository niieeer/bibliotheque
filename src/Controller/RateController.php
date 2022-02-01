<?php

namespace App\Controller;

use App\Entity\Rate;
use App\Entity\Book;
use App\Helpers\EntityManagerHelper as Em;
use App\Models\AbstractRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

use Exception;

class RateController {

    public function showaddrate($id) {
        $entityManager = Em::getEntityManager();
        $class = new ClassMetadata("App\Entity\Book");
        $bookRepository = new AbstractRepository($entityManager, $class);
        try {
            $book = $bookRepository->find($id);
        } catch (\Throwable $th) {
            echo "$th->getMessage()";
        }
        include './src/vues/addRate.php';
    }

    public function addrate() {
        if (isset($_POST['comment'], $_POST['ratings'], $_POST['id'])) {
            $post = array_map('trim', array_map('strip_tags', $_POST));

            $entityManager = Em::getEntityManager();
            $class = new ClassMetadata("App\Entity\Book");
            $bookRepository = new AbstractRepository($entityManager, $class);

            $id_book = $_POST['id'];

            try {
                $book = $bookRepository->find($id_book);
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
            var_dump($book);
           $rate = new Rate($post['comment'], $post['ratings'], $book);

           try {
            $entityManager->persist($rate);
            $entityManager->flush();
            print("Note ajouter avec succès");
           } catch (\Throwable $th) {
               echo $th->getMessage();
           }
        } else
            throw new Exception("Error when retrieving registration fields", 1);
            
    }
}
