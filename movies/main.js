/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$(function(){
	
	$('#delete-modal').on('show.bs.modal', function (event) {
	  console.log(event);
	  var button = $(event.relatedTarget);
	  var id = button.data('usuario');
	  var modal = $(this);
	  modal.find('.modal-title').text('Excluir Filme #' + id);
	  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
	})
	
})