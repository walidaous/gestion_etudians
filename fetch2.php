<?php

//fetch.php

include("database_connection.php");

$query = "SELECT * FROM filiere";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
            <div class="content">
                            <table width="100%" class="table table-hover table-striped table-bordered " id="dataTables-example">
                                <thead>
	<tr>
		<th>code</th>
		<th>libelle</th>
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
		<tr>
			<td width="40%">'.$row["code"].'</td>
			<td width="40%">'.$row["libelle"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["code"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
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