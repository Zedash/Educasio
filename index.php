<?php get_header(); ?> <!-- ouvrir header.php -->
<?php while ( have_posts() ) : the_post(); ?>
     
    <div>
        <!-- TITRE DU POST -->
        <h1>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
         
        <!-- Informations sur le post (auteur, date de publication) -->
        <p>Article écrit par <b><?php the_author(); ?></b> le <?php the_date(); ?></p>
         
        <!-- CONTENU -->
        <div style="background: #e0e0e0;">
            <?php the_content(); ?>
        </div>
    </div>
     
<?php endwhile; // Fin de la boucle ?>
<?php get_footer(); ?> <!-- ouvrir footer.php -->
