<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros | Patitas empolvadas</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/logoPatitas.png" type="image/png">
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
                <h3 class="sub-title">Sobre Patitas empolvasas</h3>  
                <h2 class="main-title"></h2> 
                <p class="abt-content">
                Bienvenidos a nuestra comunidad!
                    En esta página podrás saber sobre nosotros y nuestro labor con los animales.
                    <br><br>
                    A nosotros nos encanta ayudar a las mascotas, por esto mismo organizamos diferentes actividades en nuestras instalaciones, como bazares, eventos y algunos servicios como adopcion, refugio y esterilización. Mayormente en perros.
                     <br><br>
                    
                </p>
                <div class="btn-grp">
                    <a href="./lost-pet.php" class="btn-primary hero-btn-1">Perdí a mi mascota</a>
                    <a href="./found-pet.php" class="btn-primary hero-btn-2">Encontré una mascota</a>
            </div>

            </div>
        </div>
        <div id="about">  
            <div class="right-abt">
                <h3 class="sub-title">Descubre mas sobre Patitas empolvadas</h3>  
                <h2 class="main-title">Nuestra mision</h2> 
                <p class="abt-content">
                Nuestra misión es ser un puente de esperanza para los animales en situación de vulnerabilidad, enfocándonos especialmente en los perros que necesitan una segunda oportunidad. A través de nuestra página, buscamos:
                    <ul>
                        <li><strong>Fomentar el bienestar animal</strong>
                        </li>
                        <li><strong>Promover la solidaridad comunitaria</strong>
                        </li>
                        <li><strong>Fortalecer la conexión entre personas y animales</strong>
                        </li>
                        <li><strong>Crear conciencia y educación</strong>
                        </li>
                    </ul>
                </p>
            </div>
            <div class="left-abt">
                <img src="./images/mission_img.jpg" alt="mission" style="margin-bottom:65px">
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


        <div id="faq-container">
            <div class="uper-faq">
                <h1 class="main-title">Preguntas Frecuentes</h1>
                <p class="sub-title">Tus preguntas, nuestras respuestas.</p>
            </div>
            <div class="lowerfaq">
                <div class="lower-left-faq">
                    <div class="faq">
                        <button class="accordion">1. ¿Qué es Patitas enpolvadas?</button>
                        <div class="panel">
                            <p>Patitas empolvadas es una plataforma impulsada por la comunidad dedicada a reunir mascotas perdidas con sus familias.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">2. ¿Cómo funciona Patitas empolvadas?</button>
                        <div class="panel">
                            <p>Si has perdido una mascota, puedes crear una publicación de 'Mascota Perdida' con los detalles sobre tu mascota. Si has encontrado una mascota, puedes crear una publicación de 'Mascota Encontrada'. La comunidad de Patitas empolvadas ayuda a conectar a las mascotas perdidas con sus dueños.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">3. ¿Patitas empolvadas es gratuito?</button>
                        <div class="panel">
                            <p>Patitas empolvadas no es dl todo gratuito, tenemos que recibir donaciones para poder seguir con nuestra labor de ayudar a los animales</p>
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
                        <button class="accordion">5. ¿Cómo puedo apoyar la misión de Patitas empolvadas?</button>
                        <div class="panel">
                            <p>Puedes apoyarnos siendo un miembro activo de nuestra comunidad, compartiendo tus historias, ayudando a reunir mascotas perdidas y promoviendo la tenencia responsable de mascotas. ¡Cada acción cuenta!</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">6. ¿Mi información personal está segura en Patitas empolvadas?</button>
                        <div class="panel">
                            <p>La información personal se mantiene segura y solo se comparte con quienes la necesiten para facilitar el proceso de reencuentro.</p>
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