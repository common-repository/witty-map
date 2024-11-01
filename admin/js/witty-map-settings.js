/**
 * Witty Map Settings
 *
 * Witty Map Marker selecting function
 *
 * @version 2
 * @author Robert John Concepcion
 */
(function($){

	'use strict';

	var imageUrl;

	var frame = wp.media({
        title: 'Select witty map marker.',
        button: {
            text: 'Set as icon'
        },
        multiple: false
    });

	var wittyAdmin = {

		init : function(){

			this._registerEvents();

		},

		/**
		 * Open wordpress media
		 */
		openMedia : function( e ){

			e.preventDefault();

			if ( frame ) {

				frame.open();
				return;
			}

            frame.open();
		},

		/**
		 * Set image in marker field and hidden field
		 */
		selectImage : function(){

			var attachment = frame.state().get('selection').first().toJSON();

			var img = attachment.sizes['witty-map-thumb'];

			imageUrl = ( typeof img == 'object' ) ? img.url : attachment.url;

			$("#witty-pointer-wrap img").attr( "src", imageUrl );

			$("#witty-pointer-wrap [type='hidden']").val(imageUrl);

			$('[data-what="remove-marker"]').fadeIn(0);
		},

		/**
		 * Remove selected marker
		 */
		removeImage : function(e){
			e.preventDefault();
			$( this ).fadeOut(0,function(){
				$( this ).parent().find( 'img' ).attr( 'src', '' );
				$( this ).parent().find( '[type="hidden"]' ).val("");
			});
		},

		_registerEvents : function(){
			
			frame.on( 'select', this.selectImage );
			$( document ).on( 'click',	'[data-what="set-marker"]',		this.openMedia	);			
			$( document ).on( 'click',	'[data-what="remove-marker"]',	this.removeImage );
		}
	}

	wittyAdmin.init();

	var wittyAdmin = {

		init : function(){

			this._registerEvents();

		},


		tabSelector : function( e ){

			e.preventDefault();

			var ths = $( this );

			var wittyTabsVal = $( this ).attr( 'href' );

			$( ".witty-tabs-cont" ).hide();

			$( "#witty-map-tabs a" ).not( this ).removeClass( 'active' );
			
			$( wittyTabsVal ).show( 0, function(){
				ths.addClass( "active" );
			});

		},

		_registerEvents : function(){

			$( document ).on( 'click', '#witty-map-tabs a', this.tabSelector );

		}
	}

	wittyAdmin.init();


})(jQuery);		