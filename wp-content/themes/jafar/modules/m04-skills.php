<?php
/**
 * Block: M04 - Skills
 *
 * @used:
 *  - page-home.php
 *
 * @package Jafar
 */

$subheading = get_field( 'm04_tag' );
$heading    = get_field( 'm04_title' );

?>
<div class="m04">
	<div class="container text-center">
	<h4 class="m04__tag">
		<?php echo esc_html( $subheading ); ?>
	</h4>
	<h2 class="m04__title">
		<?php echo esc_html( $heading ); ?>
	</h2>

	<?php if ( have_rows( 'technologies' ) ) : ?>
		<div class='m04__grid skills-grid'>
			<?php
			while ( have_rows( 'technologies' ) ) :
				the_row();

				$name  = get_sub_field( 'technology_name' );
				$image = get_sub_field( 'technology_image' );
				?>

				<div class="m04__grid__item">
					<div class="m04__card">
						<img class='lazy' data-src='<?php echo esc_url( $image['url'] ); ?>' alt="<?php echo esc_attr( $image['alt'] ); ?>">
						<h3><?php echo esc_html( $name ); ?></h3>
					</div>
				</div>
			<?php endwhile; ?> 
		</div>
	<?php endif; ?>

	</div>
</div>
