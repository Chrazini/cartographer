$(document).ready(function() {
	$('.att-container').click(function() {
		$(this).children('.att-content').slideToggle();
		$(this).find('.att-type').toggle();
	});

	$('#c1').click(function(){
		if($(this).prop("checked") == false){
			$('.novice').attr('style','display: none');
		}
		else if($(this).prop("checked") == true){
			$('.novice').attr('style','display: block');
		}
	});

	$('#c2').click(function(){
		if($(this).prop("checked") == false){
			$('.intermediate').attr('style','display: none');
		}
		else if($(this).prop("checked") == true){
			$('.intermediate').attr('style','display: block');
		}
	});

	$('#c3').click(function(){
		if($(this).prop("checked") == false){
			$('.advanced').attr('style','display: none');
		}
		else if($(this).prop("checked") == true){
			$('.advanced').attr('style','display: block');
		}
	});
	

	$('.attribute-toggle').click(function() {
		var mainParent = $(this).parent('.toggle-container');
		if($(mainParent).find('input.attribute-toggle').is(':checked')) {
			$(mainParent).addClass('active');
		} else {
			$(mainParent).removeClass('active');
		}
	
	})




	$(".slider").mousemove(function() {
		$(this).siblings('span').text($(this).val())
	});







	var sineArray = [];
	var cosineArray = [];
	var positionArray = [];

	$("#circle_calculator").click(function() {
		/* Resetting */
		sineArray.splice(0, sineArray.length);
		cosineArray.splice(0, cosineArray.length);
		positionArray.splice(0, positionArray.length);
		$('.code-output').empty();

		var points = parseInt($("#lands").val());
		var radius = parseInt($("#radius").val());

		for (var n = 0; n < points; ++ n) {
			var sineValue = Math.sin(2 * Math.PI * n / points);
			var cosineValue = Math.cos(2 * Math.PI * n / points);

			var coordinateX = Math.round(50 + (50 - radius * 1) * cosineValue);
			var coordinateY = Math.round(50 + (50 - radius * 1) * sineValue);

			sineArray.push(coordinateX);
			cosineArray.push(coordinateY);

			var attribute_position = 'land_position ' + coordinateX + ' ' + coordinateY

			positionArray.push(attribute_position);
		}

		var attribute_terrain = 'base_terrain ' + $("#terrain").val();
		var attribute_tiles = 'number_of_tiles ' + parseInt($("#tiles").val());
		var attribute_base = 'base_size ' + parseInt($("#base").val());
		var attribute_clumping = 'clumping_factor ' + parseInt($("#clumping").val());
		var attribute_elevation = 'base_elevation ' + parseInt($("#elevation").val());
		var attribute_zone = 'zone ' + parseInt($("#zone").val());
		var attribute_identification = 'land_id ' + parseInt($("#identification").val());

		for (var n = 0; n < points; ++ n) {
			$('.code-output').append('<pre>create_land</pre>');
			$('.code-output').append('<pre>{</pre>');
			$('.code-output').append('<pre>	' + attribute_terrain + '</pre>');
			$('.code-output').append('<pre>	' + attribute_tiles + '</pre>');
			$('.code-output').append('<pre>	' + attribute_base + '</pre>');
			$('.code-output').append('<pre>	' + attribute_clumping + '</pre>');
			$('.code-output').append('<pre>	' + attribute_elevation + '</pre>');
			$('.code-output').append('<pre>	' + attribute_zone + '</pre>');
			$('.code-output').append('<pre>	' + attribute_identification + '</pre>');
			$('.code-output').append('<pre>	' + positionArray[n] + '</pre>');
			$('.code-output').append('<pre>}</pre>');
			$('.code-output').append('<br>');
		}


	});


/*
	var arr = new Array();

	$("#circle_calculator").click(function() {
			console.log(arr.length)
			
			for (var n = 0; n < 4; ++ n) {
					arr.push('Bob is Sexy')
					console.log(arr.length)
			}    
	});
*/
});