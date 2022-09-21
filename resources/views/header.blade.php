<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<style>
    .navbar
{
    background-color: #000000;

}
.navbar-brand
{
    font-size: 20;
     color: #DE3163;

}

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif,bold;
            background-color: #034266;

        }

        h1 {
            color: #0000FF;
        }

        h1,
        h3 {
            text-align: center;
            color: #0ae6e6;

        }

        h2{
            font-size: 20px;
            color: rgb(255, 0, 221);
        }


        ul {
            color:#DE3163
        }


</style>



<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div>
          <h1>DEVILER SHOPPING WEBSITE</h1>
        <a class="navbar-brand" href="/"><h3>Welcome to The World's Most Trusted Shopping Site,One Site Which Complete All Your Needs</h3></a>
      <br>
      <br>
      <br>
      <br>
      <br>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/"><b><h2>Home</h2></b></a></li>
         <li><a href="/myorders"><b><h2>Orders</h2></b></a></li>
          <li><a href="/about"><h2>About</h2></a></li>
          <li><a href="/new"><h2>Fresh Arrived</h2></a></li>
          <li><a href="/dis"><h2>Discount Price</h2></a></li>

        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/cartlist"><h2>cart ({{$total}})</h2></a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><h2>{{Session::get('user')['name']}}</h2>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>

            </ul>
          </li>
          @else
          <li><a href="/login"><h2>Login</h2></a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

