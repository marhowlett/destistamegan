<?php
    /* Template Name: Home */ 
    get_header();
?>

  <section id="inicio_sl" class="template-section padding-50">
       <div class="comienzo">
        <h2>Implante Dental</h2>
        <h3>¿Por qué esperar más?</h3>
        <p>desde <b>$8,875.00</b> MXN</p>
        <a href="#" class="btn aqua">¡Me interesa!</a>
        </div>
    </section>
    <section id="paquetes" class="template-section padding-50">
        <div class="contenedor">
            <h2>PAQUETES</h2>
            <?php echo do_shortcode(''); ?>
        </div>
    </section>
    <section>
    <div id="servicios" class="template-section">
         <h2 class="valores_titulo">SERVICIOS</h2>
         <h3>Contamos con atención personalizada cubriendo <br>
todas las áreas odontológicas</h3>
         <div class="grid">
         <div  class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/005-teeth-1.png" alt="diagnostico">
         <h3>Diagnóstico y Prevención</h3>
         <p>Una valoración integral y limpieza cada 6 meses ayuda a prevenir enfermedades en tu boca,  mantener tus encías y dientes sanos.</p>
<p>Consiste en una sola cita donde también te orientamos para que lleves un buen cuidado de tu boca en casa.</p>
         </div>
         <div  class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Copia de 001-dental.png" alt="">
         <h3>Implante Dental</h3>
          <p>Son la mejor opción para recuperar la función y estética de uno o varios dientes perdidos e incluso la dentadura completa. Existen diferentes implantes con tamaños y formas variadas que se adecúan a cada caso en particular.
</p>
<p>Se requiere de una cita de diagnóstico previa para determinar la condición individual de cada paciente.</p></div>
   
    <div  class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/004-dentist.png" alt="">
         <h3>Odontología Restauradora
</h3>
          <p>Existen diferentes opciones para recuperar la forma, función y estética de un diente lastimado o perdido. 
</p>
<p>
Desde opciones fijas y removibles como una resina o corona hasta una prótesis parcial o total removible (placa).
</p>
<p>
Con nuestra asesoría podrás elegir la que mejor se adapte a tu problema y estilo de vida.</p></div>
    </div>
    </div>
    <div id="servicios" class="template-section">
         <div class="grid">
         <div  class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/002-gum.png" alt="diagnostico">
         <h3>Periodoncia</h3>
         <p>UEn esta área nos enfocamos en la salud de tus encías y del tejido de soporte del diente (ligamento periodontal y hueso). 
</p>
<p>
Ayudando a prevenir y controlar a la enfermedad periodontal.</p>
         </div>
         <div  class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Copia de 003-teeth.png" alt="">
         <h3>Atención Integral para niños</h3>
          <p>Nos encargamos del diagnóstico, prevención, tratamiento y control de los problemas de salud bucal de los más pequeños de casa. </p></div>
   
    <div  class="col2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/007-teeth-3.png" alt="">
         <h3>Atención a
Urgencias

</h3>
          </div>
    </div>
    </div>
</section>


    <section id="doctora" class="template-section">
        <div class="caracteristicas1">
        <div class="contenedor">
            
            <div class="grid">
               
                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/doctora.png" alt="Doctora">
                </div>
                <div class="col">
                 <h2 class="tipo">Dra. Megan González Soto</h2>
                  <p>Egresada de la Facultad de Odontología UNAM </p>
                   <h3>Misión:</h3>
                    <p class="azul">
                       
                    Brindar un servicio dental integral personalizado y comprometido con el cuidado y prevención de la salud bucal para lograr la satisfacción y bienestar del paciente. 
                        <h3>Visión:</h3>
                    <p class="azul">
                       
                    Fomentar la educación en cuanto a la prevención, mejorando así el nivel de salud bucal de cada uno de nuestros pacientes.
            
                        
                    </p>
                    <a href="#" class="btn aqua">¡Contactar!</a>
                </div>
            </div>
        </div>
        </div>
</section>
    <section id="colaborador" class="template-section">
        <div class="caracteristicas1">
        <div class="contenedor">
            
            <div class="grid">
               
                <div class="col">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/colaborador.png" alt="Doctora">
                </div>
                <div class="col">
                 <h2>COLABORADORES</h2>
                 
                   <h3>Dr. Santiago H. Díaz Prieto</h3>
                    <p>
                       <ul>
                           <li>
                            Egresado de la Facultad de Odontología UNAM.
                           </li>
                           <li> Especialista en Periodoncia e Implantología en la
    División de Estudios de Posgrado e Investigación. 
    UNAM.</li>
                       </ul>

   
                
                </div>
            </div>
        </div>
        </div>
</section>

 <section id="contacto" class="template-section padding-50">

        <div class="contenedor">

            <div class="grid">

                <div class="col prueba_col">
                   <h2>¡Agenda tu cita!</h2>
                    <?php echo do_shortcode( '[caldera_form id="CF5b91689843b49"]' ); ?>
                </div>

                <div class="col">

                    <div class="datos">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/001-whatsapp.png" alt="telefono"> (044) 55 44 95 61 65
                    </div>


                    <div class="grid datos">
                        <div class="info">
                            Periférico sur 5264, <br>
Col. Pedregal de Carrasco. <br>Coyoacán, C.P. 04700 CDMX.
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>
<?php 
    get_footer();
?>