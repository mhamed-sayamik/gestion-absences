
<?php
//load xml database
$path = 'ESTS.xml';
$doc = new DOMDocument();
$doc->load($path);
$matieresId = getUserMatieres("student1");
$semaine = 1;
$semestre = 1;
if(isset($_GET['semestre'])) $semestre = $_GET['semestre'];
if(isset($_GET['semaine'])) $semaine = $_GET['semaine'];
if(isset($_GET['seance'])) $seance = $_GET['seance'];
$seances = array();
echo $semestre,$semaine;
foreach($matieresId as $matiereId){
	global $semaine,$semestre;
	$seances = array_merge($seances, getSeances($matiereId, $semestre, $semaine));
}
if(isset($_POST['enregistreAbs'])){
	global $seance;
	foreach($_POST['absenceList'] as $absent)
	AddAbsence($absent, $seance);
}if(isset($_POST['modifyAbs'])){
	global $seance;
	deleteAbsences($seance);
	if(isset($_POST['modifyAbsenceList'])){
		foreach($_POST['modifyAbsenceList'] as $absent){
		AddAbsence($absent, $seance);
		}
	}
	
}
//echo $seances[0]->getElementsByTagName("duree")[0]->nodeValue;





/*function getAllSeances(){
	global $doc;	
	$allSeances = $doc->getElementsByTagName("Seances")[0]->getElementsByTagName("seance");
	return $allSeances;
}*/
function getSeance($idSeance){
	global $doc;	
	$allSeances = $doc->getElementsByTagName("Seances")[0]->getElementsByTagName("seance");
	foreach($allSeances as $seance){
		if($seance->getAttribute("id") == $idSeance) return $seance;
	}
	return null;
}
function editSeance($idSeance, $idMatiere){
	global $doc;
	global $path;
	$seance = getSeance($idSeance); 
	$seance->setAttribute('id_Matieres', $idMatiere);
	$doc->save($path);
}
function deleteSeance($idSeance){
    global $doc;
    global $path;
    $seance = getSeance($idSeance);
    $seance->parentNode->removeChild($seance);
    $doc->save($path);
}
/*
function AddSeance($idSeance, $idMatiere){
	global $doc;
	global $path;
	$seances = $doc->getElementsByTagName("Seances")[0];
	$seance = $doc->createElement('seance');
	$seance->setAttribute('id', $idSeance);
	$seance->setAttribute('id_Matieres', $idMatiere);
	$seances->appendChild($seance);
	$doc->save($path);
}*/
function getSeances($idMatiere, $semestre, $semaine){
	global $doc;	
	$_seances = array();
	$allSeances = $doc->getElementsByTagName("Seances")[0]->getElementsByTagName("seance");
	foreach($allSeances as $seance){
		if($seance->getAttribute("id_Matieres") == $idMatiere && $seance->getAttribute("semestre") == $semestre && $seance->getAttribute("semaine") == $semaine) $_seances[] = $seance;
	}
	return $_seances;
}
//matieres dont il a access
function getUserMatieres($loginUser){
	global $doc;
	$_matiers =array();
	$usrsMatiers = $doc->getElementsByTagName("access")[0]->getElementsByTagName("user_matiere");
	foreach($usrsMatiers as $usrMatiere){
		if($usrMatiere->getAttribute("login_user") == $loginUser) $_matiers[] = $usrMatiere->getAttribute("id_Matieres");
	}
	return $_matiers;
}
function getAbsences($seance){
	global $doc;
	$_students =array();
	$absences =$doc->getElementsByTagName("abscences")[0]->getElementsByTagName("abscence");
	//foreach seance check foreach absence if its the same seance then add it to array
		foreach($absences as $absence){
		if($absence->getAttribute("id_Seances") === $seance){
			$etudiantId = $absence->getAttribute("id_Etudiants");
			$etudiants = $doc->getElementsByTagName("Etudiants")[0]->getElementsByTagName("etudiant");
			foreach($etudiants as $etudiant){
				if($etudiant->getAttribute("id") == $etudiantId) $_students[] = $etudiant;
			}
			}  
		}
	return $_students;
}
function getAbsence($idEtudiant, $idSeance){
	global $doc;
	$absences = $doc->getElementsByTagName("abscences")[0]->getElementsByTagName("abscence");
	foreach($absences as $absence){
		if($absence->getAttribute("id_Etudiants") == $idEtudiant && $absence->getAttribute("id_Seances") == $idSeance) return $absence;
	}
	return null;
}

