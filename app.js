
/* menu burger code */
$(document).ready(function(){
    $('.btn-burger').click(function(){
        $(this).find('.barre').toggleClass('dark-btn');
        $('nav').toggleClass('isOpen');
        $('.main').toggleClass('menuOpen');
        });
    });

/* scroll-puis-fixe code */   
var header = document.querySelector("#siteWrapper header");
var intro = document.querySelector("#intro");

function scrolled(){
	var windowHeight = document.body.clientHeight,
		currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	
	header.className = (currentScroll >= intro.offsetHeight) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);

