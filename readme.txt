== Witty Map ==
Contributors: robertreborobert
Donate link: 
Tags: map, googlemap, google map
Requires at least: 4
Tested up to: 4.8
Stable tag: 1.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Witty Map, add google map in content area or in template file (using shortcode). Most important you can customize its view.

== Description ==

Witty map can :
* Set Marker Label.
* Marker Label location ( x and y axis )
* Set center of the map.
* Set Zoom level.
* Modify default map pointer/marker.
* Enable / Disble dragging.
* Enable / Disable zoom and center on double click.
* Enable / Disable zoom control.
* Enable / Disable Scroll wheel.
* Enable / Disable street view control.


== Installation ==

Download the witty map then paste it the plugin directory. or download it via plugin menu of admin's backend.

== Frequently Asked Questions ==

= Can I change the style of marker label? =
Yes, using CSS, just target this class .witty-label.

Example : #witty-map-wrap .witty-label { background-color : #000; color : #FFF; }

= How to show witty map in content area? =

[witty-map]

= How to echo map in code =

echo do_shortcode('[witty-map]');

= List of witty map action =

add( 'witty_map_before', [your function] );

add( 'witty_map_after', [your function] );


== Changelog ==

= 1.0.3 =
* Fix script error in console

= 1.0.2 =
* Fix marker settings
* Fix conflict to set featured image

= 1.0.1 =
* Improve admin interface
* Map Marker Label
* Marker Label location ( x and y axis )
* Fix errors ( undefined values ) when wp_debug is on

= 0.0.2 =
* Set center of the map.
* Set Zoom level.
* Modify default map pointer/marker.
* Enable / Disble dragging.
* Enable / Disable zoom and center on double click.
* Enable / Disable zoom control.
* Enable / Disable Scroll wheel.
* Enable / Disable street view control.

= 0.0.1 =
* initilize

== Upgrade Notice ==

= 1.0.1 =
Fix some error, improve admin interface and enabled map marker label feature.