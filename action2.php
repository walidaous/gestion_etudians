<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO filiere (code, libelle) VALUES ('".$_POST["first_name"]."', '".$_POST["last_name"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM filiere WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['first_name'] = $row['code'];
			$output['last_name'] = $row['libelle'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE filiere 
		SET code = '".$_POST["first_name"]."', 
		libelle = '".$_POST["last_name"]."' 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		
		$query = "DELETE FROM classe WHERE id_filiere = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		
		$query2 = "DELETE FROM filiere WHERE code = '".$_POST["id"]."'";
		$statement = $connect->prepare($query2);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>