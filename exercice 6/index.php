





<?php
require_once '../utils/connect-db.php';

$sql = "SELECT  title, performer,date,startTime FROM shows;";

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
    
        <h1>Liste des spectacles :</h1>

        <?php
        foreach ($users as $user) {
        ?>
        <ol>
            <li>Nom du spectacle : <?= $user['title']  ?> </li>
            <li> Performance : <?= $user['performer']  ?>  </li>
            <li> Date : <?= $user['date']  ?>  </li>
            <li> Heure : <?= $user['startTime']  ?>  </li>
        </ol>
        <br>
        <?php
        }

        ?>

    

</body>

</html>
