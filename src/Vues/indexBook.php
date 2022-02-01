<?php include './src/Vues/head.php'; ?>

<body>
    <?php include './src/Vues/header.php'; ?>
    <main>
        <?php
        foreach ($book as $k => $book) {

            $author = $book->getAuthor();
            $editor = $book->getEditor();
            $title = $book->getTitle();
            $resume = $book->getResume();
            $NoOfCopies = $book->getNoOfCopies();
            $id = $book->getId();
            echo
            "<table border='1'>
                <tr>
                    <th>Titre</th>
                    <th>Resumer</th>
                    <th>Auteur</th>
                    <th>Editeur</th>
                    <th>Nombre de copies</th>
                </tr>
                <tr>
                    <td>$title</td>
                    <td>$resume</td>
                    <td>$author</td>
                    <td>$editor</td>
                    <td>$NoOfCopies</td>
                </tr>
            </table>
            <a href='http://localhost/bibliotheque/addrate/$id'>ajouter une note</a>
            <a href='http://localhost/bibliotheque/modifybook/$id'>edit</a>
            <a href='http://localhost/bibliotheque/deletebook/$id' onclick='return ConfirmDelete()'>delete</a>";
        }
        ?>
    </main>
    <br>
    <?php include './src/Vues/footer.php'; ?>
</body>
<script src="./script/alert.js"></script>
</html>