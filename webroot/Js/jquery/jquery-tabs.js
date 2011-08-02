/***************************/
//@Author: Adrian "yEnS" Mato Gondelle &amp;amp;amp; Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!
/***************************/

$(document).ready(function(){
	$(".menu > li").click(function(e){
		switch(e.target.id){
			case "mostread":
				//change status &amp;amp;amp; style menu
				$("#mostRead").addClass("active");
				$("#lastAdded").removeClass("active");
				//display selected division, hide others
				$("div.mostRead").fadeIn();
				$("div.lastAdded").css("display", "none");
			break;
			case "lastAdded":
				//change status &amp;amp;amp; style menu
				$("#mostRead").removeClass("active");
				$("#lastAdded").addClass("active");
				//display selected division, hide others
				$("div.lastAdded").fadeIn();
				$("div.mostRead").css("display", "none");
			break;
		}
		//alert(e.target.id);
		return false;
	});
});
