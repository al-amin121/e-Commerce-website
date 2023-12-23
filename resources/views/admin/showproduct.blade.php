<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css-heder')
</head>
<body>
<div class="container-scroller">
@include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
    @include('admin.navbar')

<div class="container-fluid page-body-wrapper">
    <div class="container" align="center">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}

            </div>
        @endif
        <table >
            <tr class="bg-secondary">
                <td class="pe-5">Id</td>
                <td class="pe-5">Title</td>
                <td class="pe-5" style="width: 20%" >Description</td>
                <td class="pe-5">Quntity</td>
                <td class="pe-5">Price</td>
                <td class="pe-5">Image</td>
                <td class="pe-5">Update</td>
                <td class="pe-5">Delete</td>
            </tr>
            @foreach($data as $product)
            <tr class="bg-dark">
                <td class="p-3">{{$product->id}}</td>
                <td class="pe-5 pb-3">{{$product->title}}</td>
                <td class="pe-5 pb-3 ">{{$product->des}}</td>
                <td class="pe-5 pb-3 ">{{$product->quantity}}</td>
                <td class="pe-5 pb-3">{{$product->price}}</td>
                <td class="pe-5 pb-3">
                    <img height="100px" width="100px" src="/productimage/{{$product->image}}" >
                </td>
                <td class="pe-5 pb-3">
                    <a href="{{ route('updateview',$product->id)}}"class="btn btn-primary">Edit</a>
                </td>
                <td class="pe-5 pb-3">
                    <a href="{{route('deleteproduct',$product->id)}}"class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>








    </div>
</div>
@include('admin.js')
</body>
</html>
