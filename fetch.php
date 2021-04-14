<?php

//fetch.php

include("database_connection.php");

$query = "SELECT * FROM etudiant";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
            <div class="content">
                            <table width="100%" class="table table-hover table-striped table-bordered " id="dataTables-example">
                                <thead>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>ville</th>
		<th>sexe</th>
		<th>classe</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
                                </thead>
                                
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr >
			<td width="40%">'.$row["nom"].'</td>
			<td width="40%">'.$row["prenom"].'</td>
			<td width="40%">'.$row["ville"].'</td>
			<td width="40%">'.$row["sexe"].'</td>
			<td width="40%">'.$row["id_classe"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'"  >Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="7" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>'
        . '                        </div>
                    </div>
                </div>
            </div>'
        . '    <script src="assets/vendor/datatables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>';
echo $output;
?>