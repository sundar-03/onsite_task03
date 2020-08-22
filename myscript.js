$(document).ready(function() {
	$("#imagename").keyup(function()
		{
			$.get("suggest.php",{imagename:$(this).val()},function(data){
				$("datalist").empty();
				$("datalist").html(data);
			});
		});
});
