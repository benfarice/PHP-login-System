//alert("hello youssef");
$(document).on('submit','form.js-register',function(event){
event.preventDefault();
//alert("form was submitted");
var _form = $(this);
var _error = $(".js-error", _form);
var DataOBJ = {
 email : $("input[type='email']", _form).val(),
 password : $("input[type ='password']", _form).val()
}
console.log(DataOBJ);
if(DataOBJ.email.length < 6){
_error.text("Please enter a valid email address").show();
return false;
}else if(DataOBJ.password.length < 11){
_error.text("Please enter a passphrase that is at least 11 characters long").show();
return false;
}
_error.hide();
$.ajax({
	type: 'POST',
	url:'register_ajax.php',
	data : DataOBJ,
	datatype:'json',
	async :true
})
	.done(function ajaxDone(data){
	console.log(data);
})
	.fail(function ajaxFailed(e){
	console.log(e);
})
	.always(function ajaxAlwaysDoThis(data){
	console.log('always');
})

return false;
})
