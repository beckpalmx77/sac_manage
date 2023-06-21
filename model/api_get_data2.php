<?php

include '../config/connect_pg_db_sac.php';

if ($_POST["action"] === 'GET_DATA') {

    $id = $_POST["id"];

    $return_arr = array();

    $sql_get = "SELECT * FROM SC_DOCINFO WHERE id = " . $id;
    $statement = $conn->query($sql_get);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result) {
        $return_arr[] = array("id" => $result['runno'],
            "DI_REF" => trim($result['DI_REF']),
            "doc_date" => trim($result['doc_date']),
            "part_id" => trim($result['part_id_compare']),
            "part_name" => trim($result['part_name']),
            "supplier_name" => trim($result['avl_purchase_name']),
            "status" => $result['status']);
    }

    echo json_encode($return_arr);

}

if ($_POST["action"] === 'GET_DATA_DOCINFO') {

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
        $searchQuery = " AND (DI_REF LIKE :DI_REF or 
        DI_DATE LIKE :DI_DATE OR 
        DI_KEY LIKE :DI_KEY ) ";
        $searchArray = array(
            'DI_REF' => "%$searchValue%",
            'DI_DATE' => "%$searchValue%",
            'DI_KEY' => "%$searchValue%"
        );
    }

## Total number of records without filtering
    $stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM \"SC_DOCINFO\" ");
    $stmt->execute();
    $records = $stmt->fetch();
    $totalRecords = $records['allcount'];

## Total number of records with filtering

    $query_filter = "SELECT COUNT(*) AS allcount FROM \"SC_DOCINFO\" WHERE \"DI_REF\" <> '' " . $searchQuery;

    $stmt = $conn->prepare($query_filter);
    $stmt->execute($searchArray);
    $records = $stmt->fetch();
    $totalRecordwithFilter = $records['allcount'];

## Fetch records


    $query = "SELECT * FROM \"SC_DOCINFO\" WHERE \"DI_REF\" <> '' " . $searchQuery . " LIMIT " . $rowperpage . " OFFSET " . $row;


    $myfile = fopen("query1.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $query);
    fclose($myfile);

    $stmt = $conn->prepare($query);

    foreach ($searchArray as $key => $search) {
        $stmt->bindValue(':' . $key, $search, PDO::PARAM_STR);
    }

    $stmt->execute();
    $DataRecords = $stmt->fetchAll();

    $data = array();

    foreach ($DataRecords as $row) {
        $data[] = array(
            "DI_KEY" => trim($row['DI_KEY']),
            "DI_REF" => trim($row['DI_REF']),
            "more_detail" => "<button type='button' name='more_detail' id='" . $row['DI_KEY'] . "' class='btn btn-info btn-xs more_detail' data-toggle='tooltip' title='more_detail'>More Detail</button>",
            "DI_DATE" => trim($row['DI_DATE'])
        );
    }

## Response
    $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
    );

    $data_json = json_encode($response);
    file_put_contents("data_json.json", $data_json);

    echo json_encode($response);

}