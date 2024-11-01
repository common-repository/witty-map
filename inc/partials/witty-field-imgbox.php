<?php
/**
 * The imgbox field of witty plugin
 *
 * @version 1
 * @author Robert John Concepcion
 */
?>                    
<div id="witty-pointer-wrap">
    <img <?php echo isset($value) ? "src='$value'" : ""; ?>>
    <button class="witty-btn" data-what='set-marker'>SELECT IMAGE</button>
    <input 
        type="hidden" 
        name="<?php echo $name; ?>" 
        <?php echo isset($value) ? "value='$value'" : ""; ?>
    />
    <a href="#" class="witty-close" data-what='remove-marker'>x</a>                   
</div>