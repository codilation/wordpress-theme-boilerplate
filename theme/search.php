<?php get_header(); ?>
  <main class="tmp-search">
    <?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<article>
					<h2>
						<?php the_title(); ?>
					</h2>		
				</article>
			<?php endwhile; ?>
    <?php else: ?>
			<p>
				No posts found
			</p>
    <?php endif; ?>
  </main>
<?php get_footer(); ?>