<?php

include '../config/connect_pg_db.php';


if ($_POST["action"] === 'GET_PART') {

## Read value
    $draw = $_POST['draw'];
    $row = $_POST['start'];
    $rowperpage = $_POST['length']; // Rows display per page
    $columnIndex = $_POST['order'][0]['column']; // Column index
    $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
    $searchValue = $_POST['search']['value']; // Search value

    $searchArray = array();

## Search
    $searchQuery = " ";
    if ($searchValue != '') {
        $searchQuery = " AND (part_id LIKE :part_id or 
        part_name LIKE :part_name OR 
        unit_name LIKE :unit_name ) ";
        $searchArray = array(
            'part_id' => "%$searchValue%",
            'part_name' => "%$searchValue%",
            'unit_name' => "%$searchValue%"
        );
    }

## Total number of records without filtering
    $stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM vm_part ");
    $stmt->execute();
    $records = $stmt->fetch();
    $totalRecords = $records['allcount'];

## Total number of records with filtering

    $query_filter = "SELECT COUNT(*) AS allcount FROM vm_part WHERE part_id <> '' " . $searchQuery;

    $stmt = $conn->prepare($query_filter);
    $stmt->execute($searchArray);
    $records = $stmt->fetch();
    $totalRecordwithFilter = $records['allcount'];

    $myfile = fopen("query_filter.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $query_filter);
    fclose($myfile);

## Fetch records
    $query = "SELECT * FROM vm_part WHERE part_id <> '' " . $searchQuery . " ORDER BY " . $columnName . " "
        . $columnSortOrder . " LIMIT " . $rowperpage . " OFFSET " . $row;

    $myfile = fopen("query.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $query);
    fclose($myfile);

    $stmt = $conn->prepare($query);

// Bind values
    foreach ($searchArray as $key => $search) {
        $stmt->bindValue(':' . $key, $search, PDO::PARAM_STR);
    }

//$stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
//$stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
    $stmt->execute();
    $partRecords = $stmt->fetchAll();

    $data = array();

    foreach ($partRecords as $row) {
        $data[] = array(
            "part_id" => $row['part_id'],
            "part_name" => $row['part_name'],
            "part_group_id" => $row['part_group_id'],
            "unit_name" => $row['unit_name'],
            "status" => $row['delete_flag']
        );

    }

## Response
    $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
    );

    $part = json_encode($response);
    file_put_contents("part.json", $part);

    echo json_encode($response);

}