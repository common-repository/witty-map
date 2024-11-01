<?php
/**
 * The checkbox of witty plugin
 * requires input type hidden for default value
 *
 * @version 1
 * @author Robert John Concepcion
 */
 ?>
 <input
	type="hidden"
	name="<?php echo $name; ?>" 
	value="0"
/>
<input
	type="checkbox"
	name="<?php echo $name; ?>" 
	value="1"
	<?php echo isset($attrb) ? witty_support::attrb( $attrb ) : ""; ?> 
	<?php echo $value ? "checked" : ""; ?> 
/>