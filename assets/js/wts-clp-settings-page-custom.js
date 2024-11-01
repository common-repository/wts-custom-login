(function( $ ) {	
	$( function() {
		$( '#wts_clp_login_IsCaptchaRequired' ).change( function () {
			if(!$('#wts_clp_login_IsCaptchaRequired').is(':checked'))
			{
				//check box is not checked
				$('#wts_clp_login_IsCaptchaRequired').val(0);
				$('#wts_clp_captcha_keys_container').removeClass( 'active' );	
			}
			else
			{
				$('#wts_clp_login_IsCaptchaRequired').val(1);
				$('#wts_clp_captcha_keys_container').addClass( 'active' );
			}
		 });

		//enable disable buttons for wordpress update control	
		$( '.en_dis_btns' ).off( 'click' ).on( 'click', function() {		

			var option_val = $( this ).data( 'option' );
			var input_id = $( this ).data( 'input' );
			var opponent = $( this ).data( 'opponent' );
			
			$( this ).addClass( 'btn_active' );
			$( opponent ).removeClass( 'btn_active' );
			$( input_id ).val( option_val );
		});
		
		//Provide function to copy url
		$( '#wtsSaveMyUrl' ).off( 'click' ).on( 'click', function() {		

			 /* Get the text field */
			  var copyText = document.getElementById("urlme");

			  /* Select the text field */
			  copyText.select();

			  /* Copy the text inside the text field */
			  document.execCommand("copy");

			  $('#wtsSaveMyUrl').attr('title',"Copied url: " + copyText.value);
		});
	});
	
	//To show theme image 
	$("input[name=wts_clp_login_selected_theme]").on("change", function()
	{
		
		var theme = $(this).val();
		//alert(theme);
		var imgHtml = '<img src="' + wts_clp.pluginDir + 'assets/themes/' + theme + '/images/theme_image.jpeg" ></img>';
		//console.log( imgHtml );
		$('.selected-theme-image-div').html( imgHtml );
	});	
	
	if( $( '.login_area_logo_set_section' ).length > 0 ) {
		//Login area logo as text/image
		$( 'input[name=wts_clp_text_or_image_aslogo]' ).change( function() {
			if (this.value == 'image') {
				$( '.img_aslogo_inptarea' ).show();
				$( '.txt_aslogo_inptarea' ).hide();
			}
			else if (this.value == 'text') {
				$( '.img_aslogo_inptarea' ).hide();
				$( '.txt_aslogo_inptarea' ).show();
			}
		});			
	}
	
	//theme selection by image
	$( '.radio_boxp_thm' ).off( 'click' ).on( 'click', function() {
		var $this	= $( this );
		var thisThemeInputEl	= $this.find( 'input[name="wts_clp_login_selected_theme"]' );
		var thisThemeInputElId	= thisThemeInputEl.attr('id');
		var thisThmInputEl 		= document.getElementById(thisThemeInputElId);

		//active respective theme
		$( '.radio_boxp_thm' ).removeClass( "active" );
		$this.addClass( "active" );
		
		//input of respective theme
		var x	= document.getElementsByName("wts_clp_login_selected_theme");
		var i;
		for (i = 0; i < x.length; i++) {
			x[i].removeAttribute( "checked" );		
		}
		
		//set this element 
		thisThmInputEl.setAttribute( "checked", true );
	});

	
})( jQuery );