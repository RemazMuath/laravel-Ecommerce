
@extends('layouts.app')
@section('title','phone')
@section('content')


<div class="container">
    <div class="row">

        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <div class="container">
                @foreach ($phone as $item)
                <div class="card border-secondary mb-3" style="width:15cm" style="height: 15cm">
                 <div class= "card-header" style="background-color: #345B63">
                 <h1 class="text-center text-white">{{$item->name}} </h1>
                 </div>
                    <div class="card-body">
                     <div class="row">
                      <div class="col-sm-3">
                        <img src='images/{{$item->img}}' class="card-img-top" >
                      </div>

                      <div class="col-sm-6">
                         <h1 class="text-dark">{{$item->name}} </h1>
                         <small class="text-secondary">{{$item->display}}
                         </small>
                           </div>

                      <div class="col-sm-3">
                       <h4 class="text-danger "> {{$item->price}} </h4>
                        <a class="btn btn-outline-dark" href="checkout/{{$item->id}}"> buy now</a>
                    </div>
                      </div>


                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-3">
       </div>
</div>
</div>

    @endsection

