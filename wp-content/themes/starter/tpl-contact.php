<?php
/*
Template Name: contact
*/
?>

<?php get_header() ?>


<div class="container">
    <?php while (have_posts()) {
        the_post();
        echo wp_strip_all_tags(the_title());
        the_content();
       
    }?>
</div>










<?php get_footer() ?>
