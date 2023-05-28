@extends('layouts.app')
@section('title','phone')
@section('content')

<style>
  
.button5 {background-color: #345B63;}

</style>

    <div class="container" style=" max-width: 960px;">
        <div class="py-5 text-center">
          <h2>Checkout </h2>
        </div>

        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your cart</span>
              <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-5">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">{{$phone->name}}</h6>

                </div>
                <span class="text-muted">{{$phone->price}}</span>
              </li>

                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">tax</h6>

                    </div>
                    <span class="text-muted">{{$phone->tax}}</span>
                  </li>

              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">shipping fees</h6>
                  <small>FREE WORLDWIDE !</small>
                </div>
                <span class="text-success">0</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (SAR)</span>
                <strong>{{$phone->total}}</strong>
              </li>
            </ul>
          </div>

            <!--form start -->
          <div class="col-md-8 order-md-1">

              <form action="{{route('invoic')}}" method="POST"><!--post-> in request i think / get-> in query-->
                  @csrf
                  <input type="hidden" id="Productname" name="productname" value={{$phone->name}}>
                  <input type="hidden" id="total" name="total" value={{$phone->total}}>
              <h4 class="mb-3"></h4>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">Full Name</label>
                  <input type="text" class="form-control" d="fullname" name="fullname" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="phone">Phone Number</label>
                   <input class="form-control" type="phone" id="phone" name="phone" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="email">Email </label>
                <input class="form-control" type="email" id="email" name="email" required placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" type="address" id="address" name="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="mb-3">
                <label for="address">BirthDate</label>
                <p></p>
                <input type="date" id="d" name="d" class="form-contol" required>
                <div class="invalid-feedback">
                  Please enter your birthday.
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="country">City</label>
                  <select class="custom-select d-block w-100"  id="country" name="country" class="form-control" required>
                    <option value="">Choose...</option>
                    <option>Hail</option>
                    <option>Qassim</option>
                    <option>Riyadh</option>
                    <option>Damam</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
                </form>
              <hr class="mb-4">
              <button class="butteon button5 btn  btn-lg btn-block text-grey" type="submit">Continue to checkout</button>

          </div>
        </div>
      </div>

@endsection


