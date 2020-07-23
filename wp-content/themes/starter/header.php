<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    
    <title>Accueil site internet</title>

    <?php wp_head() ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php bloginfo("url")   ?>">  
            <?php bloginfo("name")   ?>     
            <small>  <?php bloginfo("description") ?>    </small> 
        </a>

        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="   <?php bloginfo("url")   ?>   ">Accueil </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" <?php echo get_page_link(5) ?> ">Présentation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" <?php echo get_page_link(7)   ?> ">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" <?php echo get_page_link(9)   ?> ">Information</a>
            </li>
        </ul>

    </nav>
</head>
<body>








    
</body>
</html>