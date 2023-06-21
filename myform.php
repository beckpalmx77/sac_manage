<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include('includes/header.php');
    ?>

</head>


<body class="sidebar-mini fixed">

<div class="wrapper">
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <?php
    include('includes/topbar.php');
    include('includes/sidebar.php');
    include('includes/chat_stat_bar.php');
    ?>

    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Header Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header">
                        <h4>Form Elements Advance</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Forms Components</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Form Elements Advance </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">MaxLength</h5>
                        </div>
                        <div class="card-block">
                            <div class="row m-b-30 advance-elements">
                                <div class="row advance-elements">
                                    <div class="col-md-12">


                                        <table id='DocPriceHistory' class='display dataTable'>
                                            <thead>
                                            <tr>
                                                <th>เลขที่ใบ PR</th>
                                                <th>วันที่เอกสาร</th>
                                                <th>รหัสพัสดุ/อะไหล่</th>
                                                <th>ชื่อพัสดุ/อะไหล่</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>เลขที่ใบ PR</th>
                                                <th>วันที่เอกสาร</th>
                                                <th>รหัสพัสดุ/อะไหล่</th>
                                                <th>ชื่อพัสดุ/อะไหล่</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php

include('includes/javascript_src.php');

?>

    <script>
        $(document).ready(function () {
            let formData = {action: "GET_PRICE_HISTORY", sub_action: "GET_MASTER"};
            let dataRecords = $('#DocPriceHistory').DataTable({
                'lengthMenu': [[10, 20, 50, 100], [10, 20, 50, 100]],
                'language': {
                    search: 'ค้นหา', lengthMenu: 'แสดง _MENU_ รายการ',
                    info: 'หน้าที่ _PAGE_ จาก _PAGES_',
                    infoEmpty: 'ไม่มีข้อมูล',
                    zeroRecords: "ไม่มีข้อมูลตามเงื่อนไข",
                    infoFiltered: '(กรองข้อมูลจากทั้งหมด _MAX_ รายการ)',
                    paginate: {
                        previous: 'ก่อนหน้า',
                        last: 'สุดท้าย',
                        next: 'ต่อไป'
                    }
                },
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': 'model/api_part_price_history.php',
                    'data': formData
                },
                'columns': [
                    {data: 'doc_id'},
                    {data: 'doc_date'},
                    {data: 'part_id'},
                    {data: 'part_name'},
                    {data: 'more_detail'}
                ]
            });
        });
    </script>


</body>

</html>
