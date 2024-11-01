/**
 * Google Map Function
 *
 * Renders map in the front end.
 *
 * @version 1.01
 * @author Robert John conecpcion
 */
(function(){

	'use strict';

	var map;

	var marker;

	var labelX = parseInt(wm.wittyMapLabelX);

	var labelY = parseInt(wm.wittyMapLabelY);

	var mapLabel = wm.wittyMapLabel ? wm.wittyMapLabel : false;

	var googlemap = {

		/**
		 * Initailize Map
		 */
		init : function(){

			map = new google.maps.Map( document.getElementById('witty-map-wrap'), this.mapSettings() );

			var location = this.latlangFormater( wm.wittyMapLocation );

	        map.setCenter( location );

	        this.plotMarker( location );
		},

		/**
		 * Marker of witty map
		 */
		plotMarker : function(latlng){

			var args = {
				position: latlng,
				map: map,
				icon : wm.wittyMapMarker,
				animation: google.maps.Animation.DROP,
			}

			if(mapLabel){
				args['labelContent']	= 	mapLabel;
				args['labelAnchor'] 	= 	new google.maps.Point( labelX, labelY );
				args['labelClass'] 		= 	"witty-label";
			}

			marker = new MarkerWithLabel( args );
		},

		/**
		 * Formats string for to obj
		 * @param  string rawLatLang
		 * @return object
		 */
		latlangFormater : function( rawLatLang ){

			var latlng = rawLatLang.split(',');

			if(	latlng[0] == "" ||
				latlng[1] == "" || 
				latlng.length != 2)
			{
				document.getElementById("witty-map-wrap").innerHTML = "Hey Admin! Invalid latitude and longitude, please fix!";
			}

			var formattedLatLang = {
				lat : parseFloat(latlng[0]),
				lng : parseFloat(latlng[1])
			}
			
			return formattedLatLang;
		},

		mapSettings : function(){

			var settings = {
				zoom 					: parseInt(wm.wittyDefaultZoom),
				draggable 				: parseInt(wm.wittyMapDraggable) ? true : false,
				disableDoubleClickZoom  : parseInt(wm.wittyDoubleClickZoom) ? false : true,
				zoomControl 			: parseInt(wm.wittyMapZoomCtrl) ? true : false,
				scrollwheel 			: parseInt(wm.wittyMapScrollWheel) ? true : false,
				streetViewControl 		: parseInt(wm.wittyMapStreetView) ? true : false,
			}

			return settings;
		}

	}

	googlemap.init();

})(jQuery);		