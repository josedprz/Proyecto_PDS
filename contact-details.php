<?php
    include("connection.php");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $petId = $_GET['id'];

        // Query para obtener los detalles de contacto de la persona que ha perdido la mascota
        $sql = "SELECT * FROM lost_request WHERE id = " . $petId;
        $result = $connection->query($sql);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Comienza la estructura HTML
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Contacto | Patitas a Casa</title>
                <link rel="stylesheet" href="../style/style.css">
                <link rel="icon" href="./images/logos/icon.png" type="image/png">
            </head>
            <body>
                <div id="main">
                    <?php include 'header.php'; ?>

                    <div id="bread">
                        <h2 class="main-title">Datos de Contacto</h2> 
                        <p>Inicio / <a href="single-lost-pet.php?id=<?php echo $petId; ?>"><?php echo $row['pet_name']; ?></a> / Contacto</p>
                    </div>

                    <div class="main-product">
                        <div class="left-single">
                            <h1 class="single-title"><?php echo $row['pet_name']; ?></h1>
                            <h4 class="single-category">Información del dueño</h4>
                            <p><strong>Nombre:</strong> <?php echo $row['name']; ?></p>
                            <p><strong>Correo electrónico:</strong> <?php echo $row['email']; ?></p>
                            <p><strong>Teléfono:</strong> <?php echo $row['phno']; ?></p>
                            <p><strong>Dirección:</strong> <?php echo $row['address']; ?></p>
                        </div>
                    </div>
                </div>

                <?php include 'footer.php'; ?>
            </body>
            </html>
            <?php
        } else {
            echo "<p>No se encontró la mascota.</p>";
        }
    } else {
        echo "<p>Falta el ID de la mascota.</p>";
    }

    mysqli_close($connection);
?>