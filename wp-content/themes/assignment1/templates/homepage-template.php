<?php
/*
Template Name: Homepage
Template Post Type: Page 
*/

get_header();
?>

<main>
    <!-- Introduction Section -->
    <section class="introduction">
        <div class="container">
            <h2><?php echo wp_kses_post(get_field("homepage_title")) ?></h2>
            <p><?php echo wp_kses_post(get_field("hero_content")) ?></p>
        </div>
    </section>

    <!-- Learnings Section -->
    <section class="learnings">
        <div class="container">
            <h2><?php echo wp_kses_post(get_field("learning_title")) ?></h2>
            <div class="learning-area">
                <h3><?php echo wp_kses_post(get_field("learning_area_1")) ?></h3>
                <p><?php echo wp_kses_post(get_field("learning_area_1_content")) ?></p>
            </div>
            <div class="learning-area">
                <h3><?php echo wp_kses_post(get_field("learning_area_2")) ?></h3>
                <p><?php echo wp_kses_post(get_field("learning_area_2_content")) ?></p>
            </div>
        </div>
    </section>


    <!-- Projects Showcase Section -->
    <section class="projects">
        <div class="container">
            <h2>My Blog</h2>
            <?php
            $projects_query = new WP_Query(array(
                'post_type' => 'post',
                // 'category_name' => 'projects',
                'posts_per_page' => 5
            ));

            if ($projects_query->have_posts()) :
                while ($projects_query->have_posts()) : $projects_query->the_post();
            ?>
                    <div class="project">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No projects found.</p>';
            endif;
            ?>
        </div>
    </section>


</main>

<?php get_footer(); ?>