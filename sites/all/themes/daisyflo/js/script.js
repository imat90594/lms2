(function($) {

$(document).ready(function(){
	
	
    $('.full-banner ').vegas({
        slides: [
            { src: '/sites/all/themes/daisyflo/img/theme/banner1.jpg' },
			
        ]
    });
	
	//check if there is an about to expired course
	if( $('#has_expiration').length  && $('#has_expiration').html() == "1") {
		$("#expired_courses_modal").modal("show");
	
	//login checkout
	 $("input[name=email-login], input[name=email-login-2]").change(function(){
		  $("#user-login-form #edit-name").val($(this).val());
	  });
	  
	  $("input[name=password-login], input[name=password-login-2]").change(function(){
		  $("#user-login-form #edit-pass").val($(this).val());
	  });
	  
	  $(".login-btn").click(function(e){
		  e.preventDefault();
		  $("#user-login-form").submit();
	  });

	
	//Added row off canvas for theme
	$('[data-toggle=offcanvas]').click(function() {
		$('.row-offcanvas').toggleClass('active');
	});
	
	
	//voucher validate
	$("#validate-voucher").click(function(){
		$("#validate-voucher").html("VALIDATING");
		$.ajax({
			    type: 'POST',
			    url: Drupal.settings.basePath + 'redeem-course/voucher',
			    dataType: 'json',
			    success: voucher_redeem_callbak,
			    data: 'js=1&voucher_code=' + $("input[name=voucher_code]").val()
		  });
	});
	
	
	  var voucher_redeem_callbak = function (data) {
		  $("#validate-voucher").html("VALIDATE");
		  $("#validation-info-container").html(data.message);
		  
		  if(data.success == true) {
			  $("input[name=voucher_code]").attr("disabled", true);
			  $(".registraiton-voucher-container").removeClass("hidden");
			  $("input[name='field_voucher_code[und][0][value]']").val(data.voucher_code);
		  }
	  }
	  
	  $("#edit-field-first-name-und-0-value").attr("placeholder", "First Name");
	  $("#edit-field-last-name-und-0-value").attr("placeholder", "Last Name");
	  
	  
	  //for placeholder in checkout 
	  $(".checkout-billing-payment-container label").each(function(){
		  var placeholder = $(this).text();
		  var element_id = $(this).attr("for");
		  $("#"+element_id).attr("placeholder", placeholder);
	  });
	  
	  $(document).on("change", ".country", function(){
		  console.log("sdf");
	  });	
	  
	  $(".country").change(function(){
		 alert("sdf"); 
	  });
	
});
//for countdown timer
$(function(){
	
	//newYear = true;
	$('.countdown').each(function(index){
		var d = $(this).parent(".course-timer").children(".date-text").html();
		var ts = new Date(d);
		
		if((new Date()) > ts){
			// The new year is here! Count towards something else.
			// Notice the *1000 at the end - time must be in milliseconds
			//ts = (new Date()).getTime() + 10*24*60*60*1000;
			newYear = false;
		}
		
		$(this).countdown({
			timestamp	: ts,
			callback	: function(days, hours, minutes, seconds){}
		});
	})
	
});

//form submit in dashboard
$(".start-course-now").click(function(e){
	e.preventDefault();
	var v = $(this).parent(".course-card");
	console.log(v);
	v.submit();
});
	
	
})( jQuery );


