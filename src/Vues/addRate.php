<?php include './src/Vues/head.php'; ?>
<body>
    <?php include './src/Vues/header.php'; ?>
    <main>
        <form method="post">
            <label for="comment">Comment :</label>
            <textarea name="comment" id="" cols="30" rows="10" required></textarea>
            <label for="ratings">Ratings :</label>
            <input type="number" name="ratings" id="" min="0" max="5" required>
            <input type="hidden" name="id" value="<?= $book->getId(); ?>">
            <input type="submit">
        </form>
    </main>
    <?php include './src/Vues/footer.php'; ?>
</body>

</html>