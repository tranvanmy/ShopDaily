$('.list').click(function(event) {
 var id = $(this).attr('data-id');
	
	 $.ajax({
                    url : "xem?id="+id,
                    type : "get",
                    dataType:"text",
                  
                    success : function (result){
                        $('.modal-body1').html(result);
                    }
                });
	 event.preventDefault();
  $('#modal-id1').modal('show');

});