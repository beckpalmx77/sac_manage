<?php

include '../config/connect_pg_db.php';

if ($_POST["action"] === 'GET_DATA') {

    $id = $_POST["id"];

    $return_arr = array();

    $sql_get = "SELECT * FROM v_purchase_history WHERE id = " . $id;
    $statement = $conn->query($sql_get);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result) {
        $return_arr[] = array("id" => $result['runno'],
            "doc_id" => trim($result['doc_id']),
            "doc_date" => trim($result['doc_date']),
            "part_id" => trim($result['part_id_compare']),
            "part_name" => trim($result['part_name']),
            "supplier_name" => trim($result['avl_purchase_name']),
            "status" => $result['status']);
    }

    echo json_encode($return_arr);

}

if ($_POST["action"] === 'GET_PRICE_HISTORY') {

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
        $searchQuery = " AND (part_id_compare LIKE :part_id_compare or 
        part_name LIKE :part_name OR 
        avl_purchase_name LIKE :avl_purchase_name ) ";
        $searchArray = array(
            'part_id_compare' => "%$searchValue%",
            'part_name' => "%$searchValue%",
            'avl_purchase_name' => "%$searchValue%"
        );
    }

## Total number of records without filtering
    $stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM v_purchase_history ");
    $stmt->execute();
    $records = $stmt->fetch();
    $totalRecords = $records['allcount'];

## Total number of records with filtering

    $query_filter = "SELECT COUNT(*) AS allcount FROM v_purchase_history WHERE doc_id <> '' " . $searchQuery;

    $stmt = $conn->prepare($query_filter);
    $stmt->execute($searchArray);
    $records = $stmt->fetch();
    $totalRecordwithFilter = $records['allcount'];

## Fetch records


    $ORDER = "ORDER BY " . $columnName . " " . $columnSortOrder;

    if ($ORDER === "ORDER BY doc_id asc") {
        $ORDER = "ORDER BY doc_id desc";
    }

    $query = "SELECT * FROM v_purchase_history WHERE doc_id <> '' " . $searchQuery . $ORDER . " LIMIT " . $rowperpage . " OFFSET " . $row;

    //$myfile = fopen("query1.txt", "w") or die("Unable to open file!");
    //fwrite($myfile, $ORDER);
    //fclose($myfile);

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
            "id" => trim($row['runno']),
            "doc_id" => trim($row['doc_id']),
            "doc_date" => trim($row['doc_date']),
            "part_id" => trim($row['part_id_compare']),
            "part_name" => trim($row['part_name']),
            "supplier_name" => trim($row['avl_purchase_name']),
            "more_detail" => "<button type='button' name='more_detail' id='" . $row['runno'] . "' class='btn btn-info btn-xs more_detail' data-toggle='tooltip' title='more_detail'>More Detail</button>",
            "po_id" => trim($row['po_id'])
        );
    }

## Response
    $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
    );

    $price_part = json_encode($response);
    file_put_contents("price_part.json", $price_part);

    echo json_encode($response);

}