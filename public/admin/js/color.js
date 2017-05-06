$('.xoacolor').click(function(event) {
	 var id = $(this).attr('data-id');
	   $.ajax({
                    url : "sua-color",
                    type : "get",
                    dataType:"text",
                    data : {
                         id: id
                    },
                    success : function (result){
                        $('.editcolor').html(result);
                    }
                });
     event.preventDefault();
  $('#edit').modal('show');
});