<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pencarian GET</title>
</head>
<body>

    <h2>Form Pencarian</h2>

    <form method="GET" action="">

        <label for="kata">Kata kunci:</label>

        <input type="text" id="kata" name="kata">

        <button type="submit">Cari</button>

    </form>

    <?php
        if (isset($_GET["kata"])) {

            $kata = trim($_GET["kata"]);

            echo "<h3>Hasil Pencarian</h3>";

            echo "Kata kunci: " .
                htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
        }
    ?>

</body>
</html>