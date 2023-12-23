<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css-heder')

    <style>
        .add-items{
            color: white;
            padding-top: 25px;
            font-size: 25px;

        }
        label{
            display: inline-block;
            width: 200px;
            text-align: left;
        }
    </style>

</head>
<body>
<div class="container-scroller">
@include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
    @include('admin.navbar')
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="add-items">Add Product </h1>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}

                    </div>

                @endif

                <form action="{{ route('updateproduct',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="p-3">
                        <label>Product Title:</label>
                        <input class="text-black" type="text" name="title" value="{{ $data->title}}"
                               required>
                    </div>
                    <div class="p-3">
                        <label>Price:</label>
                        <input  class="text-black" type="number" name="price" value="{{$data->price}}"
                                required>
                    </div>
                    <div class="p-3">
                        <label>Description:</label>
                        <input class="text-black" type="text" name="des" value="{{$data->des}}"
                               required>
                    </div>
                    <div class="p-3">
                        <label>Quantity:</label>
                        <input class="text-black" type="text" name="quantity" value="{{$data->quantity}}"
                               required>
                    </div>
                    <div class="p-3">
                        <label>Old Image</label>
                        <img src="/productimage/{{$data->image}}" height="100" width="80" alt="">
                    </div>
                    <div class="p-3">
                        <label >Change the image:</label>
                        <input type="file" name="file" >
                    </div>
                    <div class="p-3" >

                        <input class= "btn btn-success" type="submit" >
                    </div>
                </form>
            </div>
        </div>
    <!-- main-panel ends -->
    </div>
</div>
@include('admin.js')
</body>
</html>
