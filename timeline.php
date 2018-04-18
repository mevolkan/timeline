<?php
   /*
   Plugin Name: Timeline by Volkan
   Plugin URI: http://volkan.infinitegreenbusiness.com
   description: >-blah blah blah
  a plugin to create awesome timelines
   Version: 1.2
   Author: Volkan
   Author URI: http://volkan.infinitegreenbusiness.com
   License: GPL2
   */


if ( !defined('ABSPATH')){
    exit;
}


//add the javascript and css to display the timeline

function timeline_resources() {
    wp_register_style( 'timeline_CSS', plugin_dir_url( __FILE__ ) . 'css/timeline.css' );

   wp_register_style( 'timeline_reset_CSS', plugin_dir_url( __FILE__ ) . 'css/reset.css' );
   wp_enqueue_style( 'timeline_reset_CSS' );
   wp_enqueue_style( 'timeline_CSS' );



   wp_enqueue_script( 'timeline_JS', plugin_dir_url( __FILE__ ) . 'js/timeline.js', array( 'jquery' ) );
}

add_action('wp_enqueue_scripts', 'timeline_resources');

//[timeline] is the shortcode
function timeline_func( $atts ){
   $displayTimeline = '

<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic" rel="styleshee" type="text/css">

   <link rel="stylesheet" href="wp-content/plugins/timeline/css/reset.css"> <!-- CSS reset -->

   <script src="wp-content/plugins/timeline/js/modernizr.js"></script> <!-- Modernizr -->


<section class="cd-horizontal-timeline">
   <div class="timeline">
      <div class="events-wrapper">
         <div class="events">
            <ol>
               <li><a href="#0" data-date="16/01/1977" class="selected">16 Jan<br> 1977</a></li>
               <li><a href="#0" data-date="28/02/1982">28 Feb<br> 1982</a></li>
               <li><a href="#0" data-date="20/04/1995">20 Mar<br> 1995</a></li>
               <li><a href="#0" data-date="20/05/2003">20 May<br> 2003</a></li>
               <li><a href="#0" data-date="09/07/2012">09 Jul<br> 2012</a></li>
               <li><a href="#0" data-date="30/08/2014">30 Aug<br> 2014</a></li>
               <li><a href="#0" data-date="15/09/2015">15 Sep<br> 2015</a></li>
               <li><a href="#0" data-date="01/11/2016">01 Nov<br> 2016</a></li>
               <li><a href="#0" data-date="10/12/2017">10 Dec<br> 2017</a></li>
            </ol>

            <span class="filling-line" aria-hidden="true"></span>
         </div> <!-- .events -->
      </div> <!-- .events-wrapper -->
         
      <ul class="cd-timeline-navigation">
         <li><a href="#0" class="prev inactive">Prev</a></li>
         <li><a href="#0" class="next">Next</a></li>
      </ul> <!-- .cd-timeline-navigation -->
   </div> <!-- .timeline -->

   <div class="events-content">
      <ol>
         <li class="selected" data-date="16/01/1977">
            <h3>Zenith Steel Established</h3>
            <em>January 16th, 1977</em>
            <p>   
               Zenith Steel Fabricators Ltd started at a small office made of Prefabricated Timber building along Kitui Road, Nairobi Kenya. The company was co-founded by Mr. Abbas T Biviji and Mr. Jayantilal Gohil.
            </p>
         </li>

         <li data-date="28/02/1982">
            <h3>Relocation to Enterprise Road</h3>
            <em>February 28th, 1982</em>
            <p>   
               Zenith Steel Fabricators Ltd moved to Enterprise Road, Nairobi Kenya where it is currently situated.

            </p>
         </li>

         <li data-date="20/04/1995">
            <h3>Expansion outside Nairobi</h3>
            <em>March 20th, 1995</em>
            <p>   
               Zenith Steel Fabricators Ltd began to undertake steel projects outside Nairobi, expanding its horizon throughout Kenya. Projects included Godowns and Warehouses, Mezzanine Floors, Stadia, Roofing Steelwork, and Greenhouses.

            </p>
         </li>

         <li data-date="20/05/2003">
            <h3>Expansion outside Kenya</h3>
            <em>May 20th, 2003</em>
            <p>   
               Zenith Steel Fabricators expanded their Projects horizon outside Kenya, particularly to East and Central Africa. The company has since been a dominant player in Structural Steel solutions within this region.

            </p>
         </li>

         <li data-date="09/07/2012">
            <h3>Fitting of Automated Plasma Machine</h3>
            <em>July 9th, 2012</em>
            <p>   
               An Automated Plasma Cutting Machine was fitted at the Company’s workshop along Enterprise Road. This Machine is used for fabrication of Castellated Beams which have increased economic, aesthetic and serviceability uses compared to solid steel beams.

            </p>
         </li>

         <li data-date="30/08/2014">
            <h3>Cold roll division</h3>
            <em>August 30th, 2014</em>
            <p>   
              Cold roll division to profile PPGI roofing sheets. Introduced a line for Pressing Panels for Steel Water Tanks.

            </p>
         </li>

         <li data-date="15/09/2015">
            <h3>Expanding cold rolling</h3>
            <em>September 15th, 2015</em>
            <p>   
               Expanded cold rolling to decking sheets
            </p>
         </li>

         <li data-date="01/11/2016">
            <h3>Commisioning of a fully automatd fabrication plant</h3>
            <em>November 1st, 2016</em>
            <p>   
               Zenith Steel Fabricators commissioned the only fully automated fabrication plant in Africa sitting on 25 acres of land in Isinya, Kajiado County in Kenya. The Machine operations utilize Building Information Modelling (BIM) with Steel Projects Software as the Enterprise Resource Planning (ERP) interface. The Automated system is geared to enable better quality and faster delivery of products as per client requirements. It has automatic shot blasting, cutting, and drilling lines.
            </p>
         </li>

         <li data-date="10/12/2017">
            <h3>Development of a cold rolling line</h3>
            <em>December 10th, 2017</em>
            <p>   
              Developed a cold rolling line to manufcature GI purlins

            </p>
         </li>
      </ol>
   </div> <!-- .events-content -->
</section>
 Volkan dESIGN

   ';
   return $displayTimeline;
}
add_shortcode( 'timeline', 'timeline_func' );


?>