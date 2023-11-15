<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <link href="/assets/vendor/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Nhúng thư viện Chart.js -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/vendor/js/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
    <!-- Nhúng thư viện Chart.js -->
    <style>
    .colod {
        background-color: #EEEEEE;
        border-radius: 10px;
    }

    .noew {
        padding: 2%;
        border-radius: 100px;
    }

    .list-group-item {
        border: none;
    }
    </style>

    <div class="colod" style="font-size: 14px;">
        <div class="row noew">
            <div class="col-lg-2 ">

            <nav class="navbar navbar-expand-lg navbar-light  border-bottom" style="position: fixed ;z-index: 9999;">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle" hidden > Toggle Menu</button>
                        <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex" id="wrapper" style="width:300px;">
                                <!-- Sidebar-->
                                <div class="border-end list-group-item-secondary1 " style=" border-radius: 20px;"
                                    id="sidebar-wrapper">
                                    <div class="sidebar-heading list-group-item-secondary" style="border-radius:10px">
                                        <p style=" font-size: 25px;"><strong><span class="colored-text text-lg "
                                                    style="  background-color: DarkBlue;color: white;border-radius:5%;padding-right:5px;
                                                    padding-left:5px">SOCIAL</span>HEAT</strong>
                                        </p>
                                    </div>
                                    <div class="list-group list-group-flush " border:none style="width:75%">
                                        <a class="list-group-item list-group-item-action list-group-item-secondary p-3" href="dashboard"><img src="/assets/img/dashboard.svg"><strong> Dashboard</strong></a>
                                        <a class="list-group-item list-group-item-action list-group-item-secondary p-3" href="product"><img src="/assets/img/product.svg"><strong> Product</strong></a>
                                        <a class="list-group-item list-group-item-action list-group-item-secondary p-3" href="productManager"><img src="/assets/img/productt.svg"><strong> Product Advcant</strong> </a>
                                        <a class="list-group-item list-group-item-action list-group-item-secondary p-3" href="#!"><img src="/assets/img/storea.svg"><strong> Profile</strong></a>
                                        <a class="list-group-item list-group-item-action list-group-item-secondary p-3" href="supplier"><img src="/assets/img/supplier.svg"><strong> Supplier</strong></a>
                                        <a class="list-group-item list-group-item-action list-group-item-secondary p-3" href="#!"><img src="/assets/img/change.svg"><strong> Change Password</strong></a>
                                        <a class="list-group-item list-group-item-action list-group-item-secondary p-3"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
                                            aria-expanded="false" aria-controls="collapseWidthExample" href="#!"><img src="/assets/img/admin.svg"><strong> Admin</strong></a>
            
            
            
                                        <div style="min-height: 120px;">
                                            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                                <div class="card card-body list-group-item-secondary "
                                                    style="width: 200px;border:none;">
            
                                                    <li class="list-group-item list-group-item-secondary "
                                                        style="line-height: 0.5;"><i class="bi bi-dot"></i>
                                                        An item</li>
                                                    <li class="list-group-item list-group-item-secondary" style="line-height: 0.5;">
                                                        <i class="bi bi-dot"></i>A
                                                        second item</li>
                                                    <!-- <!-- <li class="list-group-item list-group-item-secondary "><i
                                                            class="bi bi-dot"></i>An item</li>
                                                    <li class="list-group-item list-group-item-secondary"><i class="bi bi-dot"></i>A
                                                        second item</li> -->
                                                    <li class="list-group-item list-group-item-secondary "
                                                        style="line-height: 0.5;"><i class="bi bi-dot"></i>An item</li>
                                                    <li class="list-group-item list-group-item-secondary "
                                                        style="line-height: 0.5;"><i class="bi bi-dot"></i>A second item</li>
            
            
                                                </div>
            
                                            </div>
                                        </div>
            
                                    </div>
                                    <div class="container">
                                        <div class="row mt-5 pt-5">
                                            <div class="col">
                                                <div class="circular-image small">
                                                    <img src="/assets/img/undraw_profile.svg" alt="Profile Image">
            
                                                </div>
                                            </div>
                                            <div class="col">
                                                Thành Trung
                                            </div>
                                            <div class="col">
            
                                                <i class="bi bi-gear"></i>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- Page content wrapper-->
            
                            </div>
                    </div>
                </nav>

            </div>


            <div class="col-lg-10" style="padding-left:100px">


                <?= $this->renderSection('content') ?>
            </div>
        </div>

    </div>


</html>