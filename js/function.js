$("#catmit").click(function(){

	var name = $('#catmain').val();
  
	$.ajax({
		type: 'incs/maincategoryin.php',
		url: 'post',
		data: name,
		success: function(res){
			console.log('hello');
		}
	});

});