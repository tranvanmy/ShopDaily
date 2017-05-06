
tinymce.init({
		 selector: 'textarea#content',
		 toolbar_items_size: 'large',
		 height: 250,
		 menubar: false,
		 plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
		],
		toolbar1: "undo redo bold italic underline | alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote link unlink anchor image media | preview | forecolor backcolor fullscreen code",
		image_advtab: true,
		menubar: false,
		toolbar_items_size: 'small',
        relative_urls: false,
        remove_script_host : false,
 		filemanager_title:"Media Manager",	
		external_filemanager_path: "http://localhost/project/filemanager/",
	 	external_plugins: { 
	 		"filemanager" : "http://localhost/project/filemanager/plugin.min.js"
	 },
    	
	});
	tinymce.init({
		 selector: 'textarea#desc',
		 toolbar_items_size: 'large',
		 height: 250,
		 menubar: false,
		 plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
		],
		toolbar1: "undo redo bold italic underline | alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote link unlink anchor image media | preview | forecolor backcolor fullscreen code",
		image_advtab: true,
		menubar: false,
		toolbar_items_size: 'small',
        relative_urls: false,
        remove_script_host : false,
 		filemanager_title:"Media Manager",	
		external_filemanager_path: "http://localhost/project/filemanager/",
	 	external_plugins: { 
	 		"filemanager" : "http://localhost/project/filemanager/plugin.min.js"
	 },
    	
	});

$('a#chon').click(function(event) {
	event.preventDefault();
	$('#modal-media-image').modal('show');
	$('#modal-media-image').on('hide.bs.modal',function(){
				var imgUrrl = $('#image').val();
				$('img#show-img').attr('src',imgUrrl);
				$('input#image').attr('value',imgUrrl);
				// alert(imgUrrl);
			});

});
$('a#xoa').click(function(event) {
	event.preventDefault();
	$('input#image').val('');
	$('img#show-img').attr('value','');

});

  $( function() {

    $( "#start" ).datepicker();
  } );
  $( function() {
  
    $( "#end" ).datepicker();
  } );
 