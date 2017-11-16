var jj = jQuery.noConflict();
jj(document).ready(function(){
	jj('.input-group-addon.subscribe-button').on('click', function (event){

		event.preventDefault();

		jj.ajax({
			url : 'tools/mailchimpaction.php',
			data : {
				email_address : jj('.form-control.email_address').val()
			},
            dataType : 'JSON',
			method : 'POST',
			beforeSend : function(xhr, settings) {

				jj('.subscribe-button i').removeClass('fa-paper-plane');
				jj('.subscribe-button i').addClass('fa-circle-o-notch fa-spin');

			},
			complete : function(xhr, textStatus) {

			},
			success : function(data, textStatus, xhr) {

				var callBack = JSON.parse(data);
				console.log(callBack);

				if(callBack.hasOwnProperty('detail')){

					jj('.message-return').text(callBack.detail);

				} else {

					jj('.message-return').html('<i class="fa fa-thumbs-up" aria-hidden="true"></i> Subscription successful');
					jj('.message-return').addClass('alert alert-success');

				}
				

				jj('.subscribe-button i').removeClass('fa-circle-o-notch fa-spin');
				jj('.subscribe-button i').addClass('fa-check-square-o');
				// jj('#' +tabId+ ' .centered-saving').html('<i class="fa fa-check-square-o" aria-hidden="true"></i> Saved!!!');
			},
			error : function (requestObject, error, errorThrown){
				console.log(error);
				jj('.subscribe-button i').addClass('fa-paper-plane');
				jj('.subscribe-button i').removeClass('fa-circle-o-notch fa-spin');
			}
		});
	});
});