// setting text length in text boxes
$(document).ready(function(){
	var characters;
	$("#aisleInput").keyup(function(){
		characters = 2;
		if($(this).val().length > characters){
	        $(this).val($(this).val().substr(0, characters));
	    }
	});
	$("#bayInput").keyup(function(){
		characters = 2;
		if($(this).val().length > characters){
	        $(this).val($(this).val().substr(0, characters));
	    }
	});
	$("#palletInput").keyup(function(){
		characters = 3;
		if($(this).val().length > characters){
	        $(this).val($(this).val().substr(0, characters));
	    }
	});
	$("#departmentInput").keyup(function(){
		characters = 2;
		if($(this).val().length > characters){
	        $(this).val($(this).val().substr(0, characters));
	    }
	});
});

//toggling checkmarks. something is odd with 2 so changed to 1
$(document).ready(function(){
	$('#aisleInput').keypress(function(){ 
		if($(this).val().length >= 1){
		    $("#aisleCheck").fadeToggle(500);
		}
	});
	$("#bayInput").keypress(function(){ 
		if($(this).val().length >= 1){
		    $("#bayCheck").fadeToggle(500);
		}
	});
	$("#palletInput").keypress(function(){ 
		if($(this).val().length >= 2){
		    $("#palletCheck").fadeToggle(500);
		}
	});
	$("#departmentInput").keypress(function(){ 
		if($(this).val().length >= 1){
		    $("#departmentCheck").fadeToggle(500);
		}
	});
});

// disabling/enabing submit button
$(document).ready(function(){
	$(".btn.btn-primary.btn-lg.btn-block").attr('disabled', 'disabled');
	$("form").keyup(function(){
		if($("#aisleInput").val() != "" && $("#bayInput").val() != "" && $("#departmentInput").val() != "" && $("#palletInput").val() != ""){
			$(".btn.btn-primary.btn-lg.btn-block").removeAttr('disabled');
		}
	});
});

// clicking the submit button
$(document).ready(function(){
	$("button").click(function(){
		var aisleInput = $("#aisleInput").val();
		$("#aisleInput").val(""); 
		console.log(aisleInput);

		var palletInput = $("#palletInput").val();
		$("#palletInput").val(""); 
		console.log(palletInput);

		var bayInput = $("#bayInput").val();
		$("#bayInput").val(""); 
		console.log(bayInput);

		var deptInput = $("#departmentInput").val();
		$("#departmentInput").val(""); 
		console.log(deptInput);
	});
});