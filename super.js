let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
// let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
	sidebar.classList.toggle("open");
	menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
	if (sidebar.classList.contains("open")) {
		closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
	} else {
		closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
	}
}

// -------------------------------------- Toggle between roles -----------------------------------
$(".prof_span").css("background-color", "#2c2cd8");

$(".prof_span").click(function profClick() {
	$(".prof_span").css("background-color", "#2c2cd8");
	$(".cord_span").css("background-color", "#11101d");
	$(".chDept_span").css("background-color", "#11101d");
	$(".agt_sch_span").css("background-color", "#11101d");

	$("#myTable_cord").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable").fadeIn(800);
});

$(".cord_span").click(function cord_click() {
	$(".cord_span").css("background-color", "#2c2cd8");
	$(".prof_span").css("background-color", "#11101d");
	$(".chDept_span").css("background-color", "#11101d");
	$(".agt_sch_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable_cord").fadeIn(800);
});

$(".chDept_span").click(function chef_dept_click() {
	$(".chDept_span").css("background-color", "#2c2cd8");
	$(".prof_span").css("background-color", "#11101d");
	$(".cord_span").css("background-color", "#11101d");
	$(".agt_sch_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_cord").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable_chef_dept").fadeIn(800);
});

$(".agt_sch_span").click(function agt_sch_click() {
	$(".agt_sch_span").css("background-color", "#2c2cd8");
	$(".prof_span").css("background-color", "#11101d");
	$(".chDept_span").css("background-color", "#11101d");
	$(".cord_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_cord").fadeOut(1);
	$("#myTable_agent_scholarite").fadeIn(800);
});

// $(".sidebarIcon1").addClass("sidebar_color");

// -------------------------- Select xml file using ajax

// handle delete button click
$(document).ready(function () {
	$(".deleteBtn").click(function () {
		// get the login of the user being deleted
		console.log("11");
		var login = $(this).data("login");
		console.log(login);

		// send the login to the server using ajax
		$.ajax({
			type: "POST",
			url: "./delete.php",
			data: { login: login },
			success: function (response) {},
		});
		$(this).closest("tr").remove();
	});
});
// ----------------------------------------- handle edit button click
$(document).ready(function () {
	$(".editBtn").click(function () {
		console.log("22");
		var login = $(this).data("login");
		console.log(login);
		$("#login_edit").val(login);
	});
});

$("#edit-form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	console.log("submittt");
	var login = $("#login").val();
	// get the form data
	var formDataObj = new FormData(document.getElementById("edit-form"));
	console.log(formDataObj);
	// send the form data to the server using ajax
	$.ajax({
		type: "POST",
		url: "./edit.php",
		data: formDataObj,
		processData: false, // tell jQuery not to process the data
		contentType: false,
		cache: false,
		success: function (response) {
			// add the new user to the table
			location.reload();
			if (login.includes("cord") ) {
				cordClick();
			} else if (login.includes("prof")) {
				profClick();
			} else if (login.includes("chef")) {
				chef_dept_click();
			} else if (login.includes("agent")) {
				agt_sch_click();
			}
		},
	});
});
// --------------------------------------- ADD USER -------------------------------------------------------

$("#add-form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	console.log("submittt");
	// get the form data
	var formDataObj = new FormData(document.getElementById("add-form"));
	var login = $("#login").val();
	var nom = $("#nom").val();
	var prenom = $("#prenom").val();
	var password = $("#prenom").val();
	console.log(formDataObj);
	// send the form data to the server using ajax
	$.ajax({
		type: "POST",
		url: "./add.php",
		data: formDataObj,
		processData: false, // tell jQuery not to process the data
		contentType: false,
		cache: false,
		success: function (response) {
			// add the new user to the table
			location.reload();
		},
	});
});

// ---------------------------- LOGIN --------------------------------------------

$("#login-form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	// get the form data
	var username = $("#username").val();
	var password = $("#password").val();

	// send the form data to the server using ajax
	$.ajax({
		type: "POST",
		url: "login.php",
		data: { username: username, password: password },
		success: function (response) {
			if (response === "success") {
				// login was successful, redirect to protected page
				window.location.href = "protected.php";
			} else {
				// login was unsuccessful, display an error message
				$("#login-error").html("Invalid username or password").show();
			}
		},
	});
});
