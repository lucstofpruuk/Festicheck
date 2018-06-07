// Script voor op de inlog en registreer pagina.
$(".register").click(function(){
	if($("#form").css('display') == 'block')
	{
		$("#form").hide();
		$("#formregister").show();
		$(".back").css({"min-height": "1000px"});
		$(".containerform").css({"min-height": "1000px"});
	} else{
		$("#formregister").hide();
		$("#form").show();
		$(".back").css({"min-height": "100vh"});
		$(".containerform").css({"min-height": "100vh"});
	}
});

// Script voor de nav bar.
document.getElementById('x').addEventListener('click', function () {
    if (this.classList.contains('clicked')) {
      document.getElementById("myNav").style.height = "0%";
      document.getElementById("body").style.overflow = "auto";
      document.getElementById("nav").style.backgroundColor = "rgba(0,0,0, 0.6)";
      this.classList.remove('clicked');
    } else {
      this.classList.add('clicked');
      document.getElementById("myNav").style.height = "100%";
      document.getElementById("body").style.overflow = "hidden";
      document.getElementById("nav").style.backgroundColor = "#F15024";
    }
  }); 