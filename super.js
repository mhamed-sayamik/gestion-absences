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
	$(".matiere_span").css("background-color", "#11101d");
	$(".permission_span").css("background-color", "#11101d");

	$("#myTable_cord").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable_matiere").fadeOut(1);
	$("#myTable").fadeIn(800);
	$("#myTable_list_mat").fadeOut(1);
	$(".ajouter_mat").fadeOut(1);
	$("#permission_checks").fadeIn(800);
	$(".ajouter_user").fadeIn(800);
	$(".ajouter_perm_role").fadeOut(1);
	$(".ajouter_perm").fadeOut(1);
	$("#myTable_list_perm").fadeOut(1);
	$("#myTable_permission_role").fadeOut(1);
});

$(".cord_span").click(function cord_click() {
	$(".cord_span").css("background-color", "#2c2cd8");
	$(".prof_span").css("background-color", "#11101d");
	$(".chDept_span").css("background-color", "#11101d");
	$(".agt_sch_span").css("background-color", "#11101d");
	$(".matiere_span").css("background-color", "#11101d");
	$(".permission_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable_matiere").fadeOut(1);
	$("#myTable_cord").fadeIn(800);
	$("#myTable_list_mat").fadeOut(1);
	$(".ajouter_mat").fadeOut(1);
	$("#permission_checks").fadeIn(800);
	$(".ajouter_user").fadeIn(800);
	$(".ajouter_perm_role").fadeOut(1);
	$(".ajouter_perm").fadeOut(1);
	$("#myTable_list_perm").fadeOut(1);
	$("#myTable_permission_role").fadeOut(1);
});

$(".chDept_span").click(function chef_dept_click() {
	$(".chDept_span").css("background-color", "#2c2cd8");
	$(".prof_span").css("background-color", "#11101d");
	$(".cord_span").css("background-color", "#11101d");
	$(".agt_sch_span").css("background-color", "#11101d");
	$(".matiere_span").css("background-color", "#11101d");
	$(".permission_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_cord").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable_matiere").fadeOut(1);
	$("#myTable_chef_dept").fadeIn(800);
	$("#myTable_list_mat").fadeOut(1);
	$(".ajouter_mat").fadeOut(1);
	$("#permission_checks").fadeIn(800);
	$(".ajouter_user").fadeIn(800);
	$(".ajouter_perm_role").fadeOut(1);
	$(".ajouter_perm").fadeOut(1);
	$("#myTable_list_perm").fadeOut(1);
	$("#myTable_permission_role").fadeOut(1);
});

$(".agt_sch_span").click(function agt_sch_click() {
	$(".agt_sch_span").css("background-color", "#2c2cd8");
	$(".prof_span").css("background-color", "#11101d");
	$(".chDept_span").css("background-color", "#11101d");
	$(".cord_span").css("background-color", "#11101d");
	$(".matiere_span").css("background-color", "#11101d");
	$(".permission_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_cord").fadeOut(1);
	$("#myTable_matiere").fadeOut(1);
	$("#myTable_agent_scholarite").fadeIn(800);
	$("#myTable_list_mat").fadeOut(1);
	$(".ajouter_mat").fadeOut(1);
	$("#permission_checks").fadeIn(800);
	$(".ajouter_user").fadeIn(800);
	$(".ajouter_perm_role").fadeOut(1);
	$(".ajouter_perm").fadeOut(1);
	$("#myTable_list_perm").fadeOut(1);
	$("#myTable_permission_role").fadeOut(1);
});

$(".matiere_span").click(function matiere_click() {
	$(".matiere_span").css("background-color", "#2c2cd8");
	$(".prof_span").css("background-color", "#11101d");
	$(".chDept_span").css("background-color", "#11101d");
	$(".cord_span").css("background-color", "#11101d");
	$(".agt_sch_span").css("background-color", "#11101d");
	$(".permission_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_cord").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable_matiere").fadeIn(800);
	$("#myTable_list_mat").fadeIn(800);
	$(".ajouter_mat").fadeIn(50);
	$("#permission_checks").fadeOut(1);
	$(".ajouter_user").fadeOut(1);
	$(".ajouter_perm_role").fadeOut(1);
	$(".ajouter_perm").fadeOut(1);
	$("#myTable_list_perm").fadeOut(1);
	$("#myTable_permission_role").fadeOut(1);
});

