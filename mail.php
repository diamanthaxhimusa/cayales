<?php
if (isset($_POST['submit'])) {
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
	$salles_debains_check = $_POST['salles_debains_check'];
	$secteur_du_projet = $_POST['secteur_du_projet'];
	$type_de_travux = $_POST['type_de_travux'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "diamanthaxhimusa@gmail.com
	$subject = "Offre";
	$mailheader = "From: $email \r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$emailbody = "
		<table rules='all' style='border-color: #666;' cellpadding='10'>
			<tr>
				<td><b>Adresse électronique</b></td><td>{$email}</td>
			</tr>
			<tr>
				<td><b>Nom</b></td><td>{$firstname}</td>
			</tr>
			<tr>
				<td><b>Prénom</b></td><td>{$lastname}</td>
			</tr>
			<tr>
				<td><b>Adresse</b></td><td>{$address}</td>
			</tr>
			<tr>
				<td><b>Ville</b></td><td>{$city}</td>
			</tr>
			<tr>
				<td><b>Code postal</b></td><td>{$zipcode}</td>
			</tr>
			<tr>
				<td><b>Tél. domicile</b></td><td>{$phonenum}</td>
			</tr>
			<tr>
				<td><b>Tél. portable</b></td><td>{$mobilenum}</td>
			</tr>
			<tr>
				<td><b>Type de travaux souhaités</b></td>
				<td>".implode(", ", $type_de_travux)."	</td>
			</tr>
			<tr>
				<td><b>Secteur du projet</b></td>
				<td>".implode(", ", $secteur_du_projet)."	</td>
			</tr>
			<tr>
				<td><b>Personnalisé (préciser )</b></td><td>{$description}</td>
			</tr>
		</table>
	";
	if(mail($recipient, $subject, $emailbody, $headers)) {
		echo "<script>
		if (window.confirm('Email Sent! Go to homepage'))
		{
				// They clicked Yes
				window.location.href = '/';
		}
		else
		{
			window.location.href = '/demande-offre.html';
		}
		</script>";
	} else {
		echo "Error!";
	}
} else {
	echo "failed";
}
?>;
