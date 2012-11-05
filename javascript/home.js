function fadeInFadeOut(ft){
	ft.eq(0).fadeIn(1000,function(){
		ft.eq(0).fadeOut(2000,function(){
			(ft=ft.slice(1)).length && fadeInFadeOut(ft);
		});
	});
} 


$(document).ready(function(){
	fadeInFadeOut($(".fadeText"));
});