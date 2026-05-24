<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
</head>
<body>
    <header>
        <h1>Strona logowanie</h1>
    </header>
    <form action="index.php" method="post">
        <label>Imie: <input type="text" name="imie"></label>
        <label>Hasło: <input type="password" name="haslo"></label>
        <input type="submit" value="Wyślij" name="guzik">
        <?php
            if(isset($_POST['guzik'])){
                $imie = $_POST['imie'];
                $haslo = $_POST['haslo'];

                echo "Użytkownik: ".$imie." z hasłem: ".$haslo.".";
            }
        ?>
    </form>
</body>
</html>