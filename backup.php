<div class="form-group" id="permission_checks">
					<div class="label">Permissions:</div>
					<?php 
						$i = 1;
						foreach ($xml_data->Permissions->permission as $permission) 
						{
							// echo $data->nom. "<br>";
							echo "
							<div class='form-check form-check-inline'>
								<input class='form-check-input' name='permission$i' type='checkbox' id='permission_id$i' value='$i'>
								<label class='form-check-label' for='permission_id$i'>$permission</label>
							</div>";
							$i += 1;
						}
					?>
					
				</div>