$(".btn").click(function () {
	$(".emploi").fadeOut();
	$(".listeEt").fadeIn();
});

$("#login-form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	// get the form data
	var username = $("#username").val();
	var password = $("#password").val();
	var formDataObj = new FormData(document.getElementById("login-form"));

	// send the form data to the server using ajax
	$.ajax({
		type: "POST",
		url: "login.php",
		data: formDataObj,
		processData: false, // tell jQuery not to process the data
		contentType: false,
		cache: false,
		success: function (response) {
			if (response === "success") {
				// login was successful, redirect to protected page
				window.location.href = "./prof11.php";
			} else {
				// login was unsuccessful, display an error message
				$("#login-error").html("Invalid username or password").show();
			}
		},
	});
});
