
<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>

                    <a href="">view all products <i class="fa fa-angle-right"></i></a>

                    <form action="{{ route('search') }}" method="get" class="form-inline p-3" style="float: right">
                        @csrf
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search" >Search</button>
                    </form>
                </div>
            </div>

            @foreach($data as $product)
                <div class="col-md-3 bg-white-50">
                    <div class="product-item card">
                        <a href="#">  <img class="card-img-top" height="300" src="/productimage/{{$product->image}}" alt=""> </a>

                        <div class="down-content card-body">
                            <a href="#"  class="card-title text-uppercase "><h3>{{$product->title}}</h3></a>
                            <p class="fw-bold fs-5 pt-3 ">$. {{$product->price}}</p>
                            <p class="card-text pe-3">{{$product->des}}</p>

                            <form action="{{ route('addcart',$product->id) }}" method="post">
                                @csrf

                                <input type="number" value="1" min="1" name="quantity" class="form-control col-4 " >
                                <br>
                                <button href="" class="btn btn-primary my-2 my-sm-0 bg-primary" type="submit" value="addcart" >Add Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(method_exists($data,'links'))
                <div class="d-flex justify-content-center">
                    {!! $data->links() !!}
                </div>
            @endif
        </div>
     </div>
</div>
