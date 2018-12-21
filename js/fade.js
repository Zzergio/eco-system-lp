$(document).ready(function(){
    
function hidePop(e) {
    e.preventDefault(); 
    $(".black-bg").fadeOut('1300');
    };
	$('.close-button').on('click', hidePop)
});


function showPop() {
    $(".black-bg").fadeIn('1300');
};