<?php
/**
 * Page Name: Support
 *
 */

use WPCoder\Dashboard\SupportForm;
use WPCoder\WOW_Plugin;

defined( 'ABSPATH' ) || exit;
$emil = WOW_Plugin::EMAIl
?>

    <div class="w_block w_has-border">

        <p>
			<?php printf( esc_html__( 'To get your support related question answered in the fastest timing, please send a message via the form below or write to us on email %1$s.', 'wpcoder' ), '<a href="mailto:' . sanitize_email( $emil ) . '">' . sanitize_email( $emil ) . '</a>' ); ?>
        </p>

        <p>
			<?php esc_html_e( 'Also, you can send us your ideas and suggestions for improving the plugin.', 'wpcoder' ); ?>
        </p>

		<?php SupportForm::init(); ?>

    </div>
<?php
