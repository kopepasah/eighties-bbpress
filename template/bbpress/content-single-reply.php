<?php
/**
 * Single Reply Content Part
 *
 * @package Eighties Add-on - bbPress
 */

?>

<div id="bbpress-forums">
	<?php do_action( 'bbp_template_before_single_reply' ); ?>

	<?php if ( post_password_required() ) : ?>

		<?php bbp_get_template_part( 'form', 'protected' ); ?>

	<?php else : ?>

		<?php bbp_get_template_part( 'loop', 'single-reply' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_single_reply' ); ?>

</div>
