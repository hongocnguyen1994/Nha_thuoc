<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>EDIT</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="/">WEB BÁN THUỐC</a>
            <h4 class="navbar-collapse" style="color: white;">Sửa nhóm thuốc</h4>
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
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
            <div class="panel-body">
              <form>
                <div>
                  <label>Tên nhóm thuốc</label>
                  <input type="text" class="form-control" >
              </div>
              <br>
               <div>
                  <label>Ghi chú</label>
                  <input type="text" class="form-control" >
              </div>
              <br> 
              <button type="button" class="btn btn-default">Cập nhập
              </button>
              <button type="button" class="btn btn-default">Quay lại
              </button>
              </form>
            </div>
        </div>
            </div>

      <div style="height: 1000px;"></div>
    </div>
    
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>

</html>
