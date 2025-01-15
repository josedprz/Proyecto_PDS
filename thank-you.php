<?php
session_start();

if (!isset($_SESSION['form_submitted'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias | Patitas a Casa</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
    <style>
        .thank-you-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 50px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f2f6 100%);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(163, 92, 122, 0.1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .thank-you-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #A35C7A, #441752);
        }

        .thank-you-container h1 {
            font-size: 24px !important;
            line-height: 1.6 !important;
            color: #333333;
            position: relative;
            z-index: 1;
            margin: 0;
        }

        .paw-icon {
            position: absolute;
            width: 150px;
            height: 150px;
            opacity: 0.03;
            z-index: 0;
        }

        .paw-top-right {
            top: -20px;
            right: -20px;
            transform: rotate(45deg);
        }

        .paw-bottom-left {
            bottom: -20px;
            left: -20px;
            transform: rotate(-135deg);
        }
    </style>
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">Gracias</h2> 
            <p>Inicio / Gracias</p>  
        </div>

        <div class="thank-you-container">
            <img src="./paw-40.svg" alt="paw" class="paw-icon paw-top-right">
            <img src="./paw-40.svg" alt="paw" class="paw-icon paw-bottom-left">
            <h1>¡Gracias por tu noble gesto! Al reportar esta mascota encontrada, te has convertido en parte fundamental de una red de ayuda que trabaja para reunir a las mascotas perdidas con sus familias. Tu información ha sido registrada y será visible para todas las personas que están buscando a sus compañeros peludos en nuestra plataforma. Te contactaremos inmediatamente si alguien reconoce a esta mascota. Mientras tanto, la información que has proporcionado ayudará a que circule en nuestra comunidad. Si tienes cualquier actualización o información adicional, puedes contactarnos directamente. Recuerda que tu acción de hoy podría significar el reencuentro de una familia con su querida mascota. ¡Gracias por ser parte de esta cadena de ayuda!</h1>
        </div>

        <div class="long"></div>
        <?php include 'footer.php'; ?>
    </div>


    <script src="./scripts/script.js"></script>
</body>
</html>