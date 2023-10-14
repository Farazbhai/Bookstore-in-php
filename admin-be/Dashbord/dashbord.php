<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <div class="container">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Books</h6>
                                <h2 class="text-right"><i class="fa fa-book f-left"></i><span>486</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Category</h6>
                                <h2 class="text-right"><i class="fa fa-list f-left"></i><span>486</span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Authers</h6>
                                <h2 class="text-right"><i class="fa fa-pencil f-left"></i><span>486</span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Users</h6>
                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>486</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="chart_div" style="width: 900px; height: 500px;"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Age', 'Weight'],
                        [8, 12],
                        [4, 5.5],
                        [11, 14],
                        [4, 5],
                        [3, 3.5],
                        [6.5, 7]
                    ]);

                    var options = {
                        title: 'Age vs. Weight comparison',
                        hAxis: {
                            title: 'Age',
                            minValue: 0,
                            maxValue: 15
                        },
                        vAxis: {
                            title: 'Weight',
                            minValue: 0,
                            maxValue: 15
                        },
                        legend: 'none'
                    };

                    var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

                    chart.draw(data, options);
                }
            </script>
        <?php include "../leyout/footer.php"?>
        </div>
    </div>