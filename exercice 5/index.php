





<?php
require_once '../utils/connect-db.php';

$sql = "SELECT * FROM clients WHERE lastName LIKE 'M%';";

try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>
        <h1>Liste des Noms qui commencent par M :</h1>

        <?php
        foreach ($users as $user) {
        ?>
            <li>Nom : <?= $user['lastName']  ?> </li>

        <?php
        }

        ?>

    </ol>

</body>

</html>
