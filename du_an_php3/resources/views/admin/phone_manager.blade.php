@extends('admin.layout.sidebar')
@section('content')
<div>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Quản Lí Điện Thoại</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <button type="button" class="btn btn-primary" style="margin-bottom:15px ;">
                   <a href="{{route('route_product_add')}}" class="text-white text-decoration-none"> Thêm mới điện thoại</a>
                </button>

                <!-- Modal -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Màu</th>
                                <th>Hình ảnh</th>
                                <th>Kích cỡ</th>
                                <th>CPU</th>
                                <th>RAM</th>
                                <th>ROM</th>
                                <th>PIN</th>
                                <th>Hãng</th>
                                <th>Số lượng</th>
                                <th>Danh mục</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Màu</th>
                                <th>Hình ảnh</th>
                                <th>Kích cỡ</th>
                                <th>CPU</th>
                                <th>RAM</th>
                                <th>ROM</th>
                                <th>PIN</th>
                                <th>Hãng</th>
                                <th>Số lượng</th>
                                <th>Danh mục</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($product as $pr)
                            <tr>
                                <td>{{$pr->id}}</td>
                                <td>{{$pr->name}}</td>
                                <td>{{$pr->price}}</td>
                                <td>{{$pr->color}}</td>
                                <td><img src="{{asset('img/'.$pr->img)}}" alt="" width="50px"></td>
                                <td>{{$pr->size}}</td>
                                <td>{{$pr->cpu}}</td>
                                <td>{{$pr->ram}}</td>
                                <td>{{$pr->rom}}</td>
                                <td>{{$pr->pin}}</td>
                                <td>{{$pr->company}}</td>
                                <td>{{$pr->number}}</td>
                                <td>{{$pr->name_category}}</td>
                                <td>{{$pr->status}}</td>
                                <td class="d-flex"><a href="{{route('route_product_edit',['id'=>$pr->id])}}" class="btn btn-primary m-2">Sửa</a>
                                    <a href="" class="btn btn-danger m-2">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->

@endsection
