$(document).ready(function(){
	cat();
	brand();
	product();
	function cat(){
     $.ajax({url: "action.php", method: "POST", data: {category:1}, success: function(data){
      $("#get_category").html(data);
    }
});
	}
	
	


	function brand(){
           $.ajax({url: "action.php", method: "POST", data: {brand:1}, success: function(data){
        $("#get_brand").html(data);
    }
});

}
	
	function product(){
           $.ajax({url: "action.php", method: "POST", data: {getproduct:1}, success: function(data){
        $("#get_product").html(data);
    }
});

}

	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid = $(this).attr('cid');
		$.ajax({url: "action.php", method: "POST", data: {get_selected_category:1,cat_id:cid}, success: function(data){
        $("#get_product").html(data);
    }
});
	
	});
		
$("body").delegate(".selectBrand","click",function(event){
		event.preventDefault();
		var bid = $(this).attr('bid');
		$.ajax({url: "action.php", method: "POST", data: {selectBrand:1,brand_id:bid}, success: function(data){
        $("#get_product").html(data);
    }
});
	
	});	
	
	$("body").delegate(".selectBrand","click",function(event){
		event.preventDefault();
		var bid = $(this).attr('bid');
		$.ajax({url: "action.php", method: "POST", data: {selectBrand:1,brand_id:bid}, success: function(data){
        $("#get_product").html(data);
    }
});
	
	});	
	$("#search_btn").click(function(){
		var keyword = $("#search").val();
		if(keyword !== ""){
		$.ajax({url: "action.php", method: "POST", data: {search:1,keyword:keyword}, success: function(data){
        $("#get_product").html(data);
    }
});	
		}
	});
	$("#signup_button").click(function(event){
		event.preventDefault();
		$.ajax({url: "register.php", method: "POST", data: $("form").serialize(), success: function(data){
        $("#signup_msg").html(data);
    }
});	
	});
	
	$("#login").click(function(event){
		event.preventDefault();
		var email = $("#email").val();
		var pass = $("#password").val();
	$.ajax({url: "login.php", method: "POST", data: {userLogin:1,userEmail:email,userPassword:pass}, success: function(data){
		         if(data === "true2344df"){
					 window.location.href = "profile.php";
				 }
				}
    });	
});

	$("body").delegate("#product","click",function(event){
		event.preventDefault();
		var p_id = $(this).attr('pid');
		$.ajax({url: "action.php", method: "POST", data: {addToProduct:1,proId:p_id}, success: function(data){
			alert(data);
         }
	});
});


$("#cart_container").click(function(event){
	event.preventDefault();

$.ajax({url: "action.php", method: "POST", data: {get_cart_product:1}, success: function(data){
			$("#cart_product").html(data);
         }
	});
 });

cart_checkout();
function cart_checkout(){
	 $.ajax({url: "action.php", method: "POST", data: {cart_checkout:1}, success: function(data){
        $("#cart_checkout").html(data);
    }
 )}

}

$("body").delegate(".qty","keyup",function(event){
		event.preventDefault();
		var pid = $(this).attr('pid');
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = qty * price;
		$("#total-"+pid).val(total)
		
  });
})

	//end javascript
