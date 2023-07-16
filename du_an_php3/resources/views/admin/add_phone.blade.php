@extends('admin.layout.sidebar')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<style>
    .custom-form {
        max-width: 800px;
        /* Điều chỉnh kích cỡ theo ý muốn */
    }
</style>


<div class="container d-flex align-items-center justify-content-center vh-50">
    <div class="custom-form">
        <h1 class="text-center">Thêm sản phẩm</h1>

        <form action="{{route('route_product_add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex">
                <div class="m-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Giá</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Số lượng</label>
                        <input type="number" class="form-control" name="number">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Màu</label>
                        <input type="text" class="form-control" name="color">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Kích cỡ</label>
                        <input type="number" class="form-control" name="size">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">CPU</label>
                        <input type="text" class="form-control" name="cpu">
                    </div>
                </div>
                <div class="m-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ram</label>
                        <input type="number" class="form-control" name="ram">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Rom</label>
                        <input type="number" class="form-control" name="rom">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Pin</label>
                        <input type="number" class="form-control" name="pin">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Thương hiệu</label>
                        <input type="text" class="form-control" name="company">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Danh mục</label>
                        <select class="form-select" name="id_category">
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}"> {{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Trạng thái</label>
                        <select class="form-select" name="status">
                            <option value="Còn hàng" selected>Còn hàng</option>
                            <option value="Hết hàng">Hết hàng</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
