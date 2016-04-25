console.log('base.js')
$(document).ready(function(){
	var btnRequests = $('#btn-requests'),
		btnPatients	= $('#btn-patients');

	//ADMIN section
	$(".btn-admin").click( function (){
		console.log(this);
		if(this == btnRequests){
			console.log(btnRequests)

		}else{
			console.log(btnPatients);
		}
	});
})
