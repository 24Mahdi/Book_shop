<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلة المشتريات</title>

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
</head>

<body>
    <div class="bg-gray-100 h-screen py-8">
        <a href="index1.php"
            style='float: left;font-size: 28px;text-shadow: 1px 1px 7px #333;color: #000;transform: translate(-66px, -4px);'>
            <i class="fa fa-reply" aria-hidden="true"></i></a>
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-semibold mb-4" style="text-align: right;">سلة المشتريات</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-3/4">
                    <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="text-left font-semibold">المنتج</th>
                                    <th class="text-left font-semibold">السعر</th>
                                    <th class="text-left font-semibold">العدد</th>
                                    <th class="text-left font-semibold">المجموع</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form method="post" action="{{ route('cart.add') }}" enctype="multipart/form-data">
                                    @csrf
                                    @php $total = 0 @endphp
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity']@endphp
                                            <tr data-id="{{ $id }}">
                                                <td data-th="Product" class="py-4">
                                                    <div class="flex items-center">
                                                        <img src="{{ asset('public/image/' . $details['image']) }}"
                                                            class="h-17 w-16 mr-4" alt="Product image">

                                                        <input type="hidden" name="image"
                                                            value="{{ $details['image'] }}">
                                                        <input name="book_name"type="text" readonly
                                                            value="{{ $details['book_name'] }}">
                                                    </div>
                                                </td>

                                                <td data-th="Price" class="py-4">

                                                    <input name="price" type="text"
                                                        value="{{ $details['price'] }}"readonly>
                                                </td>
                                                <td data-th="Quantity" class="py-4">
                                                    <input name="quantity"
                                                        style="background: #cccccc7d;border-radius: 0.3rem;width: 60%;border:none;padding-left: 0.3rem;"
                                                        class="cart_update quantity" type="number"
                                                        value="{{ $details['quantity'] }}" min="1">
                                                </td>
                                                <td data-th="Subtotal" class="py-4 ">
                                                    <input
                                                        style="margin-left: 1rem;
                                                "
                                                        name="total" type="text" readonly
                                                        value="IQ{{ $details['price'] * $details['quantity'] }}">
                                                </td>
                                                <td data-th="">
                                                    <div class="flex gap-4">
                                                        <button
                                                            class="remove middle none relative h-10 max-h-[40px] w-10 max-w-[40px] rounded-lg bg-red-500 text-center font-sans text-xs font-medium uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                                            type="button" data-ripple-light="true">
                                                            <span
                                                                class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </span>
                                                        </button>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="md:w-1/4">
                    <div class="bg-white rounded-lg shadow-md p-6" style="direction: rtl;">
                        <h2 class="text-lg font-semibold mb-4" style="text-align: right;">الفاتورة</h2>

                        <div class="bg-white p-4 rounded-lg"
                            style="margin: auto;width: 109%;text-align: center;direction: ltr;">
                            <div class="relative bg-inherit">
                                <input required="required"
                                    style="color: #333;font-size: 1.3rem;text-align: right;color: #333;font-size: 1.3rem;text-align: right;width: 100%;margin-left: 1rem;"
                                    type="text" id="username" name="governorate"
                                    class="peer bg-transparent h-10 w-72 rounded-lg text-gray-200 placeholder-transparent ring-2 px-2 ring-gray-500 focus:ring-sky-600 focus:outline-none focus:border-rose-600"
                                    placeholder="Type inside me" /><label for="username"
                                    class="absolute cursor-text right-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">المحافظة</label>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg"
                            style="margin: auto;width: 109%;text-align: center;direction: ltr;">
                            <div class="relative bg-inherit">
                                <input required="required"
                                    style="color: #333;font-size: 1.3rem;text-align: right;color: #333;font-size: 1.3rem;text-align: right;width: 100%;margin-left: 1rem;"
                                    type="text" id="username" name="phone"
                                    class="peer bg-transparent h-10 w-72 rounded-lg text-gray-200 placeholder-transparent ring-2 px-2 ring-gray-500 focus:ring-sky-600 focus:outline-none focus:border-rose-600"
                                    placeholder="Type inside me" /><label for="username"
                                    class="absolute cursor-text right-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">رقم
                                    الهاتف</label>
                            </div>
                        </div>

                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold">المجموع</span><input type="text" name="finaltotal"
                                readonly value="IQ{{ $total }}">

                        </div>
                        <div class="flex justify-between mb-2">
                            <span>الشحن</span><input name="shipping" type="text" value="8,000IQ"readonly>
                            
                        </div>
                        
                        <button type="submit" id="checkout" style="margin: auto;"
                        class="bg-green-500 text-white py-2 px-4 rounded-lg mt-4 w-full">طلب</button>
                        
                    </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $('.cart_update').change(function(e) {
            e.preventDefault();
            var ele = $(this);
            // إرسال طلب AJAX لتحديث السلة
            $.ajax({
                url: '{{ route('update_cart') }}',
                method: 'patch',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents('tr').attr('data-id'),
                    quantity: ele.parents('tr').find('.quantity').val(),
                },
                success: function(response) {
                    // إعادة تحميل الصفحة بعد نجاح الطلب
                    window.location.reload();
                }
            });
        });

        $('.remove').click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm('هل تريد حذف المنتج ؟')) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents('tr').attr('data-id')
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }

        });
    </script>
</body>

</html>
