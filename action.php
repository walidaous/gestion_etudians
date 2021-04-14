<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO etudiant (nom, prenom , ville , sexe, id_classe) VALUES ('".$_POST["first_name"]."', '".$_POST["last_name"]."','".$_POST["ville"]."', '".$_POST["sexe"]."' , '".$_POST["classe"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM etudiant WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['first_name'] = $row['nom'];
			$output['last_name'] = $row['prenom'];
			$output['ville'] = $row['ville'];
			$output['sexe'] = $row['sexe'];
			$output['classe'] = $row['id_classe'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE etudiant 
		SET nom = '".$_POST["first_name"]."', 
		prenom = '".$_POST["last_name"]."' ,
		ville = '".$_POST["ville"]."', 
		sexe = '".$_POST["sexe"]."', id_classe = '".$_POST["classe"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM etudiant WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>