$(".permission_span").click(function matiere_click() {
	$(".permission_span").css("background-color", "#2c2cd8");
	$(".matiere_span").css("background-color", "#11101d");
	$(".prof_span").css("background-color", "#11101d");
	$(".chDept_span").css("background-color", "#11101d");
	$(".cord_span").css("background-color", "#11101d");
	$(".agt_sch_span").css("background-color", "#11101d");

	$("#myTable").fadeOut(1);
	$("#myTable_chef_dept").fadeOut(1);
	$("#myTable_cord").fadeOut(1);
	$("#myTable_agent_scholarite").fadeOut(1);
	$("#myTable_matiere").fadeOut(1);
	$("#myTable_list_mat").fadeOut(1);
	$("#myTable_list_mat").fadeOut(1);
	$(".ajouter_user").fadeOut(1);
	$(".ajouter_mat").fadeOut(1);
	$(".ajouter_perm_role").fadeIn(50);
	$(".ajouter_perm").fadeIn(50);
	$("#myTable_list_perm").fadeIn(800);
	$("#myTable_permission_role").fadeIn(800);
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

// handle delete button click
$(document).ready(function () {
	$(".deleteBtn1").click(function () {
		// get the login of the user being deleted
		console.log("11");
		var matiere_user = $(this).data("login");
		console.log(matiere_user);

		// send the login to the server using ajax
		$.ajax({
			type: "POST",
			url: "./delete.php",
			data: { matiere_user: matiere_user },
			success: function (response) {},
		});
		$(this).closest("tr").remove();
	});
});

// handle delete button click
$(document).ready(function () {
	$(".deleteBtn2").click(function () {
		// get the login of the user being deleted
		console.log("11");
		var matiere_id = $(this).data("login");
		console.log(matiere_id);

		// send the login to the server using ajax
		$.ajax({
			type: "POST",
			url: "./delete.php",
			data: { matiere_id: matiere_id },
			success: function (response) {},
		});
		$(this).closest("tr").remove();
	});
});

$(document).ready(function () {
	$(".deleteBtn3").click(function () {
		// get the login of the user being deleted
		console.log("11");
		var permission_id = $(this).data("login");
		console.log(permission_id);

		// send the login to the server using ajax
		$.ajax({
			type: "POST",
			url: "./delete.php",
			data: { permission_id: permission_id },
			success: function (response) {},
		});
		$(this).closest("tr").remove();
	});
});
$(document).ready(function () {
	$(".deleteBtn4").click(function () {
		// get the login of the user being deleted
		console.log("11");
		var permission_role_id = $(this).data("login");
		console.log(permission_role_id);

		// send the login to the server using ajax
		$.ajax({
			type: "POST",
			url: "./delete.php",
			data: { permission_role_id: permission_role_id },
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
			if (login.includes("cord")) {
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
$(".editBtn2").click(function (e) {
	var matiere_id = $(this).data("login");
	$("#edit_mat_form").submit(function (e) {
		// prevent the form from being submitted
		e.preventDefault();

		console.log("submittt");
		// get the form data
		// var matiere_id = $(this).data("login");
		// var matiere_id = $(".editBtn2").data("login");
		console.log(matiere_id);
		var mat_nom_edit = $("#mat_nom_edit").val();
		var module_nom_edit = $("#module_nom_edit").val();
		var filiere_nom_edit = $("#filiere_nom_edit").val();
		// send the form data to the server using ajax
		$.ajax({
			type: "POST",
			url: "./edit.php",
			data: {
				matiere_id_edit: matiere_id,
				mat_nom_edit: mat_nom_edit,
				module_nom_edit: module_nom_edit,
				filiere_nom_edit: filiere_nom_edit,
			},
			success: function (response) {
				// add the new user to the table
				location.reload();
			},
		});
	});
});

$(".editBtn3").click(function (e) {
	var perm_id_edit = $(this).data("login");
	$("#edit_permission_form").submit(function (e) {
		// prevent the form from being submitted
		e.preventDefault();

		console.log("submittt");
		console.log(perm_id_edit);
		var perm_nom_edit = $("#perm_nom_edit").val();
		// send the form data to the server using ajax
		$.ajax({
			type: "POST",
			url: "./edit.php",
			data: {
				perm_id_edit: perm_id_edit,
				perm_nom_edit: perm_nom_edit,
			},
			success: function (response) {
				// add the new user to the table
				location.reload();
			},
		});
	});
});

// --------------------------------------- ADD USER -------------------------------------------------------

$("#add-form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	console.log("submittt");
	// var checkboxes = document.querySelectorAll('#add-form input[type="checkbox"]');

	// // Create an array of the checked values
	// var checkedValues = [];
	// for (var i = 0; i < checkboxes.length; i++) {
	// 	if (checkboxes[i].checked) {
	// 		checkedValues.push(checkboxes[i].value);
	// 	}
	// }
	// get the form data
	// var formDataObj = new FormData(document.getElementById("add-form"));
	var login = $("#login").val();
	var nom = $("#nom").val();
	var prenom = $("#prenom").val();
	var password = $("#pwd").val();
	var role = $("#selectRole").val();
	// console.log(formDataObj);
	// send the form data to the server using ajax
	$.ajax({
		type: "POST",
		url: "./add.php",
		data: {
			login: login,
			nom: nom,
			prenom: prenom,
			pwd: password,
			role: role,
		},
		success: function (response) {
			// add the new user to the table
			location.reload();
		},
	});
});

// --------------------------------------- ADD matiere -------------------------------------------------------

$("#add-mat-form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	console.log("submittt");
	var formDataObj = new FormData(document.getElementById("add-mat-form"));
	// console.log(formDataObj);
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

// --------------------------------------- ADD matiere -------------------------------------------------------

$("#add_access_form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	console.log("submittt");
	var formDataObj = new FormData(document.getElementById("add_access_form"));
	// console.log(formDataObj);
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

$("#add_permission_form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	console.log("submittt");
	var formDataObj = new FormData(document.getElementById("add_permission_form"));
	// console.log(formDataObj);
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

$("#add_perm_role_form").submit(function (e) {
	// prevent the form from being submitted
	e.preventDefault();

	console.log("submittt");
	var formDataObj = new FormData(document.getElementById("add_perm_role_form"));
	// console.log(formDataObj);
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
				window.location.href = "prof.php";
			} else {
				// login was unsuccessful, display an error message
				$("#login-error").html("Invalid username or password").show();
			}
		},
	});
});

function changeLanguage(lang) {
	localStorage.setItem("selectedLang", lang);
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var xmlDoc = this.responseXML;
			var page = document.getElementsByTagName("body")[0].getAttribute("id");
			var elements = xmlDoc
				.getElementsByTagName("translations")[0]
				.getElementsByTagName(page)[0]
				.getElementsByTagName(lang)[0];

			for (var i = 0; i < elements.childNodes.length; i++) {
				var element = elements.childNodes[i];
				console.log(element);
				var elementId = element.nodeName;
				var elementText = element.textContent;

				var elementOnPage = document.getElementById(elementId);
				if (elementOnPage) {
					elementOnPage.innerHTML = elementText;
				}
			}
		}
	};
	xhttp.open("GET", "./translations.xml", true);
	xhttp.send();
}

var selectedLang = localStorage.getItem("selectedLang");
if (selectedLang) changeLanguage(selectedLang);
