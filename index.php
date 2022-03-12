<!doctype html>
<html lang="nl">

<head>
    <title>Prikbord</title>
    <link rel="stylesheet" href="css/main.css">
    <?php require_once 'head.php'; ?>
</head>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container home">

        <p>Berichten:</p>

        <?php
        require_once 'backend/conn.php';
        $query = "SELECT * FROM berichten";
        $statement = $conn->prepare($query);
        $statement->execute();
        $berichten = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <ul>
            <!-- Schrijf hier een foreach die door $berichten loopt -->
            <li>Hier komt een lijst met berichten.</li>
        </ul>
        <table>
            <tr>
                <th>Titel</th>
                <th>Bericht</th>
                <th>Schrijver</th>
                <th>Aanpassen</th>
            </tr>
            <?php $number = 0; ?>
            <?php foreach($berichten as $melding): ?>
                <tr>
                    <?php $number += 1; ?>
                    <td><?php echo $melding['title']; ?></td>
                    <td><?php echo $melding['content']; ?></td>
                    <td><?php echo $melding['author']; ?></td>
                    <td><a href="berichten/edit.php?id=<?php echo $number;?>">Aanpassen</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>