function AddAbsence($idEtudiant, $idSeance){
	global $doc;
	global $path;
	if($absence = getAbsence($idEtudiant, $idSeance)) return;
	$absences = $doc->getElementsByTagName("abscences")[0];
	$absence = $doc->createElement('abscence');
	$absence->setAttribute('id_Etudiants', $idEtudiant);
	$absence->setAttribute('id_Seances', $idSeance);
	$absences->appendChild($absence);
	$doc->save($path);
}
function getMatiere($matiereId){
	global $doc;
	$matieres =$doc->getElementsByTagName("Matieres")[0]->getElementsByTagName("matiere");
	foreach($matieres as $matiere){
		if($matiere->getAttribute("id") == $matiereId) return $matiere;
	}
	return null;
}
function getGroupFiliere($groupeId){
	global $doc;
	$groupes =$doc->getElementsByTagName("Groupes")[0]->getElementsByTagName("groupe");
	foreach($groupes as $groupe){
		if($groupe->getAttribute("id") == $groupeId) return $groupe->getAttribute("id_Filieres");
	}
	}
function getFiliere($filiereId){
		global $doc;
		$filieres =$doc->getElementsByTagName("Filieres")[0]->getElementsByTagName("filiere");
		foreach($filieres as $filiere){
			if($filiere->getAttribute("id") == $filiereId) return $filiere;
		}
		return null;
}
function deleteAbsences($idSeance) {
	global $doc;
	global $path;
  
	// Create a list of absences to keep
	$absencesToKeep = array();
	$absences = $doc->getElementsByTagName("abscences")[0]->getElementsByTagName("abscence");
	foreach($absences as $absence) {
	  if($absence->getAttribute("id_Seances") !== $idSeance) {
		$absencesToKeep[] = $absence;
	  }
	}
  
	// Remove all absences from the document
	$absencesNode = $doc->getElementsByTagName("abscences")[0];
	while($absencesNode->hasChildNodes()) {
	  $absencesNode->removeChild($absencesNode->firstChild);
	}
  
	// Add the absences that we want to keep back to the document
	foreach($absencesToKeep as $absence) {
	  $absencesNode->appendChild($absence);
	}
  
	$doc->save($path);
  }
?>
<!DOCTYPE html>
<script>
	function displaySeance(seanceId, numero, jour,semaine,semester, seanceNom){
			seanceCellId ="seance-"+numero+"-"+jour+"-"+semaine+"-"+semester;
			seanceCell = document.getElementById(seanceCellId);
			console.log(seanceCellId);
			button = seanceCell.getElementsByTagName("button")[0];
			button.innerText = seanceNom;
			button.style.display = "inline"; 
			button.setAttribute("onclick",'location.href="?semestre='+semester+'&semaine='+semaine+'&seance='+seanceId+'"');
			
		}
