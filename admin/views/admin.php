<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Quote_Pool
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>

<div id="quotePoolWrap" class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	<form>
		<fieldset>
		<legend>Quotes</legend>
			<label for="author">Auteur</label>
			<input type="text" name="author"><br>
			<label for="quote">Quote</label>
			<textarea name="quote" id="quote" rows="10"></textarea><br>
			<input type="submit" value="Opslaan">
		</fieldset>
	</form>
</div><!--  end quotePoolWrap  -->
