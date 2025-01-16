<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patitas empolvadas | Reencuéntrate con tu mascota </title>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="./images/logos/logoPatitas.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="hero" class="nav-animate">
            <h3 class="sub-title animate__animated animate__fadeInUp">Bienvenidos a Patitas empolvadas!</h3>  
            <h2 class="main-title animate__animated animate__fadeInUp">Comprometidos a dar una mejor vida a los animalitos</h2> 
            <div class="btn-grp">
                <a href="./lost-pet.php" class="btn-primary hero-btn-1 animate__animated animate__fadeInUp">Perdí a mi mascota</a>
                <a href="./found-pet.php" class="btn-primary hero-btn-2 animate__animated animate__fadeInUp">Encontré una mascota</a>
            </div> 
            <img src="./images/hero-bg.png" alt="pet-image" class="pet-image animate__animated animate__fadeInUp">
            <h1 class="bg-text animate__animated animate__fadeInUp"></h1>
        </div>

        <div id="about">
            <div class="left-abt">
            <h1 class="bg-text">Amor</h1>
                <img src="./images/abt-section.png" alt="about" class="abt-img">
            </div>
            <div class="right-abt">
                <h3 class="sub-title">Sobre Patitas empolvadas</h3>  
                <h2 class="main-title">Patitas a casa</h2> 
                <p class="abt-content"> 
                    Bienvenidos a nuestra comunidad!
                    En esta página podrás saber sobre nosotros y nuestro labor con los animales.
                    A nosotros nos encanta ayudar a las mascotas, por esto mismo organizamos diferentes actividades en nuestras instalaciones, como bazares, eventos y algunos servicios como adopcion, refugio y esterilización. Mayormente en perros.
                </p>
                <a href="about-us.php" class="btn-primary">Leer más...</a>
            </div>
        </div>


        <div id="testimonial">
            <div class="uper-testi">
                <h1 class="main-title">Noticias recientes</h1>
                <p class="sub-title">Importante!</p>
            </div>
            <div class="lower-testi">
                <div class="owl-carousel">
                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">Perrita cruza de chihuahua perdido por la nueva unidad deportiva</p>
                                <div>
                                    <h3>Isabell Vazquez</h3>
                                    <h3>Comitán, Chiapas</h3>
                                </div>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                            </div>
                        </div>

                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">La cachorrita atropellada por la palapa de los morros el 28 de diciembre.
                                Necesitamos comprar antibiótico, gazas, vendas, antiséptico, pañales.</p>
                                <div>
                                    <h3>Isabell Vazquez</h3>
                                    <h3>Comitán, Chiapas</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">Hoy #Osito uno de los perritos de la plaza bulevar se fue aprueva de Adopción, manden buenas vibras para que sea su hogar difinitivo</p>
                                <div>
                                    <h3>Isabell Vazquez</h3>
                                    <h3>Comitán, Chiapas</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                                </div>
                            </div>
                        </div>
 
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>


    <script src="./scripts/script.js"></script>
    <script>
            // Testimonials

        var owl = $('.owl-carousel');
                owl.owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:2000,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:2,
                            nav:false
                        },
                        1000:{
                            items:3,
                            nav:true,
                        }
                    }
                });
                $('.play').on('click',function(){
                    owl.trigger('play.owl.autoplay',[1000])
                })
                $('.stop').on('click',function(){
                    owl.trigger('stop.owl.autoplay')
                })
        </script>
</body>
</html>