<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
  </style>
    <title>Document</title>
</head>
<body style="background-color:antiquewhite">
    <div class="container" style="background-color: white;">
        <div class="row">
            <div class="col p-3" style="background-color: pink;"> <!-- pink section / left -->
                <div class="container">
                    <div class="row">
                        <div class="container text-center ">
                            <h3>Please fill this delivery form for restaurant abc</h3>
                        </div>
                    </div>
                    <div class="row mt-3">
                      <div class="container">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->
                          <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                          </ul>
                        
                          <!-- The slideshow -->
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="/images/indomie.jpg" alt="indomie 4">
                            </div>
                            <div class="carousel-item">
                              <img src="/images/indomie.jpg" alt="indomie 2">
                            </div>
                            <div class="carousel-item">
                              <img src="/images/indomie.jpg" alt="indomie 3">
                            </div>
                          </div>
                        
                          <!-- Left and right controls -->
                          <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>
                    </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                        <h5>*you can put additional address info in the note</h5><br>
                        <h5>*this restaurant only accept e-money for delivery</h5>
                    </div>
                </div>
             </div>
            <div class="col pt-3"> <!-- form section / right -->
              <div class="container">
                <div class="row rounded border border-dark bg-light mt-3 pt-1 pb-1">
                  <div class="container">
                    <div class="form-group">
                      <label for="deliveryAddress">Delivery address:</label>
                      <input type="text" class="form-control border border-dark">
                      <label for="note">Note:</label>
                      <input type="text" class="form-control border border-dark">
                    </div>
                  </div>
                </div>
                <div class="row rounded border border-dark bg-light mt-4 pt-1 pb-1">
                  <div class="container">
                    <div class="form-group">
                      <label for="menu">Menu:</label>
                      <input type="text" class="form-control border border-dark" value="indomie">
                      <label for="Quantity">Quantity:</label>
                      <input type="text" class="form-control border border-dark">
                      <label for="paymentMethod">Payment method:</label><br>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio">Gopay
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio">DANA
                        </label>
                      </div>
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio">OVO
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row text-center mt-4">
                  <div class="container">
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </div>
</body>
</html>