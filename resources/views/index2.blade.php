<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتبة</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center block" style="display: block;">
        <div class="style02 bg-white py-6 px-9 flex items-center justify-between">
            <a href="#" class="style03 ttext-2xl font-extrabold text-black"></i></a>
            <form action=""
                class="search-form h-20vw border border-solid border-gray-200 overflow-hidden bg-white flex items-center">
                <input type="search" name="" placeholder="...بحث" id="search-box"
                    class="text-3xl px-3 py-3  h-full focus:outline-none border-gray-700 text-right font-bold  w-[50rem]">
                <label for="search-box"
                    class="fas fa-search text-4xl pr-6 text-gray-700 cursor-pointer hover:text-green-600"></label>
            </form>

            <div class="style04 text-gray-700 cursor-pointer">
                <div id="search-btn"
                    class="fas fa-search hidden text-5xl ml-6 text-gray-700 cursor-pointer hover:text-green-600"></div>
                <a href="#"
                    class="fas fa-heart text-5xl ml-6 text-gray-700 cursor-pointer hover:text-green-600"></a>
                <a href="{{ route('shopping.carts') }}"
                    class="fas fa-shopping-cart text-5xl ml-6 text-gray-700 cursor-pointer hover:text-green-600"></a>
                <a href="register">
                    <div id="login-btn"
                        class="fas fa-user text-5xl ml-6 text-gray-700 cursor-pointer hover:text-green-600"></div>
                </a>
            </div>
        </div>
    </div>
    <a href="Dashboard" class="text-6xl ml-20 text-gray-600 flex"><i
            class="fa-solid fa-bars absolute transform -translate-y-[154%]"></i></a>
    <header class="style01 bg-white py-6 px-9 flex items-center justify-between">

        <div class="header-2 bg-green-600 w-full">
            <nav class="navbar text-center">
                <div class="mx-auto  p-8">
                    <a href="#footer"
                        class=" h-full px-6 py-3 text-2xl text-white font-bold hover:bg-green-500 ">معلومات عنا</a>
                    <a href="#reviews"
                        class="style09 h-full px-6 py-3 text-2xl text-white hover:bg-green-500 font-bold">أراء
                        العملأء</a>
                    <a href="#featured"
                        class="style09 h-full px-6 py-3 text-2xl text-white hover:bg-green-500 font-bold">الكتب</a>
                    <a href="#arrivals"
                        class="style09 h-full px-6 py-3 text-2xl text-white hover:bg-green-500 font-bold">العروض</a>
                    <a href="#home"
                        class="style09 h-full px-6 py-3 text-2xl text-white hover:bg-green-500 font-bold">الصفحة
                        الرئيسية</a>
                </div>
            </nav>
        </div>
    </header>
    <nav class="bottom-navbar fixed left-0 right-0 bottom-0 z-50 bg-green-600 text-center hidden">
        <a href="#home" class="fas fa-home text-3xl py-8 px-8 text-white hover:bg-green-600"></a>
        <a href="#featured" class="fas fa-list text-3xl py-8 px-8 text-white hover:bg-green-600"></a>
        <a href="#arrivals" class="fas fa-tags py-8 text-3xl py-8 px-8 text-white hover:bg-green-600"></a>
        <a href="#reviews" class="fas fa-comments py-8 text-3xl py-8 px-8 text-white hover:bg-green-600"></a>
        <a href="#blogs" class="fas fa-blogs py-8 text-3xl py-8 px-8 text-white hover:bg-green-600"></a>
    </nav>
    <!--<div class="login-form-container">-->

    <div id="close-login-btn"></div>


    <section class="home py-[5rem] px-[9%]   bg-center"
        style="background-image: url('Books/IMG/00000.jpg'); background-size: 100% 100%;" id="home">
        <div class="row flex items-center flex-wrap gap-1.5rem">
            <div class="style05 " style=" flex: 1 1 42rem;">
                <h3 class="text-gray-700 text-7xl pb-4"> مكتبة إلكترونية</h3>
                <p style="font-size: 17px;font-weight: bold;"
                    class="text-gray-600
                text-base
                leading-8
                py-4">
                    استمتع بتجربة فريدة للاكتشاف وشراء أحدث الكتب والمصادر
                    التعليمية
                    نقدم لك مجموعة متنوعة من الأعمال الأدبية والعلمية من مؤلفين محترفين
                </p>
                <a href="{{ route('book') }}"
                    class="btn-1 font-bold  text-center mt-4 inline-block rounded-md text-white bg-green-600  font-bold cursor-pointer  ml-6  cursor-pointer text-4xl py-3 pt-4 px-12 hover:bg-green-700
                ">عرض
                    الكتب</a>
            </div>
            <div class="swiper style07 text-align: center; margin-top: 2rem;" style="flex: 1 1 42rem;">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <a href="#"
                            class="swiper-slide text-2.5xl ml-6 text-gray-700 cursor-pointer hover: text-green-600 h-100"><img
                                src="{{ asset('public/image/' . $product->image) }}"
                                alt="{{ $product->book_name }}"></a>
                    @endforeach
                </div>
                <img src="Books/IMG/stan.png" class="stand w-full mt-n8" alt="">
            </div>
        </div>
    </section>
    <section
        class="icons-container py-[5rem] px-[9%] grid grid-cols-3 sm:grid-cols-3 md:grid-cols-3lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-6">
        <div class="icons">
            <i class="fas fa-plane text-7xl text-green-600"></i>
            <div class="content ">
                <h3 class="text-3xl text-black-400 pt-2 font-bold">الشحن مجاني</h3>
                <p class="text-2xl text-gray-600 pt-2 font-bold">لكل طلب بقيمة تزيد عن $100</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-redo-alt text-7xl text-green-600"></i>
            <div class="content">
                <h3 class="text-3xl text-black-400 pt-2 font-bold">أرجع الطلب بكل سهولة</h3>
                <p class="text-2xl text-gray-600 pt-2 font-bold">أرجاع الطلب خلأل مدة لا تزيد عن 10 أيام</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-headset text-7xl text-green-600"></i>
            <div class="content">
                <h3 class=" text-3xl text-black-400 pt-2 font-bold">دعم على مدار 24 ساعة طوال أيام الاسبوع</h3>
                <p class="text-2xl text-gray-600 pt-2 font-bold">أتصل بنا في اي وقت</p>
            </div>
        </div>
    </section>

    <section class="featured py-[5rem] px-[9%]" id="featured">
        <h1 class="heading text-center mb-8 relative">
            <span
                class="px-8 py-2 bg-white border border-solid  border-gray-300 text-5xl font-bold text-gray-700">الكتب
                المميزة</span>
            <span
                class="absolute top-1/2 left-0 transform -translate-y-1/2 w-full h-[0.01rem] bg-gray-300 z-[-1]"></span>
        </h1>
        <div class=" swiper featured-slider">
            <div class="swiper-wrapper  mx-10">
                @foreach ($products as $product)
                    <div
                        class="swiper-slide box w-96 my-8 relative overflow-hidden border border-solid border-gray-300 text-center transform -translate-y-full ">
                        <div
                            class="icons border-t-0   border-l-0 border-r-0 border-b border-solid border-gray-700  absolute top-0 left-0 right-0 bg-white z-10 transform -translate-y-full hover:translate-y-0 hover:translate-y-26">
                            <a href=" #"
                                class="fas fa-search text-gray-700 text-4xl p-6 hover:bg-green-600  hover:text-white"></a>
                            <a href="#"
                                class="fas fa-heart text-gray-700 text-4xl p-6 hover:bg-green-600  hover:text-white"></a>
                            <a href="#"
                                class="fas fa-eye text-gray-700 text-4xl p-6 hover:bg-green-600  hover:text-white"></a>
                        </div>
                        <div class="image bg-15deg-gradient p-4 transform hover:translate-y-26">
                            <img class="h-96 mx-auto" src="{{ asset('public/image/' . $product->image) }}"
                                alt="{{ $product->book_name }}">
                        </div>
                        <div class="content p-6" style="background-color: #eee;">
                            <h3 class="text-gray-700 text-3xl mx-auto"> {{ $product->book_name }}</h3>
                            <div class="price  text-gray-700 text-3xl pt-4 font-bold mx-auto">{{ $product->price }}
                            </div>
                            <a href="{{ route('add_to_cart', $product->id) }}"
                                class=" mt-4 inline-block px-12 py-3 rounded-lg text-white bg-green-600 pt-4 text-2xl font-bold cursor-pointer hover:bg-green-700 mx-auto">أضافة
                                الى السلة</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div
                class="swiper-button-next border border-black-400 h-16 w-16 text-black bg-white after:text-1xl hover:text-white">
            </div>
            <div
                class="swiper-button-prev border border-black-400 h-16 w-16 text-black bg-white after:text-1xl hover:text-white">
            </div>
        </div>
    </section>
    <section class="deal py-[5rem] px-[9%]  flex items-center gap-6" style="background: #f3f3f3;">
        <div class="content flex-0 flex-shrink-0 flex-grow-1 w-42">
            <h3 class="text-green-600 text-4xl pb-5 font-bold">عرض اليوم</h3>
            <h1 class="font-bold text-gray-800 text-5xl">خصم يصل الى %50</h1>
            <p class="font-bold py-4 text-gray-600 text-3xl">عند شرىك بقيمة $150</p>
            <a href="{{ route('book') }}"
                class=" mt-4 inline-block rounded-md text-white bg-green-600 text-4xl font-bold ml-6 text-gray-700 cursor-pointer pt-4 hover:bg-green-700 px-8 py-3">تسوق
                الآن</a>
        </div>
        <div class=" flex flex-shrink-2 flex-grow-2 ">
            <img src="Books/IMG/books-08.jpg" alt="" class="">
        </div>
    </section>
    <section class="bg-right bg-cover bg-center bg-fixed" style="background-image: url('/Books/IMG/comments.png');">
        <form class="mx-0 max-w-full max-w-45rem mx-auto text-center py-20" method="post"
            action="{{ route('comments.add') }}" enctype="multipart/form-data">
            @csrf
            <h3 class="text-white text-5xl font-auto">أضافة تعليق
            </h3>
            <input type="text" name="comments" placeholder="أدخل التعليق "
                class="w-77 text-center text-xl h-16  my-28 px-5 py-4 text-black rounded-md">
            <input type="submit" value="أرسال"
                class=" flex items-center justify-center mx-auto w-80 h-16 rounded-md text-white text-2xl pl-17 bg-green-600 cursor-pointer 
                hover: bg-green-700 hover:text-white">
        </form>
    </section>
    <section class="reviews py-[5rem] px-[9%]" id="reviews">
        <h1 class="heading text-center mb-8 relative">
            <span class="px-8 py-2 bg-white border border-solid  border-gray-300 text-5xl font-bold text-gray-700">أراء
                العملأء</span>
            <span
                class="absolute top-1/2 left-0 transform -translate-y-1/2 w-full h-[0.01rem] bg-gray-300 z-[-1]"></span>
        </h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                @foreach ($comment as $comment)
                    @foreach ($users as $user)
                        <div
                            class="swiper-slide box w-150 border border-solid border-gray-300  p-8 text-center my-8 hover:border-5 hover:border-black">
                            <img class="m-auto h-28 w-28 border rounded-full object-cover" src="Books/IMG/login.png"
                                alt="">
                            <h3 class="text-gray-700 text-4xl py-2">{{ $user->name }}
                                <p class="text-gray-600 text-2xl py-4 leading-2">{{ $comment->comments }}
                                </p>
                                <div class="stars">
                                    <i class="fas fa-star text-3xl text-green-600"></i>
                                    <i class="fas fa-star text-3xl text-green-600"></i>
                                    <i class="fas fa-star text-3xl text-green-600"></i>
                                    <i class="fas fa-star text-3xl text-green-600"></i>
                                    <i class="fas fa-star-half-alt text-3xl text-green-600"></i>
                                </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <section class="blogs py-[5rem] px-[9%]" id="blogs">
        <h1 class="heading text-center mb-8 relative">
            <span
                class="px-8 py-2 bg-white border border-solid  border-gray-300 text-5xl font-bold text-gray-700">الكتب</span>
            <span
                class="absolute top-1/2 left-0 transform -translate-y-1/2 w-full h-[0.01rem] bg-gray-300 z-[-1]"></span>
        </h1>
        <style>
            .showless {
                height: 70px;
                overflow: hidden;
            }
        </style>
        <div class="swiper blogs-slider">
            <div class="swiper-wrapper">
                <div
                    class="swiper-slide  box my-8 border border-solid border-gray-400 hover:border-1 hover:border-black hover:my-8 transition-all">
                    <div class="image h-140 w-full overflow-hidden bg-gray-200">
                        <img class="img-hight w-full object-cover hover:scale-110 m-auto"
                            src="Books/IMG/backdrop.jpg" alt="">
                    </div>

                    <div class="content p-6">
                        <h3 class="text-5xl text-gray-700">رواية المزدوج</h3>
                        <p id="show" class="showless text-3xl text-gray-600 py-4 leading-8" maxlength="130">
                            حوالي
                            الثامنة
                            صباحاً استيقظ
                            ياكوف بتروفيتش غوليادكين، فأخذ يتثاءب ويتمطى، ثم فتح عينيه آخر
                            ...الأمر. ورغم ذلك ليث مستلقياً على سريره
                        </p>
                        <a id="moer" href="#"
                            class="btn-0 mt-4 inline-block px-3 py-2 rounded-md text-white bg-green-600 pt-4 pb-2 pl-6 pr-6 text-3xl font-bold  ml-6 text-gray-700 cursor-pointer hover:bg-green-700">قراءة
                            المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="footer py-[5rem] px-[9%]" id="footer">
        <div class="box-container grid grid-cols-1 sm:grid-cols-auto-fit md:grid-cols-auto-fit md:grid-cols-minmax-25rem lg:grid-cols-4 gap-6"
            style="direction: rtl;">
            <div class="box">
                <h3 class="font-bold mb-2 text-4xl text-gray-800 py-4">المناطق</h3>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-map-marker-alt mr-2 text-green-600 pr-2 pl-5 "></i>العراق</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-map-marker-alt mr-2 text-green-600 pr-2  pl-5"></i>بصرة</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-map-marker-alt mr-2 text-green-600 pr-2  pl-5"></i>بغداد</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-map-marker-alt mr-2 text-green-600 pr-2  pl-5"></i>كربلاء</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-map-marker-alt mr-2 text-green-600 pr-2  pl-5"></i>نجف</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-map-marker-alt mr-2 text-green-600 pr-2  pl-5"></i>سامراء</a>
            </div>
            <div class="box">
                <h3 class="font-bold mb-2 text-4xl text-gray-800 py-4">التنقل</h3>
                <a href="#home"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-displayhover:pr-2"><i
                        class="fas fa-arrow-left mr-2    text-green-600 pr-2  pl-5"></i>الصفحة الرىيسية</a>
                <a href="#featured"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-arrow-left   mr-2 text-green-600 pr-2  pl-5"></i>الكتب</a>
                <a href="#arrivals"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-arrow-left    mr-2 text-green-600 pr-2  pl-5"></i>العروض</a>
                <a href="#reviews"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-arrow-left   mr-2 text-green-600 pr-2  pl-5"></i>أراء العملأء</a>
                <a href="#reviews"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-arrow-left   mr-2 text-green-600 pr-2  pl-5"></i>الاتصال</a>

            </div>
            <div class="box">
                <h3 class="font-bold mb-2 text-4xl text-gray-800 py-4">الاسئلة الشائعة</h3>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display hover:pr-2"><i
                        class="fas fa-arrow-left mr-2 text-green-600 pr-2  pl-5 "></i>ما هي طرق الدفع؟</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display pl-5 hover:pr-2"><i
                        class="fas fa-arrow-left mr-2 text-green-600 pr-2  pl-5"></i>هل يمكنني الغاء الطلب؟</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display pl-5 hover:pr-2"><i
                        class="fas fa-arrow-left mr-2 text-green-600 pr-2  pl-5"></i>كيف يمكنني التواصل مع فريق
                    الدعم؟</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display pl-5 hover:pr-2"><i
                        class="fas fa-arrow-left mr-2 text-green-600 pr-2  pl-5"></i>هل تتوفر خدمة توصيل؟</a>
                <a href="#"
                    class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display pl-5 hover:pr-2 "><i
                        class="fas  fa-arrow-left mr-2 text-green-600 pr-2  pl-5"></i>خدماتنا؟</a>
            </div>
            <div class="box">
                <h3 class="font-bold mb-2 text-4xl text-gray-800 py-4">التواصل</h3>
                <div>
                    <a href="#"
                        class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4 my-display pl-5 hover:pr-2 "><i
                            class="fas fa-phone mr-2 text-green-600 pr-2  pl-5"></i>07739655536</a>
                    <a href="#"
                        class="btn-1 font-bold  text-right text-3xl ml-6 text-gray-600 cursor-pointer py-4  pl-5 hover:pr-2 "><i
                            class="fas fa-envelope mr-2 text-green-600 pr-2  pl-5"></i>Books@gmail.com</a>
                </div>

    </section>
    <div class="share pb-20 text-center">
        <a href="#" style="line-height: 5rem"
            class="fab fa-facebook-f mx-auto text-3xl ml-6 text-gray-700 cursor-pointer h-20 w-20 leading-5  text-white bg-green-600 mx-1 rounded-full hover:bg-gray-500"></a>
        <a href="#" style="line-height: 5rem"
            class="fab fa-twitter mx-auto text-3xl ml-6 text-gray-700 cursor-pointer h-20 w-20 leading-5  text-white bg-green-600 mx-1 rounded-full hover:bg-gray-500"></a>
        <a href="https://www.instagram.com/24.web?igsh=MTNpYm10anRicjMxdg==" style="line-height: 5rem"
            class="fab fa-instagram mx-auto text-4xl ml-6 text-gray-700 cursor-pointer h-20 w-20 leading-5  text-white bg-green-600 mx-1 rounded-full hover:bg-gray-500"></a>
        <a href="#" style="line-height: 5rem"
            class="fab fa-linkedin mx-auto text-3xl ml-6 text-gray-700 cursor-pointer h-20 w-20 leading-5 text-white bg-green-600 mx-1 rounded-full hover:bg-gray-500"></a>
        <a href="#" style="line-height: 5rem"
            class="fab fa-pinterest mx-auto text-3xl ml-6 text-gray-700 cursor-pointer h-20 w-20 leading-5  text-white bg-green-600 mx-1 rounded-full hover:bg-gray-500"></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#moer').click(function() {
                $('#show').toggleClass('showless');

                var isfound = $('#show').hasClass('showless');
                if (isfound == true) {
                    $('#moer').text('المزيد');
                    $('#moer').addClass('bg-green-600');
                    $('#moer').removeClass('bg-red-600');
                } else {
                    $('#moer').text('عناصر أقل');
                    $('#moer').addClass('bg-red-600');
                    $('#moer').removeClass('bg-green-600');
                }
            });
        });
    </script>

    <style>
        :root {
            --green: #27ae60;
            --dark-color: #219150;
            --black: #444;
            --light-color: #666;
            --border: .1rem solid rgba(0, 0, 0, .1);
            --border-hover: .1rem solid var(--black);
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);

        }


        @layer utilities {
            .bg-15deg-gradient {
                background-image: linear-gradient(15deg, #eee 30%, #fff 30.1%);
            }
        }


        @layer utilities {
            .my-flex {
                flex: 2 1 0%;
            }
        }

        @layer utilities {
            .img-hight {
                height: 37rem !important;
            }
        }

        @layer utilities {
            .my-display {
                display: block !important;
            }
        }

        .featured .featured-slider .box:hover .icons {
            transform: translateY(0%);
        }

        .btn:hover {
            background: #1a7c43;
            color: #333;
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

        .style01 .header-2.active {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;

        }

        .style01 .header-2 .navbar a:hover {
            background: var(--dark-color);
            padding: 14px;
        }

        .home .row .style07 a:hover img {
            transform: scale(.9);

        }

        .featured .featured-slider .box:hover {
            border: 0.1rem solid #444 !important;
        }

        .featured .featured-slider .box:hover .image {
            transform: translateY(6rem);
        }

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



            .home .row .style05 {
                text-align: center;
            }

            .home .row .style05 h3 {
                font-size: 3.5rem;
            }
        }

        @media (max-width:450px) {
            html {
                font-size: 50%;
            }
        }

        @media (max-width: 768px) {
            .search-form {
                display: none;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Your Custom JavaScript -->
    <script src="Books/script.js"></script>
</body>

</html>
