<?php
if (isset($_SERVER['submit'])) {
	$email = $_POST['email'];
	$message = $_POST['message'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zipcode = $_POST['zipcode'];
  $phonenum = $_POST['phonenum'];
  $mobilenum = $_POST['mobilenum'];
  $nouveau = $_POST['nouveau'];
  $renovation = $_POST['renovation'];
  $interieur = $_POST['interieur'];
  $exterieur = $_POST['exterieur'];
  $description = $_POST['description'];

	$formcontent="From: $name \n Message: $message";
	$recipient = "diamanthaxhimusa@gmail.com";
	$subject = "Offre";
	$mailheader = "From: $email \r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

	$emailbody = "
		<table>
		<tr>
		<td>Adresse électronique</td><td>{$email}</td>
		</tr>
    <tr>
		<td>Nom</td><td>{$firstname}</td>
		</tr>
		<tr>
		<td>Prénom:</td><td>{$lastname}</td>
				</tr>
		<tr>

		<td>Adresse:</td><td>{$address}</td>
				</tr>
		<tr>

		<td>Ville:</td><td>{$city}</td>
				</tr>
		<tr>

		<td>Code postal:</td><td>{$zipcode}</td>
				</tr>
		<tr>

		<td>Tél. domicile</td><td>{$phonenum}</td>
				</tr>
		<tr>

		<td>Tél. portable</td><td>{$mobilenum}</td>
				</tr>
		<tr>

		<td><b>Type de travaux </td><td>:</b></td>
				</tr>
		<tr>

		<td><b>Type de travaux souhaités:</b></td>
				</tr>
		<tr>

		<td>Rénovation:</td><td>{$renovation}</td>
				</tr>
		<tr>

		<td>Intérieur:</td><td>{$interieur}</td>
				</tr>
		<tr>

		<td>Extérieur:</td><td>{$exterieur}</td>
				</tr>
		<tr>
		</table>
    <p>Salle de bains:  </td>      
    <p>Cuisines:        </td>        
    <p>Sanitaires:      </td>        
    <p>Électricités:    </td>        
    <p>Chauffages:      </td>
    <p>Carrelages:      </td>
    <p>Façade:          </td>
    <p>Cloisons:        </td>
    <p>Peintures:       </td>
    <p>Parquets:        </td>
    <p>Revêtements:     </td>
    <p>Faux plafond     </td>
    <p>Isolations:      </td>
    <p>Fenêtres:        </td>
    <p>Autre:           </td>
    <p>Personnalisé (préciser ) :</td>
    <td>{$description}</td>
	";

	echo $_POST[0];

	// echo $emailbody;

	// mail($recipient, $subject, $emailbody, $headers) or die("Error!");
	echo "Thank You!";
} else {
	echo "failed";
}
?>
