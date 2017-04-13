// methods used so far:
// .keyup() // if you press press a keyon the keyboard
// .prop('checked') // if the object property is set to checked 
// .val() // gets the value of the object
// .click() // is the object is clicked 
// .attr("disabled", "disabled") // setting the object to be disabled
// .removeAttr('disabled') // re-enables objects
// .append() // creates elements in the webpage
// .on // affects future elements


// toggling drop down arrow when multiple check box is selected
$(document).ready(function(){
	$("#multiple").click(function(){
		$(".fa-chevron-circle-down").fadeToggle(1000);
	});
});

// if you click on multiple checkbox, and hit enter, it will generate a new text box. will not work for single checkbox
$(document).ready(function(){
	$(".col-lg-10.col-md-10.col-xs-12").on("keypress", "#skuInput", function(event){  // .on affects future elements
		if ($("#multiple").prop('checked')) { 
			if(event.which === 13){ 
				var skuInput = $(this).val(); // this refers to #skewInput
				console.log($(this).val("")); 
				$("ul").append("<li>" + skuInput + "</li>")
				// alert("clicked");  // debugging purposes
			} 
		}
	});
});

// setting text length in text boxes
$(document).ready(function(){
	var characters;
	$("#skuInput").keyup(function(){ 
		if($("#single").prop('checked')){
			characters = 12;
		} else if ($("#multiple").prop('checked')) { 
			characters = 12;
		}
		if($(this).val().length > characters){
	        $(this).val($(this).val().substr(0, characters));
	    }
	});
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
	$("#departmentInput").keyup(function(){
		characters = 2;
		if($(this).val().length > characters){
	        $(this).val($(this).val().substr(0, characters));
	    }
	});
});

//toggling sku input box 
$('.fa-chevron-circle-down').click(function(){ 
    $("li").fadeToggle(500);
});

//toggling checkmarks. something is odd with 2 so changed to 1
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
$("#departmentInput").keypress(function(){ 
	if($(this).val().length >= 1){
	    $("#departmentCheck").fadeToggle(500);
	}
});

// disabling/enabing submit form 
$(document).ready(function(){
	$("button").attr('disabled', 'disabled');
	$("form").keyup(function(){
		if($("#aisleInput").val() != "" && $("#bayInput").val() != "" && $("#departmentInput").val() != ""){
			$("button").removeAttr('disabled');
		}
	});
});

// clicking the submit button
$(document).ready(function(){
	$("button").click(function(){
		var skuInput = $("#skuInput").val();
		$("#skuInput").val(""); 
		console.log(skuInput);

		var aisleInput = $("#aisleInput").val();
		$("#aisleInput").val(""); 
		console.log(aisleInput);

		var bayInput = $("#bayInput").val();
		$("#bayInput").val(""); 
		console.log(bayInput);

		var deptInput = $("#departmentInput").val();
		$("#departmentInput").val(""); 
		console.log(deptInput);
	});
});










