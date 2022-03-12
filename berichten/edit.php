<!doctype html>
<html lang="nl">

<head>
    <title>Prikbord / Aanpassen</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Aanpassen bericht</h1>

        <?php
        //Haal id uit de URL
        $id = $_GET['id'];

        //Voer query uit
        require_once '../backend/conn.php';
        $query = "SELECT * FROM berichten WHERE id = :id";
        //(maak het 5-stappenplan nog af)
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $item = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

        <!-- Formulier voor edit: -->
        <form action="../backend/berichtenController.php" method="POST">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text"name="title"value="<?php echo$item['title'];?>">
            <div class="form-group">
                <label for="content">Berichten</label>
                <textarea rows="4" cols="50" name="content"><?php echo$item['content'];?></textarea>
            <div class="form-group">
                <input type="submit" value="Update">
            
            <!-- Voeg hier de andere velden toe -->
                
        </form>

        <!-- Formulier voor delete: -->
        <form action="..." method="POST">
            <input type="hidden" name="action" value="delete">
            <!-- Voeg hier nog een veld toe -->
            <input type="submit" value="Verwijder bericht">
        </form>

    </div>  

</body>

</html>
