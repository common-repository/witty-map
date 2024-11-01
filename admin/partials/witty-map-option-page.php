<?php 
/**
 * Main View of witty map settings
 *
 * @version 1.0.1
 * @author Robert John Conepcion
 */
 $support = new witty_support;
?>
<h1>Witty Map</h1>
<p class="description">Use <code>[witty-map]</code> in content area or <code>echo do_shortcode("[witty-map]");</code> in your code.</p><br>


<div class="wrap">
    <ul id="witty-map-tabs">
        <li><a href="#witty-settings" class="active">Settings</a></li> 
        <li><a href="#witty-marker">Marker</a></li>
        <li><a href="#witty-ui">Map Interface</a></li>
              
    </ul>    
</div>


<div class="wrap">
    
    <form method="post" action="options.php">
        <?php 
        /**
         * witty_map_backend
         *
         * @hooked option_page_before_form
         */
        do_action( "witty_map_after_form" );
        ?>
     
            <?php 
                // foreach ($opt_arr as $key => $opt_val):
                //     $support->witty_template( 'admin', 'witty-map-option-fields', [
                //         'name'      =>  $key,            
                //         'type'      =>  $opt_val['type'],
                //         'value'     =>  $opt_val['value'],
                //         'attrb'     =>  $opt_val['attrb'],
                //         'template'  =>  $opt_val['template_name'],
                //         'label'     =>  _x( $opt_val['label'] ,'witty_map'),
                //         'desc'      =>  $opt_val['desc']             
                //     ] );
                // endforeach;
            ?>
        
        <div id="witty-settings" class="witty-tabs-cont active">
          <table class="form-table">
                <tr valign="top">
                    <th scope="row"> <label>Google map api key</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-common', [ 
                                'type'  =>  'text',
                                'name'  =>  'googlemapapi_key',
                                'value' =>  $googlemapapi_key, 
                                'attrb' =>  [
                                    'id'    =>  'googlemapapi-key',
                                    'class' =>  'regular-text'
                                ]
                            ] );
                        ?>
                        <p class="description">Witty map plugin required <a href='https://developers.google.com/maps/documentation/javascript/get-api-key' target='_blank'>google map api key</a>.</p>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Map Center</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-common', [ 
                                'type'  =>  'text',
                                'name'  =>  'wittymap_loc',
                                'value' =>  $wittymap_loc, 
                                'attrb' =>  [
                                    'id'    =>  'wittymap-center',
                                    'class' =>  'regular-text'
                                ]
                            ] );
                        ?>
                        <p class="description">Set Center of the map. Must be a valid longitude and latitude from google map, format : <b>longitude, latitude</b></p>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Default Map Zoom</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-common', [ 
                                'type'  =>  'number',
                                'name'  =>  'wittymap_def_zoom',
                                'value' =>  $wittymap_def_zoom, 
                                'attrb' =>  [
                                    'id'    =>  'wittymap-center',
                                    'class' =>  'regular-text'
                                ]
                            ] );
                        ?>
                        <p class="description">Zoom level of the map (the bigger the number the zoom it be). <b>default value : 5, max value : 18</b></p>
                    </td>
                </tr>
            </table> <!-- .form-table -->         
        </div> <!-- #witty-settings -->
  

        <div id="witty-marker" class="witty-tabs-cont">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> <label>Map Marker</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-imgbox', [ 
                                'name'  =>  'wittymap_marker',
                                'value' =>  $wittymap_marker, 
                            ] );
                        ?>
                        <p class="description">Use image as marker of the map.</p>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Location title</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-common', [ 
                                'type'  =>  'text',
                                'name'  =>  'wittymap_markerLabel',
                                'value' =>  $wittymap_markerLabel,
                                'attrb' =>  [
                                    'id'    =>  'wittymap-label',
                                    'class' =>  'regular-text'
                                ]
                            ] );
                        ?>
                        <p class="description">Marker Optional Label</p>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Label X Axis</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-common', [ 
                                'type'  =>  'number',
                                'name'  =>  'wittymap_labelX',
                                'value' =>  $wittymap_labelX
                            ] );
                        ?>
                        <span class="description">Label X Axis relative to the position of the Marker</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Label Y Axis</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-common', [ 
                                'type'  =>  'number',
                                'name'  =>  'wittymap_labelY',
                                'value' =>  $wittymap_labelY
                            ] );
                        ?>
                        <span class="description">Label Y Axis relative to the position of the Marker</span>
                    </td>
                </tr>        
            </table>
        </div>

        <div id="witty-ui" class="witty-tabs-cont">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"> <label>Draggable</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-checkbox', [ 
                                'name'  =>  'wittymap_draggable',
                                'value' =>  $wittymap_draggable,
                            ] );
                        ?>
                        <span class="description">Map can be drag to check other parts of the map.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Double click will zoom</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-checkbox', [ 
                                'name'  =>  'wittymap_doubleClickZoom',
                                'value' =>  $wittymap_doubleClickZoom,
                            ] );
                        ?>
                        <span class="description">Enables/disables zoom and center on double click.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Zoom Control</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-checkbox', [ 
                                'name'  =>  'wittymap_zoomControl',
                                'value' =>  $wittymap_zoomControl,
                            ] );
                        ?>
                        <span class="description">Enables/disables zoom control.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Scroll Wheel</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-checkbox', [ 
                                'name'  =>  'wittymap_scrollWheel',
                                'value' =>  $wittymap_scrollWheel,
                            ] );
                        ?>
                        <span class="description">Enables/disables scrollwheel zooming on the map.</span>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row"> <label>Street View Control</label></th>
                    <td>
                        <?php
                            $support->witty_template( 'inc', 'witty-field-checkbox', [ 
                                'name'  =>  'wittymap_streetView',
                                'value' =>  $wittymap_streetView,
                            ] );
                        ?>
                        <span class="description">Located at right bottom of the map.</span>
                    </td>
                </tr>

            </table>            
        </div>


        <?php submit_button(); ?>
    </form>
</div>
