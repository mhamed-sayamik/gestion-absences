$(".btn").click(function () {
	$(".emploi").fadeOut();
	$(".listeEt").fadeIn();
});

$("#login-form1").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	// get the form data
	var username = $("#username").val();
	var password = $("#password").val();
	var formDataObj = new FormData(document.getElementById("login-form1"));

	// send the form data to the server using ajax
	$.ajax({
		type: "POST",
		url: "./login.php",
		data: formDataObj,
		processData: false, // tell jQuery not to process the data
		contentType: false,
		cache: false,
		success: function (response) {
			console.log(response);
			if (response == "prof") {
				// login was successful, redirect to protected page
				window.location.href = "./prof.php";
			} else if(response == "admin") {
				// login was unsuccessful, display an error message
				window.location.href = "./superUser.php";
			}else {
				// login was unsuccessful, display an error message
				$("#login-error").html("Invalid username or password").show();
			}
		},
	});
});
