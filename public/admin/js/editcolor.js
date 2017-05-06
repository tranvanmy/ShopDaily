$('.listcolor').click(function(event) {
	var id = $(this).attr('data-id');
	
	 $.ajax({
                    url : "xem-color?id="+id,
                    type : "get",
                    dataType:"text",
                  
                    success : function (result){
                        $('.xem-color').html(result);
                    }
                });
	 event.preventDefault();
  $('#xem-color').modal('show');
});