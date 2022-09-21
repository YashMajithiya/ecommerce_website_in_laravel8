@extends('master')
@section("content")
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif,bold;
    background-color: #034266;

}

h3 {
    color: #40E0D0;
}
h4{
    color: #FF00FF;

}
</style>

<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/"><button class="btn btn-warning "> Back </button></a>
       <h2>{{$product['name']}}</h2>
       <h2>Price : {{$product['price']}}</h2>
       <h4>Details: {{$product['description']}}</h4>
       <h4>category: {{$product['category']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-danger">Add to Cart</button>
       </form>
       <br><br>
       <a href="/ordernow"><button class="btn btn-success">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection
