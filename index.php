<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PawFinder Reencuéntrate con tu mascota </title>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="hero" class="nav-animate">
            <h3 class="sub-title animate__animated animate__fadeInUp">Bienvenidos a PawFinder!</h3>  
            <h2 class="main-title animate__animated animate__fadeInUp">Comprometidos a reunir a las mascotas perdidas con sus familias</h2> 
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
                <h3 class="sub-title">Sobre PawFinder</h3>  
                <h2 class="main-title">PawFinder</h2> 
                <p class="abt-content"> Bienvenidos a nuestra comunidad.
                    Sabemos que nuestra mascota es realmente importante para nosotros, son un miembro más de la familia donde muchas veces encontramos refugio.
                    Seguramente, cuando desafortunadamente se extravían queremos hacer todo lo posible para encontrarla, y tenemos la esperanza de poder hacerlo lo más pronto posible.
                    Por lo cual, el objetivo de esta organización es poder ayudar a las personas que han perdido a alguna mascota a que se puedan reencontrar de nuevo con ella.
                    Esta página está dedicada a ello, donde los usuarios pueden comunicarse, compartir historias, encontrar apoyo y esperanza.
                    Te hacemos una invitación a unirte a nosotros y poder ser testigo cada reencuentro.
                </p>
                <a href="about-us.php" class="btn-primary">Leer más...</a>
            </div>
        </div>


        <div id="testimonial">
            <div class="uper-testi">
                <h1 class="main-title">Testimonios</h1>
                <p class="sub-title">Testimonios de nuestra comunidad</p>
            </div>
            <div class="lower-testi">
                <div class="owl-carousel">
                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">"PawFinder me ayudó bastante a mantener la esperanza de poder reencontrarme con mi perrito Tomas, hace unos meses que lo había perdido y estaba perdiendo la fe de volver a verlo otra vez, el es mi mejor amigo y agradezco a dios que lo haya encontrado."</p>
                                <div>
                                    <h3>Eduardo Garcia</h3>
                                    <h3>Azcapotzalco, CDMX</h3>
                                </div>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                            </div>
                        </div>

                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">"PawFinder me salvó, había perdido a mi perrita Luna cuando paseaba por el parque, pegué muchos carteles por toda la ciudad pero ninguna llamada, y las pocas que recibía, resultaba no ser Luna después de todo, pero gracias a que encontré esta página, pude por fin reencontrarme con ella"</p>
                                <div>
                                    <h3>Paulina Gomez</h3>
                                    <h3>Iztapalapa. CDMX</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">"PawFinder fue mi salvación cuando Max desapareció. En medio del bullicio de la Ciudad de México, estaba llena de preocupación. La sección de 'Mascotas Encontradas' en PawFinder me conectó rápidamente con el dueño de Max. Ahora, Max está de vuelta con su familia, y todo se lo debo a PawFinder. ¡Gracias!"</p>
                                <div>
                                    <h3>Karina Gonzles</h3>
                                    <h3>Cuauhtémoc CDMX</h3>
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