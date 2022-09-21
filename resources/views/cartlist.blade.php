@extends('master')
@section("content")
<style>
    h4{
        color:aqua
    }
h2{
    font-size: 20px;
    color:rgb(221, 236, 10)

}

h5{
    color:rgb(245, 191, 12);
    font-size: 20px;

}
</style>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-6">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >    Remove to Cart</a>
             </div>
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection
