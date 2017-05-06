$('.xoa').click(function(event) {
  var id = $(this).attr('data-id');
    
     $.ajax({
                    url : "sua",
                    type : "get",
                    dataType:"text",
                    data : {
                         id: id
                    },
                    success : function (result){
                        $('.modal-body').html(result);
                    }
                });
     event.preventDefault();
  $('#modal-id').modal('show');
});