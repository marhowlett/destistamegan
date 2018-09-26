<?php
    /* Template Name: Inicio */ 
    get_header();
?>

  <section id="inicio_sl" class="template-section padding-50">
        <h2>Implante Dental</h2>
        <h3>¿Por qué esperar más?</h3>
        <p>desde <span>$8,875.00</span> MXN</p>
        <a href="#" class="btn">¡Me interesa!</a>
        
    </section>
    <section id="paquetes" class="template-section padding-50">
        <div class="contenedor">
            <h2>PAQUETES</h2>
            <?php echo do_shortcode('[vc_row][vc_column][woodmart_products columns="3"][/vc_column][/vc_row]'); ?>
        </div>
    </section>
<?php 
    get_footer();
?>