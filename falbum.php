<?php get_header(); ?>
<div id="content" class="narrowcolumn">
<h2>Photos</h2>
<br />
   <!-- FAlbum Start -->
      <script type="text/javascript" src="<?php echo get_settings('siteurl'); ?>/wp-content/plugins/falbum/res/falbum.js"></script>
      <script type="text/javascript" src="<?php echo get_settings('siteurl'); ?>/wp-content/plugins/falbum/res/overlib.js"></script>
      <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>

      <div id="content" class="narrowcolumn">
        <?php echo $falbum->show_photos(); ?>
      </div>
   <!-- FAlbum End -->
   </div> 

<?php get_footer(); ?>
