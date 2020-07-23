<?php
/*
Template Name: information
*/

?>

<?php get_header() ?>
Toutes les informations sur mon activité de développeur


<div class="container">
    <?php while (have_posts()) {
        the_post();
        echo wp_strip_all_tags(the_title());
        the_content();
        the_author();
        the_date();
    /* 
        echo "<pre>";
        var_dump($post->post_title);
        var_dump($post->post_content);
        echo "</pre>";*/
    }?>
</div>
<?php get_footer() ?>