</script>
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
				<form >
					<div class="form-group">
						<label for="selectSemaine">Select semaine:</label>
						<select style="margin-bottom:1em;" class="form-control" name="semaine" id="selectSemaine">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="semestre" id="flexRadioDefault1" value="1">
						<label class="form-check-label" for="flexRadioDefault1">Semestre 1</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="semestre" id="flexRadioDefault2" value="2">
						<label class="form-check-label" for="flexRadioDefault2">Semestre 2</label>
					</div><br>
					<input type="submit" class="btn btn-info" value="Afficher">
					</div>
				</form>
				<table id="emploi" class="emploi table table-hover table-bordered caption-top table-responsive-md">
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
					<?php 
					echo "<tr>";
					for($jour=1;$jour<=6;$jour++){
						$leJour = array("Demanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
						echo "<td class='table-secondary'>".$leJour[$jour]."</td>";
						for($numero=1;$numero<=4;$numero++){
						global $semaine,$semestre;
						echo "<td id='seance-".$numero."-".$jour."-".$semaine."-".$semestre."'>
						<button  type='button' style='display:none' class='btn btn-primary'>libre</button>
					</td>";
						}
						echo "<tr>";
					}

					foreach($seances as $seance){
					global $semaine,$semestre;
					$seanceId = $seance->getAttribute("id");
					$seanceNum = $seance->getAttribute("numero");
					$seanceJ = $seance->getAttribute("jour");
					$seanceMatiere = getMatiere($seance->getAttribute("id_Matieres"));
					$seanceMatiereNom = $seanceMatiere->getElementsByTagname("nom")[0]->nodeValue;
					echo "<script>displaySeance(".$seanceId.", ".$seanceNum.", ".$seanceJ.",".$semaine.",".$semestre.", "."'$seanceMatiereNom'".")</script>";
					}
							?>
						
					</tbody>
				</table><br><br>
			</div>
		</div>
	
	<form class="absenceEntry" method="POST">
	<table id="listAbsences" class="listeEt table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Enregistrer les absence
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Nom</th>
							<th>Absence</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if(isset($_GET['seance'])){
							$idGroupe = getSeance($_GET['seance'])->getAttribute("id_Groupes");
							$etudiants = $doc->getElementsByTagName("Etudiants")[0]->getElementsByTagName("etudiant");
							$__students = array();
							foreach($etudiants as $etudiant){
							if($etudiant->getAttribute("id_Groupes") == $idGroupe) $__students[] = $etudiant;
							}
							foreach ($__students as $etd)
							{
								echo "
								<tr>
									<td>". $etd->getElementsByTagName("nom")[0]->nodeValue . "</td> ";
								echo "
									<td>
										<input type='checkbox' class='form-check-input' name='absenceList[]'  value='". $etd->getAttribute("id")."'/>
										<label class='form-check-label' for='exampleCheck1'>Absent</label>
									</td>
								</tr>";
								//display each sub element in xml file	
							}
						}
						?>
						<br><br>
					</tbody>
				</table>
			<input style="float:right; margin-right:8em;" type="submit" class="btn btn-info" name ="enregistreAbs" value="Enregistrer">
	</form>
	<table id="listeAbs" class="listeEt table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Liste des absence
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Nom</th>
							<th>filiere</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if(isset($_GET['seance'])){
							global $absences;
							$absences = getAbsences("".$_GET['seance']."");
							foreach ($absences as $absent)
							{
								echo "
								<tr>
									<td>". $absent->getElementsByTagName("nom")[0]->nodeValue . "</td> 
									<td>". getFiliere(getGroupFiliere($absent->getAttribute("id_Groupes")))->getElementsByTagName("nom")[0]->nodeValue. "</td></tr> ";
								//display each sub element in xml file	
							}
						}
						?>
						<br><br>
					</tbody>
				</table>
		
	
	</form>
	<form class="absenceModify" method="POST">
	<table id="modifyAbsences" class="listeEt table table-hover caption-top table-bordered table-striped table-responsive-md">
					<caption>
						Modifier les absence
					</caption>
					<thead class="thead-dark">
						<tr>
							<th>Nom</th>
							<th>Absence</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if(isset($_GET['seance'])){
							$idGroupe = getSeance($_GET['seance'])->getAttribute("id_Groupes");
							$etudiants = $doc->getElementsByTagName("Etudiants")[0]->getElementsByTagName("etudiant");
							$__students = array();
							foreach($etudiants as $etudiant){
							if($etudiant->getAttribute("id_Groupes") == $idGroupe) $__students[] = $etudiant;
							}
							foreach ($__students as $etd)
							{	
								echo "
								<tr>
									<td>". $etd->getElementsByTagName("nom")[0]->nodeValue . "</td> ";
									global $absences;
									$is_absent=false;
									foreach($absences as $abs){
										if($abs->getAttribute("id") === $etd->getAttribute("id")) $is_absent=true;
									}
									if($is_absent) {echo "
								<td>
										<input checked type='checkbox' class='form-check-input' name='modifyAbsenceList[]'  value='". $etd->getAttribute("id")."'/>
										<label class='form-check-label' for='exampleCheck1'>Absent</label>
									</td>
								</tr>";}else{
									echo "
								<td>
										<input type='checkbox' class='form-check-input' name='modifyAbsenceList[]'  value='". $etd->getAttribute("id")."'/>
										<label class='form-check-label' for='exampleCheck1'>Absent</label>
									</td>
								</tr>";
								}

								//display each sub element in xml file	
							}
						}
						?>
						<br><br>
					</tbody>
				</table>
			<input style="float:right; margin-right:8em;" type="submit" class="btn btn-info" name ="modifyAbs" value="Modifier">
	</form>	
	</body>
	<script src="./app.js">
	
	</script>
</html>
