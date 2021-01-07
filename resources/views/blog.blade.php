@extends('layouts.app')

@section('content')
<div class="bg-white" style="height:100vh">
    <div class="row d-flex align-items-center justify-content-center h-100 bg-custom">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="text-center">
                <h1 class="display-3 title-custom">FoodieHelper Article & Review</h1>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light border" style="height:5rem;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav text-dark">
                <a class="nav-item nav-link active" href="#">Popular Article</a>
                <a class="nav-item nav-link" href="#">Newest Article</a>
                <a class="nav-item nav-link" href="#">Latest Article</a>
            </div>
        </div>
    </div>
</nav>
<div class="row d-flex justify-content-center my-5">
    <div class="input-group" style="width: 40%">
        <input type="text" class="form-control mr-2 text-center border border-dark" placeholder="Article title" aria-label="Recipient's username" aria-describedby="basic-addon2" style="border-radius: 19px;">
        <button class="ml-2 btn btn-danger">
            <i class="fa fa-search" aria-hidden="true"></i>
             Search
        </button>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="">
              <div class="row">
                <div class="col-lg-2">
                    <img src="https://i.pinimg.com/originals/74/f4/56/74f456b7f3a445a18f9d4c85414467e6.jpg" class="img-fluid rounded" alt="crab">
                </div>
                <div class="col-lg-10">
                    <h2 class="post-title">
                        Looking for the best crab ? here top 10 Crab Restaurant.
                      </h2>
                </div>
              </div>
            <h3 class="post-subtitle">
              Number 9 will make you mind blown
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="">
            <div class="row">
                <div class="col-lg-2">
                    <img src="https://i.pinimg.com/originals/74/f4/56/74f456b7f3a445a18f9d4c85414467e6.jpg" class="img-fluid rounded" alt="crab">
                </div>
                <div class="col-lg-10">
                    <h2 class="post-title">
                        Looking for the best crab ? here top 10 Crab Restaurant.
                      </h2>
                </div>
            </div>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 18, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="">
            <div class="row">
                <div class="col-lg-2">
                    <img src="https://i.pinimg.com/originals/74/f4/56/74f456b7f3a445a18f9d4c85414467e6.jpg" class="img-fluid rounded" alt="crab">
                </div>
                <div class="col-lg-10">
                    <h2 class="post-title">
                        Looking for the best crab ? here top 10 Crab Restaurant.
                      </h2>
                </div>
            </div>
            <h3 class="post-subtitle">
              We predict too much for the next year and yet far too little for the next ten.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on August 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="">
            <div class="row">
                <div class="col-lg-2">
                    <img src="https://i.pinimg.com/originals/74/f4/56/74f456b7f3a445a18f9d4c85414467e6.jpg" class="img-fluid rounded" alt="crab">
                </div>
                <div class="col-lg-10">
                    <h2 class="post-title">
                        Looking for the best crab ? here top 10 Crab Restaurant.
                      </h2>
                </div>
            </div>
            <h3 class="post-subtitle">
              Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on July 8, 2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

@endsection