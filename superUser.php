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
	<body>
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
						<i class="sidebarIcon1 bx bx-grid-alt"></i>
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
						<i class="bx bx-chat"></i>
						<span class="links_name">Chef de departement</span>
					</span>
					<span class="tooltip">Chef de departement</span>
				</li>
				<li>
					<span class="li_span agt_sch_span">
						<i class="bx bx-pie-chart-alt-2"></i>
						<span class="links_name">Agent de scolarité</span>
					</span>
					<span class="tooltip">Agent de scolarité</span>
				</li>

				<li class="profile">
					<div class="profile-details">
						<img src="./Images/Bg/ARR.png" alt="profileImg">
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
				<div class="signup1"><a href="logout.php" class="signupLink">Se déconnecter</a></div>
			</div>

			<div class="container">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Ajouter</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
								<div class="form-group">
									<div class="label">Permission</div>
									<div class="form-check">
										<label class="form-check-label" for="absenceNote">
											<input type="checkbox" class="form-check-input" name="absenceNote" value="1">Faire l'absence
										</label>
									</div>
									<div class="form-check">
										<label class="form-check-label" for="absenceList">
											<input type="checkbox" class="form-check-input" name="absenceList" value="2">Afficher les absents
										</label>
									</div>
									<div class="form-check">
										<label class="form-check-label" for="absenceEdit">
											<input type="checkbox" class="form-check-input" name="absenceEdit" value="3">Editer absence
										</label>
									</div>
									<div class="form-check">
										<label class="form-check-label" for="userAdd">
											<input type="checkbox" class="form-check-input" name="userAdd" value="4">Ajouter utilisateur
										</label>
									</div>
									<div class="form-check">
										<label class="form-check-label" for="userDelete">
											<input type="checkbox" class="form-check-input" name="userDelete" value="5">Supprimer utilisateur
										</label>
									</div>
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
				<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
			</div>
			
			
		</section>
	</body>
	<script src="./super.js"></script>
	
</html>
