<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>


<?php get_template_part('parts/showroom'); ?>


<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/showroom/PTGuiViewer.js"></script>
<script type="text/javascript">
//<![CDATA[

// create a new viewer object:
var viewer=new PTGuiViewer();

// point to the location of the flash viewer (PTGuiViewer.swf)
// this should be relative to the location of the current HTML document
viewer.setSwfUrl("PTGuiViewer.swf");

// What to do if both Flash and the native viewer can be used:
// use viewer.preferHtmlViewer() if you prefer to use the native HTML viewer 
// use viewer.preferFlashViewer() if you prefer to use the native HTML viewer 
// when Flash is available.
viewer.preferHtmlViewer();
// viewer.preferFlashViewer();

// set parameters for the viewer:
viewer.setVars({
  pano: "http://localhost/KEMPHAUS/wp-content/themes/kemphaus/assets/showroom/DJI_0089 Panorama BRANDED_",
  format: "14faces",
  pan: 0,
  minpan: -180,
  maxpan: 180,
  tilt:0,
  mintilt: -90,
  maxtilt: 90,
  fov: 90,
  minfov: 10,
  maxfov: 120,
  autorotatespeed: 1,
  autorotatedelay: 5,
  maxiosdimension: 567,
  showfullscreenbutton_flash: 1,
  showfullscreenbutton_html: 1,
  enablegyroscope: 1
});

// and embed the viewer
// The remainder of this HTML document should contain an element with the id mentioned here
// (e.g. <div id="..."> )
// The viewer will be embedded as a child of that element

viewer.embed("mypanoviewer");

//]]>
</script>


<?php get_footer('contact'); ?>
