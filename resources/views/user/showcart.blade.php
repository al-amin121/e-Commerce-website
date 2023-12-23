

<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')

</head>

<body>


<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
@include('user.header')


    <div class="col-md-6 mx-auto" style="padding: 80px; margin-top: 10px">

            <table class="mt-5">
                <tr class="bg-gray-100">
                    <td class="p-3 fs-4 fw-bold"><u>Product Name </u></td>
                    <td class="p-3 fs-4 fw-bold"><u>Quantity</u></td>
                    <td class="p-3 fs-4 fw-bold"><u>Price</u></td>
                    <td class="p-3 fs-4 fw-bold"><u>Action</u></td>

                </tr>
                <form action="{{ route('order') }}" method="post">
                    @csrf

                    @foreach($cart as $carts)
                        <tr class="bg-secondary">
                            <td class="p-3 text-white">
                                <input type="text" name="productname[]" value=""
                                {{$carts->product_title}} hidden="">
                                {{$carts->product_title}}
                            </td>
                            <td class="p-3 text-white">
                                <input type="text" name="quantity[]" value=""
                                    {{$carts->quantity}} hidden="">
                                {{$carts->quantity}}
                            </td>
                            <td class="p-3 text-white">
                                <input type="text" name="price[]" value=""
                                    {{$carts->price}} hidden="" >
                                {{$carts->price}}
                            </td>
                            <td class="p-3 text-white"><a class="btn btn-danger" href="{{route('delete',$carts->id) }}">Delete</a></td>
                        </tr>

                    @endforeach
            </table>
              <button  class="btn btn-success">Confirm Order</button>
                
                </form>
    </div>






<footer>
    @include('user.footer')
</footer>

@include('user.js')


</body>

</html>
