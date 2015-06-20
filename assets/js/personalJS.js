//This function is for the dropdown/dropup menus if there will be menu within menu
//--------------------------------------------------------------------------------
$(function(){
	$(".dropdown-menu > li > a.trigger").on("click",function(e){
		var current=$(this).next();
		var grandparent=$(this).parent().parent();
		if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
			$(this).toggleClass('right-caret left-caret');
		grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
		grandparent.find(".sub-menu:visible").not(current).hide();
		current.toggle();
		e.stopPropagation();
	});
	$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
		var root=$(this).closest('.dropdown');
		root.find('.left-caret').toggleClass('right-caret left-caret');
		root.find('.sub-menu:visible').hide();
	});
});
//--------------------------------------------------------------------------------





//This function is for the floating Navigation bar
/*--------------------------------------------------------------------------------
$(function () {

    var offsetFromTop = window.innerHeight/1.19; // number of pixels of the widget should be from top of the window
    var updateFrequency= 15; //milisecond. The smaller the value, smooth the animation.
    var chaseFactor = .02; // the closing-in factor. Smaller makes it smoother.

    var yMoveTo=0;
    var yDiff=0;

    var movingWidget = document.getElementById("socialMedia");
    movingWidget.style.position="absolute";
    movingWidget.style.zIndex="2";
    movingWidget.style.top= offsetFromTop.toString() + "px";
    movingWidget.style.left="0"; //1ex

    function ff(){
        // compute the distance user has scrolled the window
        yDiff = (navigator.appName === "Microsoft Internet Explorer") ? (yMoveTo - document.documentElement.scrollTop) : (yMoveTo - window.pageYOffset) ;

        if ( Math.abs(yDiff) > 9) {

            // turn off now, prevent the event repeatedly fired when user scroll repeatedly
            window.removeEventListener("scroll", ff);

            yMoveTo -= yDiff*chaseFactor;
            movingWidget.style.top  = (yMoveTo+offsetFromTop).toString() + "px" ;
            setTimeout(ff, updateFrequency); // calls itself again
        } else {
            window.addEventListener("scroll", ff , false); // turn back on
        }
    }

    window.addEventListener("scroll", ff , false);

});
*/--------------------------------------------------------------------------------
