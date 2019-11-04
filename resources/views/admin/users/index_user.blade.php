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
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        <a href="{{ url('admin/users/add') }}" class="btn btn-primary">Thêm Thành viên</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                          <hr>
                          @if (session('alert'))
                            <div class="alert alert-success">
                              {{ session('alert') }}
                            </div>    
                          @endif
                            <thead>
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    {{-- <th>Password</th> --}}
                                    <th>Phone</th>
                                    <th width='18%'>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($users as $user)
                              <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                {{-- <td>{{ $user->password }}</td> --}}
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <a href="/admin/users/edit/{{ $user->id }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                    <a href="/admin/users/index/delete/{{ $user->id }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                </td>
                            </tr>  
                              @empty
                                 Form User Empty!!! 
                              @endforelse
                                
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
