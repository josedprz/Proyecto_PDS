<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos | Patitas a casa</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">Contactanos</h2> 
            <p>Inicio / Contactanos</p>  
        </div>

        
        <div id="contact-container">
        <div class="contact-info">
            <h2>Contacto</h2>
            <p>Si tienes alguna pregunta o quieres saber más información sobre nosotros, contáctanos</p>
            <p>Email: Patitas a casa@gmail.com</p>
            <p>Teléfono: 55 56 54 35 72 </p>
        </div>
        <div class="contact-form">
            <h3>Envianos un mensaje!</h3>
            <form>
                <input type="text" placeholder="Your Name" id="name">
                <input type="email" placeholder="Your Email" id="email">
                <textarea placeholder="Your Message" id="message"></textarea>
                <button type="submit" class="btn-primary">Enviar</button>
            </form>
        </div>
    </div>



        <?php include 'footer.php'; ?>
    </div>


    <script src="./scripts/script.js"></script>
</body>
</html>