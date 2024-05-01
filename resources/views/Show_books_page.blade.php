<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الكتب</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- fonts.googleapis.com -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body style="background: #fff;">
    <a href="{{ route('index') }}" class="">

        <h2 style="transform: translate(6%, 96%);
    z-index: 11;
    position: absolute;" class="font-bold text-4xl">
            مكتبة <span class="bg-[#16a34a] text-white px-2 rounded-md text-4xl"
                style="padding-bottom: 0.5rem;">إلكترونية</span></h2>
    </a>
    <header class="style01">
        <div class="style02" style="direction: ltr;">
            <a href="#" class="style03"><i class="fa-solid fa-books fa-xl"></i></a>
            <form action="" class="search-from"
                style="background: #fff;;border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;z-index: 11;">
                <input type="search" name="" placeholder="...بحث" id="search-box"
                    style="text-align: right;border-top-left-radius: 12px;
                    border-bottom-left-radius: 12px;font-weight: bolder;font-size: 17px;border: none;">
                <label for="search-box" class="fas fa-search"
                    style="font-size: 24px;padding-left: 13px;margin: auto;border-radius: 12px;"></label>
            </form>
            <div class="style04">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="{{ route('shopping.carts') }}" class="fas fa-shopping-cart"></a>
                <a href="singup.php">
                    <div id="login-btn" class="fas fa-user"></div>
                </a>
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar" style="width: 100%;text-align: center;">
                <div style="direction: rtl;">
                    <a href="#home" class="style09">الصفحة الرىيسية</a>
                    <a href="#featured" class="style09">الكتب</a>
                    <a href="#arrivals" class="style09">العروض</a>
                    <a href="#reviews" class="style09">أراء العملأء</a>
                    <a href="#footer" class="style09">معلومات عنا</a>
                </div>
            </nav>
        </div>
    </header>
    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blogs"></a>
    </nav>
    <div style="text-align: center;
    padding-top: 1.5rem;
    font-size: 2rem;"> {{ session('success') }}</div>
    <section class="featured" id="featured">
        <div class="featured-slider">
            <div class="wrapper" style="display: flex; flex-wrap: wrap;">
                @foreach ($products as $product)
                    <div class="swiper-slide box" style="width: 20%;margin-right: 1rem;">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img class="image-transform" style="margin: auto;"
                                src="{{ asset('public/image/' . $product->image) }}" alt="{{ $product->book_name }}">
                        </div>
                        <div class="content">
                            <h3 style="margin: auto;">{{ $product->book_name }}</h3>
                            <div style="margin: auto;" class="price">{{ $product->price }}IQ </div>
                            <a href="{{ route('add_to_cart', $product->id) }}"
                                class=" mt-4 inline-block px-12 py-3 rounded-lg text-white bg-green-600 pt-4 text-2xl font-bold cursor-pointer hover:bg-green-700 mx-auto">أضافة
                                الى السلة</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- style -->
    <style>
        .wrapper {
            display: flex;
            flex-wrap: wrap;
        }

        .swiper-slide {
            flex: 0 0 24.1%;
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .swiper-slide {
                flex: 0 0 50%;
            }
        }

        @media (max-width: 480px) {
            .swiper-slide {
                flex: 0 0 100%;
            }
        }

        .image-transform {
            transition: transform 0.9s ease-in-out;
        }
    </style>

    <!-- bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;1,400&display=swap');

        :root {
            --green: #27ae60;
            --dark-color: #219150;
            --black: #444;
            --light-color: #666;
            --border: .1rem solid rgba(0, 0, 0, .1);
            --border-hover: .1rem solid var(--black);
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
            text-decoration: none;
            transition: all .2s linear;
            transition: width none;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 5rem;
            scroll-behavior: smooth;
        }

        html::-webkit-scrollbar {
            width: 1rem;
        }

        html::-webkit-scrollbar-track {
            background: transparent;
        }

        html::-webkit-scrollbar-thumb {
            background: var(--black);
        }

        section {
            padding: 5rem 9%;
        }

        .heading {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .heading::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
            height: .01rem;
            background: rgba(0, 0, 0, .1);
            z-index: -1;
        }

        .heading span {
            font-size: 3rem;
            padding: .5rem 2rem;
            color: var(--black);
            background: #fff;
            border: var(--border);
        }

        .btn {
            margin-top: 1rem;
            display: inline-block;
            padding: .9rem 3rem;
            border-radius: .5rem;
            color: #fff;
            background: var(--green);
            font-size: 1.7rem;
            cursor: pointer;
            font-weight: bold;
        }

        .btn:hover {
            background: var(--dark-color);
        }

        .style01 .style02 {
            background: #fff;
            padding: 1.5rem 9%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .style01 .style02 .style03 {
            font-size: 2.5rem;
            font-weight: bolder;
            color: var(--black);
        }

        .style01 .style02 .style03 i {
            color: var(--green);
        }

        .style01 .style02 .search-from {
            width: 50rem;
            height: 5rem;
            border: var(--border);
            overflow: hidden;
            background: #fff;
            display: flex;
            align-items: center;
        }

        .style01 .style02 .search-from input {
            font-size: 1.6rem;
            padding: 0 1.2rem;
            height: 100%;
            width: 100%;
            text-transform: none;
            color: var(--black);
        }

        .style01 .style02 .search-from label {
            font-size: 2.5rem;
            padding-right: 1.5rem;
            color: var(--black);
            cursor: pointer;
        }

        .style01 .style02 .search-from label:hover {
            color: var(--green);
        }

        .style01 .style02 .style04 div,
        .style01 .style02 .style04 a {
            font-size: 2.5rem;
            margin-left: 1.5rem;
            color: var(--black);
            cursor: pointer;
        }

        .style01 .style02 .style04 div:hover,
        .style01 .style02 .style04 a:hover {
            color: var(--green);
        }

        #search-btn {
            display: none;
        }

        .style01 .header-2 {
            background: var(--green);
        }

        .style01 .header-2 .navbar {
            text-align: center;
        }

        .style01 .header-2 .navbar a {
            color: #fff;
            display: inline-block;
            padding: 1.2rem;
            font-size: 1.7rem;
        }

        .style01 .header-2 .navbar a:hover {
            background: var(--dark-color);
        }

        .style01 .header-2.active {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .bottom-navbar {
            text-align: center;
            background: var(--green);
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1000;
            display: none;
        }

        .bottom-navbar a {
            font-size: 2.5rem;
            padding: 2rem;
            color: #fff;
        }

        .bottom-navbar a:hover {
            background: var(--dark-color);
        }



        .icons-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap: 1.5rem;
        }

        .icons-container .icons {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 2rem 0;
        }

        .icons-container .icons i {
            font-size: 3.5rem;
            color: var(--green);
        }

        .icons-container .icons h3 {
            font-size: 2.2rem;
            color: var(--black);
            padding-top: .5rem;
        }

        .icons-container .icons p {
            font-size: 1.4rem;
            color: var(--light-color);
        }

        .featured .featured-slider .box {
            width: 25rem;
            margin: 2rem 0;
            position: relative;
            overflow: hidden;
            border: var(--border);
            text-align: center;
        }

        .featured .featured-slider .box:hover {
            border: var(--border-hover);
        }

        .featured .featured-slider .box .image {
            padding: 1rem;
            background: linear-gradient(15deg, #eee 30%, #fff 30.1%);
        }

        .featured .featured-slider .box:hover .image {
            transform: translateY(6rem);
        }

        .featured .featured-slider .box .image img {
            height: 25rem;
        }

        .featured .featured-slider .box .icons {
            border-bottom: var(--border-hover);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: #fff;
            z-index: 1;
            transform: translateY(-100%);
        }

        .featured .featured-slider .box:hover .icons {
            transform: translateY(0%);
        }

        .featured .featured-slider .box .icons a {
            color: var(--black);
            font-size: 2.2rem;
            padding: 1.5rem;
        }

        .featured .featured-slider .box .icons a:hover {
            background: var(--green);
            color: #fff;
        }

        .featured .featured-slider .box .content {
            background: #eee;
            padding: 1.5rem;
        }

        .featured .featured-slider .box .content h3 {
            font-size: 2rem;
            color: var(--black);
        }

        .featured .featured-slider .box .content .price {
            font-size: 2.2rem;
            color: var(--black);
            padding-top: 1rem;
        }

        /*النهاية*/
        @media (max-width:991px) {
            html {
                font-size: 55%;
            }

            .style01 .style02 {
                padding: 2rem;
            }

            section {
                padding: 3rem 2rem;
            }
        }

        @media (max-width:768px) {
            html {
                scroll-padding-top: 0;
            }

            body {
                padding-bottom: 6rem;
            }

            .style01 .header-2 {
                display: none;
            }

            .bottom-navbar {
                display: block;

            }

            #search-btn {
                display: inline-block;
            }

            .style01 .style02 {
                box-shadow: var(--box-shadow);
                position: relative;
            }

            .style01 .style02 .search-from {
                position: absolute;
                top: -115%;
                right: 2rem;
                width: 90%;
                box-shadow: var(--box-shadow);
            }

            .style01 .style02 .search-from.active {
                top: 115%;
            }
        }

        @media (max-width:450px) {
            html {
                font-size: 50%;
            }
        }
    </style>
</body>

</html>
