$(document).ready(function(){
    $('#btn').click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'action_ajax_update.php');
			return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url){
    $.ajax({
        url: url,
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),
        success: function(response) { 
        	result = $.parseJSON(response);
        	$('#result_form').html('id: '+result.id+'<br>title: '+result.title+'<br>description: '+result.description+'<br>status: '+result.status+'<br>date: '+result.date);
            alert('задача изменена');
        },
    	error: function(response) { 
            $('#result_form').html('Ошибка. Данные не отправлены.');
    }
});
}