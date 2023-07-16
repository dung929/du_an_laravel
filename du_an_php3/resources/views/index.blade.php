@extends('template.layout')
@section('content')
<div class="mb-[30px]">
    <div class="mb-[30px]">
        <div class="flex justify-between items-center">
            <h2 class="text-[30px] font-bold mb-2">Sản phẩm mới nhất</h2>
            <div><a href="" class="hover:text-red-300 hover:underline ">Xem thêm >></a></div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            @foreach($product as $pr)
            <div class="item border-2 rounded-2xl p-5">
                <div class="item2 mb-2">
                    <img src="{{ asset('img/'.$pr->img)}}" alt="" height="120px">
                    <div class="anh">
                        <img src="{{ asset('img/i1 (2).jpg') }}" alt="">
                    </div>
                </div>
                <h2 class="text-[25px] text-orange-500 mb-[10px] hover:underline hover:text-green-500 font-bold"><a href="">{{$pr->name}}</a></h2>
                <span class="block font-bold">Giá: {{$pr->price}} Vnđ</span>
                <span class="text-red-500">Số lượng:{{$pr->number}}</span>
                <div class="mt-[10px] flex justify-between items-center">
                    <div>
                        <i class="fas fa-shopping-cart border-2 p-2  rounded-2xl bg-green-200 font-bold hover:bg-red-300"> <a href="">Add to cart</a></i>
                    </div>
                    <div>
                        <a href="" class="border-2 p-2  rounded-2xl bg-blue-200 font-bold">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mb-[30px]">
        <div class="flex justify-between items-center">
            <h2 class="text-[30px] font-bold">Phổ biến</h2>
            <div><a href="">Xem thêm >></a></div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="item border-2 rounded-2xl p-5">
                <div class="item2">
                    <img src="iphone/images (1).jpg" alt="">
                    <div class="anh">
                        <img src="iphone/tải xuống (4).jpg" alt="">
                    </div>
                </div>
                <h2 class="text-[20px] text-orange-500 mb-[10px] hover:underline hover:text-green-500"><a href="">Iphone 14 Pro Max</a></h2>
                <span class="block font-bold">39.000.000đ</span>
                <span class="line-through ">Giảm: 10%</span>
                <span class="text-red-400 ">-->20%</span>
                <div class="mt-[10px]">
                    <i class="fas fa-eye"></i>
                    <span class="">12.2k</span>
                </div>
            </div>
            <div class="item border-2 rounded-2xl p-5">
                <div class="item2">
                    <img src="iphone/images (1).jpg" alt="">
                    <div class="anh">
                        <img src="iphone/tải xuống (4).jpg" alt="">
                    </div>
                </div>
                <h2 class="text-[20px] text-orange-500 mb-[10px] hover:underline hover:text-green-500"><a href="">Iphone 14 Pro Max</a></h2>
                <span class="block font-bold">39.000.000đ</span>
                <span class="line-through ">Giảm: 10%</span>
                <span class="text-red-400 ">-->20%</span>
                <div class="mt-[10px]">
                    <i class="fas fa-eye"></i>
                    <span class="">12.2k</span>
                </div>
            </div>
            <div class="item border-2 rounded-2xl p-5">
                <div class="item2">
                    <img src="iphone/images (1).jpg" alt="">
                    <div class="anh">
                        <img src="iphone/tải xuống (4).jpg" alt="">
                    </div>
                </div>
                <h2 class="text-[20px] text-orange-500 mb-[10px] hover:underline hover:text-green-500"><a href="">Iphone 14 Pro Max</a></h2>
                <span class="block font-bold">39.000.000đ</span>
                <span class="line-through ">Giảm: 10%</span>
                <span class="text-red-400 ">-->20%</span>
                <div class="mt-[10px]">
                    <i class="fas fa-eye"></i>
                    <span class="">12.2k</span>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-[30px]">
        <div class="flex justify-between items-center">
            <h2 class="text-[30px] font-bold">Đang giảm giá</h2>
            <div><a href="">Xem thêm >></a></div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="item border-2 rounded-2xl p-5">
                <div class="item2">
                    <img src="iphone/images (1).jpg" alt="">
                    <div class="anh">
                        <img src="iphone/tải xuống (4).jpg" alt="">
                    </div>
                </div>
                <h2 class="text-[20px] text-orange-500 mb-[10px] hover:underline hover:text-green-500"><a href="">Iphone 14 Pro Max</a></h2>
                <span class="block font-bold">39.000.000đ</span>
                <span class="line-through ">Giảm: 10%</span>
                <span class="text-red-400 ">-->20%</span>
                <div class="mt-[10px]">
                    <i class="fas fa-eye"></i>
                    <span class="">12.2k</span>
                </div>
            </div>
            <div class="item border-2 rounded-2xl p-5">
                <div class="item2">
                    <img src="iphone/images (1).jpg" alt="">
                    <div class="anh">
                        <img src="iphone/tải xuống (4).jpg" alt="">
                    </div>
                </div>
                <h2 class="text-[20px] text-orange-500 mb-[10px] hover:underline hover:text-green-500"><a href="">Iphone 14 Pro Max</a></h2>
                <span class="block font-bold">39.000.000đ</span>
                <span class="line-through ">Giảm: 10%</span>
                <span class="text-red-400 ">-->20%</span>
                <div class="mt-[10px]">
                    <i class="fas fa-eye"></i>
                    <span class="">12.2k</span>
                </div>
            </div>
            <div class="item border-2 rounded-2xl p-5">
                <div class="item2">
                    <img src="iphone/images (1).jpg" alt="">
                    <div class="anh">
                        <img src="iphone/tải xuống (4).jpg" alt="">
                    </div>
                </div>
                <h2 class="text-[20px] text-orange-500 mb-[10px] hover:underline hover:text-green-500"><a href="">Iphone 14 Pro Max</a></h2>
                <span class="block font-bold">39.000.000đ</span>
                <span class="line-through ">Giảm: 10%</span>
                <span class="text-red-400 ">-->20%</span>
                <div class="mt-[10px]">
                    <i class="fas fa-eye"></i>
                    <span class="">12.2k</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
