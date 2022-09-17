<?php include('../partials/header.php') ?>
<body>
    <div class="wrapper">
    <?php include('../partials/sidebars/manager.php') ?>

        <div class="main">
            <?php include('../partials/topbar.php') ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>

                    <div class="row">

                        <div class="col-xl-6">
                            <div class="card flex-fill w-100">
                                <div class="card-body py-3">
                                    <script type="text/javascript" src="https://c2dcf332.caspio.com/dp/7d9cb000d319b9584ab64a849855/emb"></script>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card flex-fill w-100">
                                <div class="card-body py-3">
                                    <script type="text/javascript" src="https://c2dcf332.caspio.com/dp/7d9cb0003f8dab6af09e4721aecf/emb"></script>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Latest Projects</h5>
                                </div>
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="d-none d-xl-table-cell">Start Date</th>
                                            <th class="d-none d-xl-table-cell">End Date</th>
                                            <th>Status</th>
                                            <th class="d-none d-md-table-cell">Assignee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Project Apollo</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                        </tr>
                                        <tr>
                                            <td>Project Fireball</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-danger">Cancelled</span></td>
                                            <td class="d-none d-md-table-cell">William Harris</td>
                                        </tr>
                                        <tr>
                                            <td>Project Hades</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                        </tr>
                                        <tr>
                                            <td>Project Nitro</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                        </tr>
                                        <tr>
                                            <td>Project Phoenix</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-md-table-cell">William Harris</td>
                                        </tr>
                                        <tr>
                                            <td>Project X</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                        </tr>
                                        <tr>
                                            <td>Project Romeo</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-md-table-cell">Christina Mason</td>
                                        </tr>
                                        <tr>
                                            <td>Project Wombat</td>
                                            <td class="d-none d-xl-table-cell">01/01/2021</td>
                                            <td class="d-none d-xl-table-cell">31/06/2021</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                            <td class="d-none d-md-table-cell">William Harris</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                            <div class="card flex-fill w-100">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Monthly Sales</h5>
                                </div>
                                <div class="card-body d-flex w-100">
                                    <div class="align-self-center chart chart-lg">
                                        <canvas id="chartjs-dashboard-bar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://Task Management.io/"
                                    target="_blank"><strong>Task Management</strong></a> - <a class="text-muted"
                                    href="https://Task Management.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://Task Management.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://Task Management.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://Task Management.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://Task Management.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        
    </div>

    <script src="/tm/js/app.js"></script>

</body>

</html>