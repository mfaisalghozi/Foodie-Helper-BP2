@extends('layouts.app')

@section('content')
<div class="bg-white py-4 mt-3" style="max-height:100vh">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="/images/10 SCENE.svg" alt="illustration-image-restaurant" height="800" width="800">
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <div class="text-center">
                <h1 class="display-3 title">Find Your Restaurant Destination</h1>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:5rem;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Popular</a>
                <a class="nav-item nav-link" href="#">New</a>
                <a class="nav-item nav-link" href="#">Best Seller</a>
                <a class="nav-item nav-link" href="#">Near Me</a>
            </div>
        </div>
    </div>
</nav>
<div class="row d-flex justify-content-center my-5">
    <div class="input-group" style="width: 60%">
        <input type="text" class="form-control mr-2 text-center border border-dark" placeholder="Restaurant Name" aria-label="Recipient's username" aria-describedby="basic-addon2" style="border-radius: 19px;">
        <button class="ml-2 btn btn-danger">
            <i class="fa fa-search" aria-hidden="true"></i>
             Search
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="row p-2 mt-4">
            @for($rep=1;$rep<=10;$rep++)
            <div class="col-lg-4 p-2">
                <a href="/restaurant/detail" style="text-decoration: none;">
                    <div class="card p-3 mb-5 bg-white rounded kotak">
                        <img class="card-img-top" src="/images/1_SCENE.svg" alt="">
                        <div class="card-body text-dark">
                            <h4 class="card-title">Restaurant {{$rep}}</h4>
                            <p class="card-text">Text ke {{$rep}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endfor
        </div>
    </div>
    <div class="col-lg-2"></div>

</div>

@endsection