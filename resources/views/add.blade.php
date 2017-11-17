<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Thêm thuốc</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/sb-admin.css" rel="stylesheet">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/sb-admin.min.js"></script>
    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="/">WEB BÁN THUỐC</a>
            <h2 class="navbar-collapse" style="color: white;">Thêm mới thuốc</h2>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="addDrug">
                        <a class="nav-link" href="add">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">Thêm mới thuốc</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="list">
                        <i class="fa fa-fw fa-table"></i>
                        <span class="nav-link-text">Danh sách thuốc</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">Nhóm thuốc</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row carousel-holder">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {!! Form::open(['url' => '/add/submit', 'class' => 'row']) !!}
                                <!-- <form class="row" method="POST" action="/add/submit" accept-charset="UTF-8"> -->
                                    <div class="col-sm-6">
                                        <div>
                                            <label>Tên thuốc</label>
                                            <input type="text" class="form-control" name="drugName" placeholder="Tên thuốc / Hàm lượng">
                                        </div>
                                        <div>
                                            <label>Mã thuốc</label>
                                            <input type="text" class="form-control" name="drugCode" placeholder="TH99" >
                                        </div>
                                        <div>
                                            <label>Cảm quan</label>
                                            <input type="text" class="form-control" name="drugDescription" placeholder="Màu sắc,hình dáng,khối lượng,hình ảnh vv..">
                                        </div>
                                        <div>
                                            <label>Giá nhập</label>
                                            <input type="number" name="drugImportPrice" class="form-control" >
                                        </div>
                                        <div>
                                            <label>Giá bán lẻ</label>
                                            <input type="number" name="drugPrice" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <label>Số dư ban đầu</label>
                                            <input type="number" class="form-control" >
                                        </div>
                                        <div>
                                            <label>Giá nhập ban đầu</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div>
                                            <label>Hạn dùng</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div>
                                            <label>Nhóm thuốc</label>
                                            <select id ="thuoc" name="thuoc">
                                                <option value="">Bao cao su</option>
                                                <option value="">Vitamin C</option>
                                                <option value="">Vitamin B</option>
                                                <option value="">Vitamin A</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="addDrug" class="btn btn-default" value="Thêm mới">
                                    </div>
                                {!! Form::close() !!}
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </body>
</html>