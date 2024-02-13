<?php
/*
Template Name: Post Template
Template Post Type: post
*/

get_header(); ?>

<main>
    <div class="container">
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><?php the_title(); ?></h2>
                    <div class="post-meta">
                        <span class="tags">Tags: <?php
                                                    $tags = get_the_tags();
                                                    if ($tags) {
                                                        foreach ($tags as $tag) {
                                                            echo $tag->name . ", ";
                                                        }
                                                    }
                                                    ?></span>
                        <span class="categories">Categories: <?php
                                                                $categories = get_the_category();
                                                                if ($categories) {
                                                                    foreach ($categories as $category) {
                                                                        echo $category->name . ", ";
                                                                    }
                                                                }
                                                                ?></span>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php
            endwhile;
        else :
            echo "<p>No content found.</p>";
        endif; ?>
    </div>
</main>

<?php get_footer(); ?>