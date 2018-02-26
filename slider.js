$(document).ready(function(){
	$(".play").click(function(){
		$(".slider img:last-child").animate({'opacity':'0'},2000,
		function(){
			var img=$(".slider img:last-child").attr("src");
			$(".slider").prepend('<img src="'+img+'"/>');
			$(".slider img:last-child").remove();
			$(".play").click();
		});
	});
	$(".play").click();
});