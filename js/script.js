$( document ).ready(function() {

    $(".cake_selector").on('click', function(e) {

    	var element = $(e.target);

    	var id = element.attr('data-id');

    	var value = element.val();

    	url = 'sell_cake.php?cake_id=' + id + '&cake_amount=' + value

    	document.location = url;

    } );


    $(".btn").click(function () {
		url = 'index.php'; 
		document.location = url;
	})



});