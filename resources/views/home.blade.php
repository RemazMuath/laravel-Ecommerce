
@extends('layouts.app')
@section('title','home')
@section('content')

<style>
  body {
  background: hsl(220deg, 10%, 97%);
  margin: 0;
  padding: 0;
}



button {
  background: white;
  border: solid 2px black;
  padding: .375em 1.125em;
  font-size: 1rem;
}

.button-arounder {
  font-size: 2rem;
  background: hsl(190deg, 30%, 15%);
  color: hsl(190deg, 10%, 95%);

  box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
  transfrom: translateY(0);
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;

  --dur: .15s;
  --delay: .15s;
  --radius: 16px;

  transition:
    border-top-left-radius var(--dur) var(--delay) ease-out,
    border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
    border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
    border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
    box-shadow calc(var(--dur) * 4) ease-out,
    transform calc(var(--dur) * 4) ease-out,
    background calc(var(--dur) * 4) steps(4, jump-end);
}

.button-arounder:hover,
.button-arounder:focus {
  box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
  transform: translateY(-4px);
  background: hsl(240, 8%, 12%);

}


.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

<br><br><br>
<h1 class="text-center">Welcome To Our Phone Store !</h1>
<p class="text-center"> where technology meets innovation! <br>We offer a wide range of mobile devices that cater to every need and budget.<br> Our store features the latest smartphones from all major brands alongside a range of accessories to enhance your experience. </p>
<br><br><br><br><br><br>
<div class="buttons-container center">
    <button  class="button-arounder"> <a class="text-white" href="{{route ('phone')}}">Products !</a> </button>
  </div>
@endsection

