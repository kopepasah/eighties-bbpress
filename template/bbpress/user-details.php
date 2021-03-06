<?php
/**
 * User Details
 *
 * @package Eighties Add-on - bbPress
 */

/*
 * The HTML comment code (<!-- -->) around the list items
 * is a hack to prevent spacing of created by inline block
 * display.
 */
?>

	<?php do_action( 'bbp_template_before_user_details' ); ?>

		<div id="bbp-user-navigation">
			<ul>
				<li class="<?php if ( bbp_is_single_user_topics() ) :?>current<?php endif; ?>">
					<span class='bbp-user-topics-created-link'>
						<a href="<?php bbp_user_topics_created_url(); ?>" title="<?php printf( esc_attr__( "%s's Topics Started", 'eighties-bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Topics Started', 'eighties-bbpress' ); ?></a>
					</span>
				</li><!--

				--><li class="<?php if ( bbp_is_single_user_replies() ) :?>current<?php endif; ?>">
					<span class='bbp-user-replies-created-link'>
						<a href="<?php bbp_user_replies_created_url(); ?>" title="<?php printf( esc_attr__( "%s's Replies Created", 'eighties-bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Replies Created', 'eighties-bbpress' ); ?></a>
					</span>
				</li><!--

				--><?php if ( bbp_is_favorites_active() ) : ?><!--
					--><li class="<?php if ( bbp_is_favorites() ) :?>current<?php endif; ?>">
						<span class="bbp-user-favorites-link">
							<a href="<?php bbp_favorites_permalink(); ?>" title="<?php printf( esc_attr__( "%s's Favorites", 'eighties-bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Favorites', 'eighties-bbpress' ); ?></a>
						</span>
					</li><!--
				--><?php endif; ?><!--

				--><?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?><!--

					--><?php if ( bbp_is_subscriptions_active() ) : ?><!--
						--><li class="<?php if ( bbp_is_subscriptions() ) :?>current<?php endif; ?>">
							<span class="bbp-user-subscriptions-link">
								<a href="<?php bbp_subscriptions_permalink(); ?>" title="<?php printf( esc_attr__( "%s's Subscriptions", 'eighties-bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Subscriptions', 'eighties-bbpress' ); ?></a>
							</span>
						</li><!--
					--><?php endif; ?><!--

					--><li class="<?php if ( bbp_is_single_user_edit() ) :?>current<?php endif; ?>">
						<span class="bbp-user-edit-link">
							<a href="<?php bbp_user_profile_edit_url(); ?>" title="<?php printf( esc_attr__( "Edit %s's Profile", 'eighties-bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Edit', 'eighties-bbpress' ); ?></a>
						</span>
					</li>

				<?php endif; ?>

			</ul>
		</div><!-- #bbp-user-navigation -->

	<?php do_action( 'bbp_template_after_user_details' ); ?>
