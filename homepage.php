<?php
/*
Template Name: Home Page
*/
?><?php get_header(); ?>
<div id="content" class="narrowcolumn">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
    <h2>
      <?php the_title(); ?>
    </h2>
    <div class="entrytext">
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
 
 <div id="homepage_news">
 <div class="alt">
 <h2>Recent News</h2></div>
 <!-- start new query for recent posts-->
  
  <?php $my_query = new WP_Query('category_name=news&showposts=3'); ?>
<ul>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <li>
     <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"> <?php the_title(); ?></a>- <small><?php the_time('M jS') ?></small>
   </li>
  <!-- Do special_cat stuff... -->
<?php endwhile; ?>
</ul>
</div>
<div id="homepage_pastor">
<div class="alt">
 <h2>Recent Thoughts from the Pastor</h2></div>

  <?php $my_query2 = new WP_Query('category_name=pastors-desk&showposts=3'); ?>
<ul>
<?php while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
<li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> - <small><?php the_time('M jS') ?></small>
</li>

  <!-- Do special_cat stuff... -->
<?php endwhile; ?>
</ul>
</div>
<div style="clear:left;"></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
