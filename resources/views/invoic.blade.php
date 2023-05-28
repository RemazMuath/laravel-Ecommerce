
@extends('layouts.app')
@section('title','invoic')
@section('content')


<style>
    body{
        color:black
    }
</style>

<div class="container">
    <div class="card">
        <div class="card-body mx-4">
          <div class="container">
            <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black">{{$inv->name}}</li>
                <li class="text-muted mt-1"><span class="text-black">Invoice</span> #{{$inv->id}}</li>
                <li class="text-black mt-1">{{$inv->birthdate}}</li>
              </ul>
              <hr>
              <div class="col-xl-10">
                <p>item </p>
              </div>
              <div class="col-xl-2">
                <p class="float-end" >{{$inv->productname}}
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>tax</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">15%
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>shipping</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">Free shipping
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">

              <div class="col-xl-12">
                <p class="float-end fw-bold">Total:{{$inv->total}}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">

            </div>

          </div>
        </div>
      </div>

</div>

@endsection
