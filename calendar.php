<?php
/*
Template Name: Calendar
*/
?><?php get_header(); ?>
<div id="content" class="narrowcolumn">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
    <h2>
     What's Happening This Week
    </h2>
    <div class="entrytext">
      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
      <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<h2>Full Calendar</h2>
 <iframe src="http://www.google.com/calendar/embed?src=f332nnev5qu9b216giiv04rvh4%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="470" height="600" frameborder="0" scrolling="no"></iframe>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
