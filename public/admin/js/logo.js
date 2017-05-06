$('a#select-logo').click(function(event) {
	event.preventDefault();
	$('#modal-media-image').modal('show');
	$('#modal-media-image').on('hide.bs.modal',function(){
				var logoUrrl = $('#image').val();
				$('img#show-img').attr('src',logoUrrl);
				$('input#image').attr('value',logoUrrl);
			});
});