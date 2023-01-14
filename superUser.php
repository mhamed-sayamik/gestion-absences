<?php
//load xml database
$xml_data = new SimpleXMLElement("./ESTS1.xml", 0, TRUE) or 
die("Error: Object Creation failure");



?>



<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8" />
		<title>Gestoin d'absence  | Super User </title>
		<script src="https://kit.fontawesome.com/6d5b5d6689.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		/>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<!-- Boxicons CDN Link -->

		<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
		<link rel="stylesheet" href="style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- <link rel="stylesheet" href="./superUser.css" /> -->
	</head>
	<body id="super-user">
		<div class="sidebar">
			<div class="logo-details">
				<!-- <i class="bx bxl-c-plus-plus icon"></i> -->
				<iconify-icon icon="mdi:alpha-a-circle" class="icon icon-logo" style="color: white;"></iconify-icon>
				<div class="logo_name">AbsenseLab</div>
				<i class="bx bx-menu" id="btn"></i>
			</div>
			<ul class="nav-list">
				<li >
					<span class="prof_span li_span">
					<i class="fa-sharp fa-solid fa-user"></i>
						<span class="links_name">Professeur</span>
					</span>
					<span class="tooltip sidebar_color">Professeur</span>
				</li>
				<li>
					<span class="li_span cord_span">
						<i class="bx bx-user"></i>
						<span class="links_name">Coordonnateur</span>
					</span>
					<span class="tooltip">Coordonnateur</span>
				</li>
				<li>
					<span class="li_span chDept_span">
						<i class="fa-solid fa-user-tie"></i>
						<span class="links_name">Chef de departement</span>
					</span>
					<span class="tooltip">Chef de departement</span>
				</li>
				<li>
					<span class="li_span agt_sch_span">
					<i class="fa-solid fa-circle-user"></i>
						<span class="links_name">Agent de scolarité</span>
					</span>
					<span class="tooltip">Agent de scolarité</span>
				</li>
				<li>
					<span class="li_span matiere_span">
					<i class="fa-solid fa-school"></i>
						<span class="links_name">Matieres</span>
					</span>
					<span class="tooltip">Matieres</span>
				</li>
				<li>
					<span class="li_span permission_span">
					<i class="fa-solid fa-ban"></i>
						<span class="links_name">Permissions</span>
					</span>
					<span class="tooltip">Permissions</span>
				</li>

				<li class="profile">
					<div class="profile-details">
					<i class="fa-solid fa-toolbox"></i>
						<div class="name_job">
							<div class="name">Ali ELKAROUAOUI</div>
							<div class="job">Admin</div>
						</div>
					</div>
					<i class="bx bx-log-out" id="log_out"></i>
				</li>
			</ul>
		</div>
		<section class="home-section">
			<div class="nav1">
				<img src="./Images/est_logo.png" alt="est safi logo" class="logo_est" />
				<div class="title_nav">Interface super user</div>
				<div class="dropdown">
					<button
						class="btn btn-secondary dropdown-toggle"
						type="button"
						data-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
					>
						Language
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<button button id="arabic" class="dropdown-item" onclick="changeLanguage('ar')">
							Arabic
						</button>
						<button id="french" class="dropdown-item" onclick="changeLanguage('fr')">French</button>
						<button id="english" class="dropdown-item" onclick="changeLanguage('en')">English</button>
					</div>
				</div>
				<div class="signup1"><a href="logout.php" class="signupLink">Se déconnecter</a></div>
			</div>

			<div class="container">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary ajouter_user" data-toggle="modal" data-target="#exampleModalCenter">Ajouter user</button>
				<!-- ////////////////////////////// Modal Ajouter utilisateur //////////////////////////////////////////// -->

				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Ajouter utilisateur</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="add-form">
								<div class="form-group">
									<label for="login">Nom d'utilisateur:</label>
									<input type="text" id="login" name="login" class="form-control" placeholder="Entrer un nom d'utilisateur unique"/><br />
								</div>
								<div class="form-group">
									<label for="pwd">Mot de passe:</label>
									<input type="password" id="pwd" name="pwd" class="form-control" placeholder="Entrer mot de passe"/><br />
								</div>
								<div class="form-group">
									<label for="nom">Nom:</label>
									<input type="text" id="nom" name="nom" class="form-control" placeholder="Entrer un nom"/><br />
								</div>
								<div class="form-group">
									<label for="prenom">Prenom:</label>
									<input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrer un prenom"/><br />
								</div>
								<div class="form-group">
									<label for="role">Role:</label>
									<select class="form-control" name="role" id="selectRole">
										<option value=""></option>
										<option value="1">Professeur</option>
										<option value="2">Coordonnateur</option>
										<option value="3">Chef de departement</option>
										<option value="4">Agent de scholarite</option>
									</select>
								</div>
								
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
						</div>
					</div>
				</div>
				<!-- ////////////////////////////// Modal Editer utilisateur //////////////////////////////////////////// -->
				<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Editer utilisateur</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="edit-form">
								<div class="form-group">
									<label for="login">Nom d'utilisateur:</label>
									<input type="text" id="login_edit" name="login" class="form-control" placeholder="Entrer un nom d'utilisateur unique" readonly/><br />
								</div>
								<div class="form-group">
									<label for="pwd">Mot de passe:</label>
									<input type="password" id="pwd_edit" name="pwd" class="form-control" placeholder="Entrer mot de passe"/><br />
								</div>
								<div class="form-group">
									<label for="nom">Nom:</label>
									<input type="text" id="nom_edit" name="nom" class="form-control" placeholder="Entrer un nom"/><br />
								</div>
								<div class="form-group">
									<label for="prenom">Prenom:</label>
									<input type="text" id="prenom_edit" name="prenom" class="form-control" placeholder="Entrer un prenom"/><br />
								</div>
								<button type="submit" class="btn btn-primary">Modifier</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
						</div>
					</div>
				</div>
				<!-- ////////////////////////////// Modal Ajouter matiere //////////////////////////////////////////// -->
				
				<div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Ajouter matiere</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="add-mat-form">
								<div class="form-group">
									<label for="mat_nom">Nom du matiere:</label>
									<input type="text" id="mat_nom" name="mat_nom" class="form-control" placeholder="Entrer un nom du matiere unique"/><br />
								</div>
								<div class="form-group">
									<label for="module_nom">Nom du module:</label>
									<select class="form-control" name="module_nom" id="module_nom">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Modules->module as $module){
												echo "<option value=$module[id]>$module</option>";
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="filiere_nom">Nom du filiere:</label>
									<select class="form-control" name="filiere_nom" id="filiere_nom">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Filieres->filiere as $filiere){
												echo "<option value=$filiere[id]>$filiere->nom</option>";
											}
										?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
						</div>
					</div>
				</div>

				<!-- ////////////////////////////// Modal Editer matiere //////////////////////////////////////////// -->

				<div class="modal fade" id="exampleModalCenter22" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Editer matiere</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="edit_mat_form">
								<div class="form-group">
									<label for="mat_nom_edit">Nom du matiere:</label>
									<input type="text" id="mat_nom_edit" name="mat_nom_edit" class="form-control" placeholder="Entrer un nom du matiere unique"/><br />
								</div>
								<div class="form-group">
									<label for="module_nom_edit">Nom du module:</label>
									<select class="form-control" name="module_nom_edit" id="module_nom_edit">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Modules->module as $module){
												echo "<option value=$module[id]>$module</option>";
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="filiere_nom_edit">Nom du filiere:</label>
									<select class="form-control" name="filiere_nom_edit" id="filiere_nom_edit">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Filieres->filiere as $filiere){
												echo "<option value=$filiere[id]>$filiere->nom</option>";
											}
										?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Modifier</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
						</div>
					</div>
				</div>

				<!-- ////////////////////////////// Modal Ajouter accès //////////////////////////////////////////// -->

				<div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Ajouter accès</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="add_access_form">
								
								<div class="form-group">
									<label for="mat_nom_user">Nom du matiere:</label>
									<select class="form-control" name="mat_nom_user" id="mat_nom_user">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Matieres->matiere as $matiere){
												echo "<option value=$matiere[id]>$matiere->nom</option>";
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="login_user">Login utilisateur:</label>
									<select class="form-control" name="login_user" id="login_user">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Users->user as $user){
												echo "<option value=$user->login>$user->login</option>";
											}
										?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
						</div>
					</div>
				</div>
				<!-- /////////////////////////////////////////// ADD PERMISSION //////////////////////////////////// -->

				<div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Ajouter permission</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="add_permission_form">
								<div class="form-group">
									<label for="perm_nom">Nom du permission:</label>
									<input type="text" id="perm_nom" name="perm_nom" class="form-control" placeholder="Entrer un nom de permission"/><br />
								</div>
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						</div>
					</div>
				</div>

				<!-- /////////////////////////////////////// EDIT PERMISSION //////////////////////////////////////////// -->

				<div class="modal fade" id="exampleModalCenter15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Editer permission</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="edit_permission_form">
								<div class="form-group">
									<label for="perm_nom_edit">Nom du permission:</label>
									<input type="text" id="perm_nom_edit" name="perm_nom_edit" class="form-control" placeholder="Entrer un nom du permission"/><br />
								</div>
								
								<button type="submit" class="btn btn-primary">Modifier</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
						</div>
					</div>
				</div>


				<!-- /////////////////////////////////////// ADD PERMISSION ROLE //////////////////////////////////////////// -->
				<div class="modal fade" id="exampleModalCenter16" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Ajouter permission_role</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="add_perm_role_form">
								<div class="form-group">
									<label for="perm_nom_add">Nom du permission:</label>
									<select class="form-control" name="perm_nom_add" id="perm_nom_add">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Permissions->permission as $permission){
												echo "<option value=$permission[id]>$permission->nom</option>";
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="role_nom_add">Nom du role:</label>
									<select class="form-control" name="role_nom_add" id="role_nom_add">
										<option value=""></option>
										<?php 
											foreach ($xml_data->Roles->role as $role){
												echo "<option value=$role[id]>$role</option>";
											}
										?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						</div>
					</div>
				</div>

				<table id="myTable" class="listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des Professeurs
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Login</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Mot de passe</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->Users->user as $data)
							{
								// echo $data->nom. "<br>";
								if($data->id_Roles == "1"){
									echo "
									<tr>
										<td>". $data->login . "</td> ";
									echo "<td>". $data->Nom . "</td> ";
									echo "<td>". $data->Prenom . "</td> ";
									echo "<td>". $data->password . "</td> ";
									echo "
										<td>
										<button class='deleteBtn btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$data->login'><i class='fa fa-trash'></i></button>
										<button class='editBtn btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-target='#exampleModalCenter1' data-placement='top' title='Edit' data-login='$data->login'><i class='fa fa-edit'></i></button>
										</td>
									</tr>";
									$i += 1; 
								}
								
								//display each sub element in xml file	
							}
						?>
					</tbody>
				</table>
				<table id="myTable_cord" class="none listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des coordonnateurs
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Login</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Mot de passe</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->Users->user as $data)
							{
								// echo $data->nom. "<br>";
								if($data->id_Roles == "2"){
									echo "
									<tr>
										<td>". $data->login . "</td> ";
									echo "<td>". $data->Nom . "</td> ";
									echo "<td>". $data->Prenom . "</td> ";
									echo "<td>". $data->password . "</td> ";
									echo "
										<td>
										<button class='deleteBtn btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$data->login'><i class='fa fa-trash'></i></button>
										<button class='editBtn btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-target='#exampleModalCenter1' data-placement='top' title='Edit' data-login='$data->login'><i class='fa fa-edit'></i></button>
										</td>
									</tr>";
									$i += 1; 
								}
								
								//display each sub element in xml file	
							}
						?>
					</tbody>
				</table>
				<table id="myTable_chef_dept" class="none listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des chefs de departements
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Login</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Mot de passe</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->Users->user as $data)
							{
								// echo $data->nom. "<br>";
								if($data->id_Roles == "3"){
									echo "
									<tr>
										<td>". $data->login . "</td> ";
									echo "<td>". $data->Nom . "</td> ";
									echo "<td>". $data->Prenom . "</td> ";
									echo "<td>". $data->password . "</td> ";
									echo "
										<td>
										<button class='deleteBtn btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$data->login'><i class='fa fa-trash'></i></button>
										<button class='editBtn btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-target='#exampleModalCenter1' data-placement='top' title='Edit' data-login='$data->login'><i class='fa fa-edit'></i></button>
										</td>
									</tr>";
									$i += 1; 
								}
								
								//display each sub element in xml file	
							}
						?>
					</tbody>
				</table>
				<table id="myTable_agent_scholarite" class="none listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des agents de scholarite
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Login</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Mot de passe</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->Users->user as $data)
							{
								// echo $data->nom. "<br>";
								if($data->id_Roles == "4"){
									echo "
									<tr>
										<td>". $data->login . "</td> ";
									echo "<td>". $data->Nom . "</td> ";
									echo "<td>". $data->Prenom . "</td> ";
									echo "<td>". $data->password . "</td> ";
									echo "
										<td>
										<button class='deleteBtn btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$data->login'><i class='fa fa-trash'></i></button>
										<button class='editBtn btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-target='#exampleModalCenter1' data-placement='top' title='Edit' data-login='$data->login'><i class='fa fa-edit'></i></button>
										</td>
									</tr>";
									$i += 1; 
								}
								
								//display each sub element in xml file	
							}
						?>
					</tbody>
				</table>
				<!-- ////////////////////////// GESTION MATIERE /////////////////////////////////////////////// -->
				<button type="button" class="btn btn-primary ajouter_mat none" data-toggle="modal" data-target="#exampleModalCenter12">Ajouter matiere</button>
				<table id="myTable_list_mat" class="none listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des matieres
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Matiere</th>
							<th>Module</th>
							<th>Filiere</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->Matieres->matiere as $matiere){
								// echo $data->nom. "<br>";
									echo "
									<tr>
										<td>". $matiere->nom . "</td> ";
										
										foreach ($xml_data->Modules->module as $module){
											if((int)$module['id'] == (int)$matiere['id_module']){
												echo "<td>". $module . "</td> ";
												break;
											}
										}
										foreach ($xml_data->Filieres->filiere as $filiere){
											if((int)$filiere['id'] == (int)$matiere['id_Filieres']){
												echo "<td>". $filiere->nom . "</td> ";
												break;
											}
										}
									echo "
										<td>
										<button class='deleteBtn2 btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$matiere[id]'><i class='fa fa-trash'></i></button>
										<button class='editBtn2 btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-target='#exampleModalCenter22' data-placement='top' title='Edit' data-login='$matiere[id]'><i class='fa fa-edit'></i></button>
										</td>
									</tr>";
									$i += 1; 
								//display each sub element in xml file	
							}
						?>
					</tbody>
				</table>
				<button type="button" class="btn btn-primary ajouter_mat none" data-toggle="modal" data-target="#exampleModalCenter13">Ajouter access</button>
				<table id="myTable_matiere" class="none listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des accès
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Utilisateur</th>
							<th>Matiere</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->access->user_matiere as $user_matiere)
							{
								// echo $data->nom. "<br>";
									echo "
									<tr> 
										<td>". $user_matiere['login_user'] . "</td> ";
									foreach ($xml_data->Matieres->matiere as $matiere){
										if((int)$matiere['id'] == (int)$user_matiere['id_Matieres']){
											echo "<td>". $matiere->nom . "</td> ";
											break;
										}
									}
									echo "
										<td>
											<button class='deleteBtn1 btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$user_matiere[id_Matieres]'><i class='fa fa-trash'></i></button>
										</td>
									</tr>";
									$i += 1;
								//display each sub element in xml file	
							}
						?>
					</tbody>
				</table>
				<!-- ////////////////////// PERMISSIONS ////////////////////////////////////////////////// -->
				<button type="button" class="btn btn-primary ajouter_perm none" data-toggle="modal" data-target="#exampleModalCenter14">Ajouter permission</button>
				<table id="myTable_list_perm" class="none listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des permissions
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Permission</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->Permissions->permission as $permission){
								// echo $data->nom. "<br>";
									echo "
									<tr>
										<td>". $permission->nom . "</td> ";
										
									echo "
										<td>
										<button class='deleteBtn3 btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$permission[id]'><i class='fa fa-trash'></i></button>
										<button class='editBtn3 btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-target='#exampleModalCenter15' data-placement='top' title='Edit' data-login='$permission[id]'><i class='fa fa-edit'></i></button>
										</td>
									</tr>";
									$i += 1; 
								//display each sub element in xml file
							}
						?>
					</tbody>
				</table>
				<button type="button" class="btn btn-primary ajouter_perm_role none" data-toggle="modal" data-target="#exampleModalCenter16">Ajouter permission_role </button>
				<table id="myTable_permission_role" class="none listeProf table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des permissions_roles
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Role</th>
							<th>Permission</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
							foreach ($xml_data->roles_permissions->role_permission as $role_permission)
							{
								// echo $data->nom. "<br>";
									echo "
									<tr>";

									foreach ($xml_data->Roles->role as $role){
										if((int)$role['id'] == (int)$role_permission['id_Roles']){
											echo "<td>". $role . "</td> ";
											break;
										}
									}

									foreach ($xml_data->Permissions->permission as $permission){
										if((int)$permission['id'] == (int)$role_permission['id_Permissions']){
											echo "<td>". $permission->nom . "</td> ";
											break;
										}
									}
									echo "
										<td>
											<button class='deleteBtn4 btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete' data-login='$role_permission[id_Permissions].$role_permission[id_Roles]'><i class='fa fa-trash'></i></button>
										</td>
									</tr>";
									$i += 1;
								//display each sub element in xml file	
							}
						?>
					</tbody>
				</table>
			</div>
		</section>
	</body>
	<script src="./super.js"></script>
</html>
