<?php

include('database_connection.php');
$query = '';
$output = array();
$query .= "SELECT * FROM users ";
// Search box
if (isset($_POST["search"]["value"])) {
    $query .= 'WHERE name LIKE "%' . $_POST["search"]["value"] . '%" OR surname LIKE "%' . $_POST["search"]["value"] . '%" OR gender LIKE "%' . $_POST["search"]["value"] . '%" OR email LIKE "%' . $_POST["search"]["value"] . '%" OR contact_number LIKE "%' . $_POST["search"]["value"] . '%" ';
}
if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $_POST['order']['0']['column'] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY id DESC ';
}
if ($_POST["length"] != -1) {
    $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach ($result as $row) {
    $sub_array = array();
    $sub_array[] = $row["name"];
    $sub_array[] = $row["surname"];
    $sub_array[] = $row["gender"];
    $sub_array[] = $row["email"];
    $sub_array[] = $row["contact_number"];
    $sub_array[] = '---';
    $sub_array[] = '<button type="button" name="update" id="' . $row["id"] . '" class="btn btn-warning btn-ls update">Edit</button>';
    $data[] = $sub_array;
}
// Function to retrieve all records
function get_total_all_records($connect)
{
    $statement = $connect->prepare("SELECT * FROM users");
    $statement->execute();
    $result = $statement->fetchAll();
    return $statement->rowCount();
}

$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  $filtered_rows,
    "recordsFiltered" => get_total_all_records($connect),
    "data"    => $data
);
echo json_encode($output);
