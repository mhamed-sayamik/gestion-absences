<?php
$xml_data = new SimpleXMLElement("./scholarite.xml", 0, TRUE) or 
die("Error: Object Creation failure");
// foreach ($xml_data->etudiant as $data){
// 	print_r( $data->nom. "<br>");
// 	//display each sub element in xml file	
// }
// print_r($xml_data->xpath("/etudiant/nom")->nom);

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Gestion Absence</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		/>
		<link rel="stylesheet" href="style.css" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container1">
			<div class="nav1">
				<img src="./Images/est_logo.png" alt="est safi logo" class="logo_est" />
				<div class="title_nav">Interface professeur</div>
				<div class="signup1"><a href="logout.php" class="signupLink">Se déconnecter</a></div>
			</div>
			

			<div class="container">
				<form>
					<div class="form-group">
						<label for="selectSemaine">Select semaine:</label>
						<select class="form-control" id="selectSemaine">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
						<label class="form-check-label" for="flexRadioDefault1">Semestre1</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
						<label class="form-check-label" for="flexRadioDefault2">Semestre2</label>
					</div>
				</form>
				<table class="emploi table table-hover table-bordered caption-top table-responsive-md">
					<caption>
						Emploi du temps
					</caption>
					<thead class="table-primary">
						<tr class="table-primary">
							<th>#</th>
							<th>08:30 - 10:20</th>
							<th>10:40 - 12:30</th>
							<th>14:30 - 16:20</th>
							<th>16:40 - 18:30</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-secondary">Lundi</td>
							<td>
								<button type="button" class="btn btn-primary">Dev personnel</button> <br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Dev personnel</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Dev personnel</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary"></button><br />
								<span class="duree">1 heure</span>
							</td>
						</tr>
						<tr>
							<td class="table-secondary">Mardi</td>
							<td>
								<button type="button" class="btn btn-primary">Dev personnel</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Dev personnel</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Dev personnel</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary"></button><br />
								<span class="duree">1 heure</span>
							</td>
						</tr>
						<tr>
							<td class="table-secondary">Mercredi</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1 heure</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1 heure</span>
							</td>
						</tr>
						<tr>
							<td class="table-secondary">Jeudi</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
						</tr>
						<tr>
							<td class="table-secondary">Vendredi</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
						</tr>
						<tr>
							<td class="table-secondary">Samedi</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
							<td>
								<button type="button" class="btn btn-primary">Doe</button><br />
								<span class="duree">1h</span>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="none listeEt table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des étudiants
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Absence</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($xml_data->etudiant as $data)
							{
								// echo $data->nom. "<br>";
								echo "
								<tr>
									<td>". $data->nom . "</td> ";
								echo "<td>". $data->prenom . "</td> ";
								echo "
									<td>
										<input type='checkbox' class='form-check-input' id='exampleCheck1' />
										<label class='form-check-label' for='exampleCheck1'>Absent</label>
									</td>
								</tr>";
								//display each sub element in xml file	
							}
						?>
						<!-- <tr>
							<td>John</td>
							<td>Doe</td>
							<td>
								<input type="checkbox" class="form-check-input" id="exampleCheck1" />
								<label class="form-check-label" for="exampleCheck1">Absent</label>
							</td>
						</tr>
						<tr>
							<td>Mary</td>
							<td>Moe</td>
							<td>
								<input type="checkbox" class="form-check-input" id="exampleCheck2" />
								<label class="form-check-label" for="exampleCheck2">Absent</label>
							</td>
						</tr>
						<tr>
							<td>July</td>
							<td>Dooley</td>
							<td>
								<input type="checkbox" class="form-check-input" id="exampleCheck3" />
								<label class="form-check-label" for="exampleCheck3">Absent</label>
							</td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</div>
	</body>
	<script src="./app.js"></script>
</html>
