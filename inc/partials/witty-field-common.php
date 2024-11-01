<?php
/**
 * The common field of witty plugin
 *
 * @version 1
 * @author Robert John Concepcion
 */
?>
<input
	type="<?php echo $type; ?>"
	name="<?php echo $name; ?>" 
	<?php echo isset($value) ? "value='$value'" : ""; ?>
	<?php echo isset($attrb) ? witty_support::attrb( $attrb ) : ""; ?> 
/>