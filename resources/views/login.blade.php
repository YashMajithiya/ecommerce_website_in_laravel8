@extends('master')
@section("content")
<style>
    h4{
        color:rgb(77, 224, 19)
    }
    h1{
        color:rgb(199, 233, 10)

    }
    </style>
<div class="container custom-login">
    <h1>Login-form<h1>
        <div class="form">

    <div class="row">
            <form action="login" method="POST" >
                    @csrf

                <label for="exampleInputEmail1"><h4><b>Email address</b><h4></label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                <label for="exampleInputPassword1"><h4><b>Password</b></h4></label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <br>
                <button type="submit" class="btn btn-info">Login</button>
                </a></li>
                <div class="form-group">
                    <h4>New user get registered ?</h4>
                    <a href="/register" class="btn btn-info">Register</a>
                </div>

            </form>

        </div>
    </div>
</div>
</div>
@endsection
