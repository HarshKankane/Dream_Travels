$(".typedText").typed({
		strings: strings,
		stringsElement: null,
		// typing speed
		typeSpeed: 0,

		// time before typing starts
		startDelay: 0,

		// backspacing speed
		backSpeed: 0,

		// shuffle the strings
		shuffle: false,

		// time before backspacing
		backDelay: 500,

		// Fade out instead of backspace
		fadeOut: true,
		fadeOutClass: 'typed-fade-out',
		fadeOutDelay: 500, // milliseconds

		// loop
		loop: true,

		// false = infinite
		loopCount: false,

		// show cursor
		showCursor: true,

		// character for cursor
		cursorChar: "|",

		// attribute to type (null == text)
		attr: null,

		// either html or text
		contentType: 'html'

	});

$(document).ready(function() {
    "use strict";
	$('#home_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#home_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#home_enquiry').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess_qe");
                foo.attr("style", "display: block;");
                $("#home_enquiry").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#tbook_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#tbook_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#hbook_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#hbook_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });

	//LEFT MOBILE MENU OPEN
    $(".mob-menu-icon").on('click', function() {
        $(".mob-menu-slide").css("right", "0");
		$(".btn-close-menu").css("display", "inline-block");
    });

    //LEFT MOBILE MENU CLOSE
    $(".btn-close-menu").on('click', function() {
        $(".mob-menu-slide").css("right", "-240px");
        $(".btn-close-menu").css("display", "none");
    });

    $('.map-container').on('click', function() {
        $(this).find('iframe').addClass('clicked')
    }).on('mouseleave', function() {
        $(this).find('iframe').removeClass('clicked')
    });

    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });





});


$(document).ready(function() {
    $("body").on("contextmenu",function(){
       return true;
    });
document.onkeydown = function(e) {
        if (e.ctrlKey &&
            (e.keyCode === 67 ||
             e.keyCode === 86 ||
             e.keyCode === 85 ||
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
});
$(document).keydown(function(event){
    if(event.keyCode==123){
    return false;
   }
else if(event.ctrlKey && event.shiftKey && event.keyCode==73){
      return false;  //Prevent from ctrl+shift+i
   }
});

function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
