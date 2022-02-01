<?php include './src/Vues/head.php'; ?>

<body>
    <?php include './src/Vues/header.php'; ?>
    <main>
        <form method="post">
            <h2>Modifier le livre !</h2>
            <input type="text" name="title" id="" value="<?= $book->getTitle() ?>" required>
            <textarea type="text" name="resume" id="" value="resume" required><?= $book->getResume() ?></textarea>
            <input type="text" name="author" id="" value="<?= $book->getAuthor() ?>" required>
            <input type="text" name="editor" id="" value="<?= $book->getEditor() ?>" required>
            <input type="number" name="No_of_copies" id="" value="<?= $book->getNoOfCopies() ?>" required>
            <input type="submit" name="" id="">
            <p>------------------------</p>
        </form>
    </main>
    <?php include './src/Vues/footer.php'; ?>
</body>

</html>