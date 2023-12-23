<!DOCTYPE html>
<html lang="en">
<head>
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
@include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
       <div class="container" align="center">
           <h1 class="add-items">Add Product </h1>
           @if(session()->has('message'))
              <div class="alert alert-success">
                  {{session()->get('message')}}

              </div>
           @endif

           <form action="{{ route('uploadproduct') }}" method="post" enctype="multipart/form-data">
               @csrf

               <div class="p-3">
                   <label>Product Title:</label>
                   <input class="text-black" type="text" name="title" placeholder="product title"
                   required>
               </div>
               <div class="p-3">
                   <label>Price:</label>
                   <input  class="text-black" type="number" name="price" placeholder="price"
                          required>
               </div>
               <div class="p-3">
                   <label>Description:</label>
                   <input class="text-black" type="text" name="des" placeholder="description"
                          required>
               </div>
               <div class="p-3">
                   <label>Quantity:</label>
                   <input class="text-black" type="text" name="quantity" placeholder="quantity"
                          required>
               </div>
               <div class="p-3">

                   <input type="file" name="file" >
               </div>
               <div class="p-3" >

                   <input class= "btn btn-success" type="submit" >
               </div>
           </form>
       </div>
    </div>

</div>

@include('admin.js')
</body>
</html>
