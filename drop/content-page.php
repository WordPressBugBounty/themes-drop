<div>
	<div class='page-header'>
            <h1 class='entry-title'><?php the_title(); ?></h1>
    </div>
    <div class='entry-content'>
        <article>
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:', 'drop'), 'after' => '</p>', )); ?>
        </article>
    </div>
</div>