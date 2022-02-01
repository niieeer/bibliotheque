<?php include './src/Vues/head.php'; ?>

<body>
    <?php include './src/Vues/header.php'; ?>
    <main>
        <form method="post">
            <h2>Ajouter un livre !</h2>
            <input type="text" name="title" id="" placeholder="title" required>
            <textarea type="text" name="resume" id="" placeholder="resume" required></textarea>
            <input type="text" name="author" id="" placeholder="author" required>
            <input type="text" name="editor" id="" placeholder="editor" required>
            <input type="number" name="No_of_copies" id="" placeholder="nombre d’exemplaires disponibles" required>
            <input type="submit" name="" id="">
            <p>------------------------</p>
        </form>
    </main>
    <?php include './src/Vues/footer.php'; ?>
</body>

</html>