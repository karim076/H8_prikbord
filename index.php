<!doctype html>
<html lang="nl">

<head>
    <title>Prikbord</title>
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

    </div>

</body>

</html>
