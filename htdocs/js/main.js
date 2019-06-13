$(document).ready(function(){
	
	//Pārbaudām vai ekrāns ir Top vai paritināts uz leju
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.btn-toTop').fadeIn(); // Parādām pogu
			// $('#navi-bar').removeClass( "bg-primary" ); // noņemam bg krāsas klasi
			// $( "#navi-bar" ).addClass( "bg-dark" ); // ielikam jaunu bg krāsas klasi
		} else {
			$('.btn-toTop').fadeOut(); // Slēpjam pogu
			// $('#navi-bar').removeClass( "bg-dark" );
			// $( "#navi-bar" ).addClass( "bg-primary" ); // ielikam atpakaļ bg krāsas klasi
		}
	});

	//Klikšķis uz pogas aizritina ekrānu uz sākumu
	$('.btn-toTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
