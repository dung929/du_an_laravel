<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="max-w-7xl mx-auto">
            <div class="p-5 flex justify-between items-center">
                <div class="w-[200px]">
                    <img src="{{ asset('img/abc.jpg') }}" alt="">
                </div>
                <div>
                    <ul class="flex">
                        <li class="p-5 hover:text-blue-500 hover:underline font-bold"><a href="">Trang chủ</a></li>
                        <li class="p-5 hover:text-blue-500 hover:underline font-bold"><a href="">Giới thiệu</a></li>
                        <li class="p-5 hover:text-blue-500 hover:underline font-bold"><a href="">Liên hệ</a></li>
                        <li class="p-5 hover:text-blue-500 hover:underline font-bold"><a href="">Góp ý</a></li>
                        <li class="p-5 hover:text-blue-500 hover:underline font-bold"><a href="">Hỏi đáp</a></li>
                    </ul>
                </div>
                <div>
                    <form action="" class="inline-block">
                        <input type="text" class="border-2 rounded-2xl" placeholder="  Iphone">
                        <button><i class="fas fa-search p-2"></i></button>
                    </form>
                    <i class="fas fa-shopping-cart p-2"></i>
                    <a href="user/login.php"><i class="fas fa-user p-2"></i></a>
                </div>
            </div>
        </div>
    </header>
    <div class="max-w-7xl mx-auto">
        <div class="banner rounded-2xl">
            <img src="{{ asset('img/banner.png') }}" alt="" class="img-banner">
        </div>
        <div class=" p-4 rounded-2xl mt-[20px]">
            <marquee behavior="#" direction="left">
                <p class="text-2xl font-bold text-red-500">
                    Chào mừng các bạn đã đến với shop JUNGX của chúng tôi!!! Rất hân hạnh được tài trợ!!!
                </p>
            </marquee>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
        <div class="main mt-12">
            <div class="admin">
                <div class="border-2 mb-[20px] rounded-2xl">
                    <h2 class="border-2 bg-blue-200 p-3 font-bold rounded-2xl">Tìm kiếm sản phẩm</h2>
                    <form action="">
                        <div class="p-5">
                            <h3>Hãng điện thoại:</h3>
                            <select name="" id="" class="border-2 rounded-2xl p-1 mt-[5px] mb-[10px] w-full">
                                <option value="">Sam Sung</option>
                                <option value="">Oppo</option>
                                <option value="">Iphone</option>
                                <option value="">Vivo</option>
                                <option value="">LG</option>
                                <option value="">Redmi</option>
                                <option value="">Xiaomi</option>
                            </select>
                            <h3>Giá tiền:</h3>
                            <div class="w-full mt-[5px]">
                                <select name="" id="" class="border-2 rounded-2xl p-1 mt-[5px] mb-[10px] w-full">
                                    <option value="">Dưới 2 triệu</option>
                                    <option value="">2 triệu - 4 triệu</option>
                                    <option value="">7 triệu - 13 triệu</option>
                                    <option value="">Trên 13 triệu</option>
                                </select>
                            </div>
                            <button class="border-2 bg-red-200 rounded-2xl p-2 mt-[20px] w-full font-bold text-black">Tìm
                                kiếm</button>
                        </div>
                    </form>
                </div>
                <div class="category">
                    <div class="border-2 rounded-2xl mb-[20px]">
                        <h2 class="border-2 bg-blue-200 p-3 font-bold rounded-2xl">Danh mục</h2>
                        <h2><a href="">Sam Sung</a></h2>
                        <hr>
                        <h2><a href="">Oppo</a></h2>
                        <hr>
                        <h2><a href="">Iphone</a></h2>
                        <hr>
                        <h2><a href="">Vivo</a></h2>
                        <hr>
                        <h2><a href="">LG</a></h2>
                        <hr>
                        <h2><a href="">Redmi</a></h2>
                        <hr>
                        <h2><a href="">Xiaomi</a></h2>
                        <hr>
                        <div class="text-center bg-blue-200 p-4">
                            <form action="" method="post">
                                <input type="text" placeholder="Từ khóa tìm kiếm" class="border-2 p-2 rounded-2xl w-[300px]">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <main>
                @include('template.error')

                @yield('content')
            </main>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
        <footer class="max-w-7xl mx-auto bg-gray-200 py-10 ">
            <div class="py-10 bg-emerald-800 text-gray-200">
                <div class="max-w-7xl mx-auto py-5">
                    <div class="grid grid-cols-3 gap-2 p-5 items-center">
                        <div class="mb-5 mx-10">
                            <h4 class="text-2xl pb-4 hover:text-green-500"><a href="">JUNGX</a></h4><br>
                            <p>dungbdph24774@fpt.edu.vn</p><br>
                            <p>+84 0968630037</p><br>
                            <p>+84 0813498549</p><br>
                            <p>An Vinh - Quynh Phu - Thai Binh</p>
                        </div>
                        <div class="mb-5">
                            <h4 class="text-2xl pb-4 hover:text-green-500">Menu</h4><br>
                            <ul class="text-while-500">
                                <li class="pb-4"><i class="fa fa-chevron-right text-green-500"></i><a href="#" class="hover:text-green-500"> Trang Chủ</a></li>
                                <li class="pb-4"><i class="fa fa-chevron-right text-green-500"></i><a href="#" class="hover:text-green-500"> Giới Thiệu</a></li>
                                <li class="pb-4"><i class="fa fa-chevron-right text-green-500"></i><a href="#" class="hover:text-green-500"> Liên Hệ</a></li>
                                <li class="pb-4"><i class="fa fa-chevron-right text-green-500"></i><a href="#" class="hover:text-green-500"> Góp Ý</a></li>
                                <li class="pb-4"><i class="fa fa-chevron-right text-green-500"></i><a href="#" class="hover:text-green-500"> Hỏi Đáp</a></li>
                            </ul>

                        </div>
                        <div class="mb-5">
                            <h4 class="text-2xl pb-4  hover:text-green-500">Tham gia bảng tin</h4>
                            <p class="text-gray-400 mb-5 text-xl">Tham gia ! để cùng trải nghiệm với rất nhiều sản phẩm
                                khác</p>
                            <form action="#" class="flex flex-row flex-wrap">
                                <input type="text" class="text-black  w-2/3 p-2 focus:border-yellow-500" placeholder="email@xample.com" required>
                                <button class="p-2 w-1/3 bg-yellow-500 text-black hover:bg-yellow-600 font-bold">Subscribe</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full bg-emerald-900 text-gray-300 px-10">
                <div class="max-w-7xl flex  flex-row py-4 mx-auto justify-between items-center">
                    <div class="text-center  ">
                        <div>
                            Copyright <strong><span>dungbdph24774</span></strong>. All Rights Reserved
                        </div>
                        <div>
                            Designht by <a href="#" class="text-yellow-500">dungbdph24774</a>
                        </div>
                    </div>
                    <div class="text-center text-xl text-white mb-2">
                        <a href="#" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-youtube"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
