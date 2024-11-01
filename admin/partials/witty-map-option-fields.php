<?php 
/**
 * Witty map settings field
 *
 * @version 1
 * @author Robert John Concepcion
 */
$support = new witty_support;
?>
<tr valign="top">
    <th scope="row">
        <label><?php echo _x( $label ,'witty_map'); ?></label>
    </th>
    <td>
        <?php
            $support->witty_template( 'inc', $template, [ 
                'type'  =>  $type,
                'name'  =>  $name,
                'value' =>  $value, 
                'attrb' =>  $attrb,
            ] );
        ?>
        <p class="description"><?php echo $desc; ?></p>
    </td>
</tr>