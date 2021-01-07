@extends('layouts.app')

@section('content')
<div class="bg-light my-3">
    <div class="container">
        <div class="row border-bottom  border-secondary pb-2 pt-2 mt-2 mb-2">
            <div class="col-6">
                <div class="container"><h2>Rumah Makan Padang</h2></div>
            </div>
            <div class="col-1">
                <div class="container"><img src="/images/black star.png" alt="stars" style="width: 40px; height: 40px;"></div>
            </div>
            <div class="col-1">
                <div class="container"><img src="/images/black star.png" alt="stars" style="width: 40px; height: 40px;"></div>
            </div>
            <div class="col-1">
                <div class="container"><img src="/images/black star.png" alt="stars" style="width: 40px; height: 40px;"></div>
            </div>
            <div class="col-1">
                <div class="container"><img src="/images/black star.png" alt="stars" style="width: 40px; height: 40px;"></div>
            </div>
            <div class="col-1">
                <div class="container"><img src="/images/black star.png" alt="stars" style="width: 40px; height: 40px;"></div>
            </div>
            <div class="col-1">
                <div class="container"><h2>4.8</h2></div>
            </div>
        </div>
        <div class="row pb-2 pt-2 mt-2 mb-2">
            <div class="container"><img src="https://foto.wartaekonomi.co.id/files/arsip_foto_2020_03_23/rumah_makan_padang_sederhana_125414_big.jpg" class="img-thumbnail mx-auto d-block" alt="illustration-image-restaurant"></div>
        </div>
        <div class="row pb-2 pt-2">
            <div class="container">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quis atque qui quaerat maxime placeat nulla, earum cum voluptate repellat dolorum amet. Repudiandae ipsum expedita ullam quis, officia dicta alias!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quis atque qui quaerat maxime placeat nulla, earum cum voluptate repellat dolorum amet. Repudiandae ipsum expedita ullam quis, officia dicta alias!</div>
        </div>
        <div class="row text-center border border-secondary pb-2 pt-2 mt-2 mb-2 bg-secondary rounded text-white">
            <div class="col">
                <div class="container"><img src="/images/check.png" alt="" style="width: 40px; height: 40px;"></div><div class="font-weight-bolder">Wifi</div>
            </div>
            <div class="col">
                <div class="container"><img src="/images/remove.png" alt="" style="width: 40px; height: 40px;"></div><div class="font-weight-bolder">Drive-thru</div>
            </div>
            <div class="col">
                <div class="container"><img src="/images/check.png" alt="" style="width: 40px; height: 40px;"></div><div class="font-weight-bolder">Mosque</div>
            </div>
            <div class="col">
                <div class="container"><img src="/images/check.png" alt="" style="width: 40px; height: 40px;"></div><div class="font-weight-bolder">AC</div>
            </div>
            <div class="col">
                <div class="container"><img src="/images/check.png" alt="" style="width: 40px; height: 40px;"></div><div class="font-weight-bolder">Parking lot</div>
            </div>
        </div>
        <div class="row text-left pb-2 pt-2 mt-2 mb-2">
            <div class="col-8">
                <div class="container"><img src="/images/maps example.png" alt="" class="img-thumbnail"></div>
            </div>
            <div class="col-4">
                <div class="container">
                    <h5>Ranah Minang, RT.13/RW.1, Jembatan Besi, West Jakarta City, Jakarta</h5>
                    <div class="text-danger">Close, opens 7am to 6pm</div>
                    <div class="text-success">Delivery is available</div><br><br><br><br>
                    <a href="/delivery" class="btn btn-outline-success btn-block">Click here for Delivery!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection