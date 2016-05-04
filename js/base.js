console.log( 'base.js' )
var templates = {};
Handlebars.registerHelper('equals', function ( one, two, options ){
	 if (one === two) {
	    return options.fn(this);
	}
	return options.inverse(this);
} );
function display_template( tmpl, data ) {
    if (templates[tmpl] === undefined) {
      return;
    }
    var template = templates[tmpl];
    var html    = template( data );
   $( "#patient-info-container" ).html(html);
}

$(document).ready(function(){
	var btnRequests 	= $( '#btn-requests' ),
		btnPatients		= $( '#btn-patients' ),
		btnAdmin		= $( '#btn-admin' ),
		btnPrint		= $( '.btn-print' ),
		btnClose 		= $( '.btn-close' ),
		requestWrapper  = $( '#request-wrapper' ),
		patientWrapper	= $( '#patient-wrapper' ),
		patientInfo 	= $( '#patient-info-container' ),
		quote			= $( '#quote' );

	//ADMIN section
	$( '.btn-admin' ).on( "click", function ( e ){
		console.log('hi');
		patientInfo.hide();
		quote.hide();
		$( ".btn-admin" ).removeClass( "selected" );
		$(this).addClass( "selected" );
		//show/hide patient form or appointment request
		if( e.target.id === 'btn-patients' ){
			patientWrapper.hide();
			requestWrapper.show();
		}else{
			requestWrapper.hide();
			patientWrapper.show();
		}
	});
	$( patientInfo ).on( 'click', btnAdmin, function ( e ) {
		if( e.target.id === 'btn-close'){
			patientInfo.hide();
		}else{
			printDiv( patientInfo );
		}
	});

	//Show indepth patient form.
	$( '.more-info' ).click( function( e ){
		console.log('here')
		quote.hide();
		patientInfo.empty().show();
		var templateName = 'patient_template',
		 	data = $( this ).siblings( '.patient-info' ).data( 'info' );

		if ( templates[templateName] === undefined ) {
			jQuery.get( "../dir/" + templateName + ".handlebars", function( resp ) {
				templates[templateName] = Handlebars.compile( resp );
				display_template(templateName, data);
			});
		} else {
		  display_template(templateName, data);
		}
	})

	function printDiv( divName ) {
		var printContents 		= patientInfo.html();     
		var originalContents 	= $( 'body' ).html();   
		// set up print opbject
		printContents = $( 'body' ).html();      
		// print window
		window.print();      
		// return page contents to dom		
		originalContents = $( 'body' ).html();
   }

})
