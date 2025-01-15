<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">Sobre nosotros</h2> 
            <p>Inicio / Sobre nosotros</p>  
        </div>

        <div id="about-page">
            <div class="left-abt">
            <h1 class="bg-text">Mascotas</h1>
                <img src="./images/abt-section.png" alt="about" class="abt-img">
            </div>
            <div class="right-abt">
                <h3 class="sub-title">Sobre PawFinder</h3>  
                <h2 class="main-title">PawFinder</h2> 
                <p class="abt-content">
                    Bienvenidos a nuestra comunidad.
                    Sabemos que nuestra mascota es realmente importante para nosotros, son un miembro más de la familia donde muchas veces encontramos refugio.
                    Seguramente, cuando desafortunadamente se extravían queremos hacer todo lo posible para encontrarla, y tenemos la esperanza de poder hacerlo lo más pronto posible.
                    Por lo cual, el objetivo de esta organización es poder ayudar a las personas que han perdido a alguna mascota a que se puedan reencontrar de nuevo con ella.
                     <br><br>
                    Esta página está dedicada a ello, donde los usuarios pueden comunicarse, compartir historias, encontrar apoyo y esperanza.
                     <br><br>
                    Te hacemos una invitación a unirte a nosotros y poder ser testigo cada reencuentro.
                </p>
                <div class="btn-grp">
                    <a href="./lost-pet.php" class="btn-primary hero-btn-1">Perdí a mi mascota</a>
                    <a href="./found-pet.php" class="btn-primary hero-btn-2">Encontré una <br>mascota</a>
            </div>
            
            </div>
        </div>
        <div id="about">  
            <div class="right-abt">
                <h3 class="sub-title">Descubre PawFinder</h3>  
                <h2 class="main-title">Nuestra Misión</h2> 
                <p class="abt-content">En PawFinder, nuestra misión inquebrantable es reunir a cada mascota perdida con su familia amorosa. Creemos que las mascotas son más que simples animales; son miembros queridos de la familia, y su seguridad y felicidad son profundamente importantes. Nuestra plataforma es un refugio para los amantes de las mascotas, un lugar donde la compasión y la comunidad se unen. Estamos comprometidos a crear felicidad asegurando que las mascotas encuentren su camino de regreso a donde pertenecen – en el abrazo amoroso de sus dueños.
                <br><br>
                PawFinder no es solo un proyecto; es un conmovedor viaje que reaviva los lazos de amor y compañerismo entre las mascotas y sus familias. Nuestra medida de éxito es la alegría en cada reencuentro, las colas moviéndose y el renacer de esos momentos preciados que definen la relación especial entre las mascotas y sus dueños. Únete a nosotros en esta misión, y hagamos que más colas se muevan y corazones sonrían juntos.</p>
            </div>
            <div class="left-abt">
                <img src="./images/mission_img.jpg" alt="mission" style="margin-bottom:65px">
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
                                    <h3>Karina Gonzáles</h3>
                                    <h3>Cuauhtémoc CDMX</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">

                                </div>
                            </div>
                        </div>
 
                </div>
            </div>
        </div> 


        <div id="faq-container">
            <div class="uper-faq">
                <h1 class="main-title">Preguntas Frecuentes</h1>
                <p class="sub-title">Tus preguntas, nuestras respuestas.</p>
            </div>
            <div class="lowerfaq">
                <div class="lower-left-faq">
                    <div class="faq">
                        <button class="accordion">1. ¿Qué es PawFinder?</button>
                        <div class="panel">
                            <p>PawFinder es una plataforma impulsada por la comunidad dedicada a reunir mascotas perdidas con sus familias.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">2. ¿Cómo funciona PawFinder?</button>
                        <div class="panel">
                            <p>Si has perdido una mascota, puedes crear una publicación de 'Mascota Perdida' con los detalles sobre tu mascota. Si has encontrado una mascota, puedes crear una publicación de 'Mascota Encontrada'. La comunidad de PawFinder ayuda a conectar a las mascotas perdidas con sus dueños.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">3. ¿PawFinder es gratuito?</button>
                        <div class="panel">
                            <p>Sí, PawFinder es gratuito. Nuestro principal objetivo es devolver a las mascotas a casa, y creemos en el poder del apoyo comunitario y la compasión.</p>
                        </div>
                    </div>
                </div>
                
                <div class="lower-right-faq">
                    <div class="faq">
                        <button class="accordion">4. ¿Cómo puedo publicar una mascota perdida o encontrada?</button>
                        <div class="panel">
                            <p>Para publicar, simplemente haz clic en 'Mascota Perdida' o 'Mascota Encontrada' en nuestro sitio web. Completa los detalles necesarios, incluyendo una descripción y una foto si es posible. Tu publicación será visible para nuestra comunidad.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">5. ¿Cómo puedo apoyar la misión de PawFinder?</button>
                        <div class="panel">
                            <p>Puedes apoyarnos siendo un miembro activo de nuestra comunidad, compartiendo tus historias, ayudando a reunir mascotas perdidas y promoviendo la tenencia responsable de mascotas. ¡Cada acción cuenta!</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">6. ¿Mi información personal está segura en PawFinder?</button>
                        <div class="panel">
                            <p>Nos tomamos la privacidad de los usuarios muy en serio. La información personal se mantiene segura y solo se comparte con quienes la necesiten para facilitar el proceso de reencuentro.</p>
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