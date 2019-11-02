@extends('admin.layouts.main')
@section('content')
    <!-- content -->
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            <span>List User</span>
            <div class="card-body">
              <div>

                <!-- <div class="row">
                  <div class="col-lg-12">
                    <h1 class="page-header">Thêm Thành viên</h1>
                  </div>
                </div> -->
                <!--/.row-->
                <div class="row">
                  <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                      <!-- <div class="panel-heading"><i class="fas fa-user"></i> Thêm thành viên
                      </div> -->
                      <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">

                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">Thêm sản phẩm</h1>
                                    </div>
                                </div>
                                <!--/.row-->
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-lg-12">

                                        <div class="panel panel-primary">

                                            <div class="panel-body">
                                                <div class="bootstrap-table">
                                                    <div class="table-responsive">
                                                        <div class="alert bg-success" role="alert">
                                                            <svg class="glyph stroked checkmark">
                                                                <use xlink:href="#stroked-checkmark"></use>
                                                            </svg>Đã thêm thành công<a href="#" class="pull-right"><span
                                                                    class="glyphicon glyphicon-remove"></span></a>
                                                        </div>
                                                        <a href="addproduct.html" class="btn btn-primary">Thêm sản phẩm</a>
                                                        <table class="table table-bordered" style="margin-top:20px;">

                                                            <thead>
                                                                <tr class="bg-primary">
                                                                    <th>ID</th>
                                                                    <th>Thông tin sản phẩm</th>
                                                                    <th>Giá sản phẩm</th>
                                                                    <th>Tình trạng</th>
                                                                    <th>Danh mục</th>
                                                                    <th width='18%'>Tùy chọn</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <div class="row">
                                                                            <div class="col-md-3"><img src="img/ao-khoac.jpg" alt="Áo đẹp"
                                                                                    width="100px" class="thumbnail"></div>
                                                                            <div class="col-md-9">
                                                                                <p><strong>Mã sản phẩm : SP01</strong></p>
                                                                                <p>Tên sản phẩm :Áo Khoác Bomber Nỉ Xanh Lá Cây AK179</p>


                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>500.000 VND</td>
                                                                    <td>
                                                                        <a class="btn btn-success" href="#" role="button">Còn hàng</a>
                                                                    </td>
                                                                    <td>Áo Khoác Nam</td>
                                                                    <td>
                                                                        <a href="#" class="btn btn-warning"><i class="fa fa-pencil"
                                                                                aria-hidden="true"></i> Sửa</a>
                                                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i> Xóa</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <div class="row">
                                                                            <div class="col-md-3"><img src="img/ao-khoac.jpg" alt="Áo đẹp"
                                                                                    width="100px" class="thumbnail"></div>
                                                                            <div class="col-md-9">
                                                                                <p><strong>Mã sản phẩm : SP01</strong></p>
                                                                                <p>Tên sản phẩm :Áo Khoác Bomber Nỉ Xanh Lá Cây AK179</p>


                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>500.000 VND</td>
                                                                    <td>
                                                                        <a class="btn btn-danger" href="#" role="button">hết hàng</a>
                                                                    </td>
                                                                    <td>Áo Khoác Nam</td>
                                                                    <td>
                                                                        <a href="#" class="btn btn-warning"><i class="fa fa-pencil"
                                                                                aria-hidden="true"></i> Sửa</a>
                                                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i> Xóa</a>
                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                        <div align='right'>
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--/.row-->


                                    </div>
                                </div>

                                <!--/.row-->
                            </div>

                        </div>

                        <div class="clearfix"></div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- end content -->
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection
