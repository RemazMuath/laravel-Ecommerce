<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title> <!--here to make title for each page-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        header{
           font-family: Monospace;
           text-align: center;
            color:aliceblue;
         }
        .fontcolor{
            color:white;
            font-family: Monospace;
        }

    </style>
</head>
<body>
 <header>
    <!-- this code for header is from bootstrap page-navbar-->
    <nav class="navbar dark bg-dark"><!--this for color bar-->
         <div class="container">
    <!--1-->  <div class='d-flex'>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADgUlEQVR4nO2dW04UQRiFKyT4wm0bCqJPIquAkLAmfOGmLoHZgzEuQxTCm+5AhkQSCJ+pTJE0lVZnurtq/u4633t1/afO9O10TZVzQgghhBBCCCGEKBxgEdgHRsAFcEN/GQcNo6Bp0fUJYBe4YrhceY3OOsAC8I4yeAAOvGZnlYLMqHLgDF+m/K+mym/gBNgCllxPAZaChtOgqYrXvOMM3sDje8YP4KUbGMAm8DPSemXqRh+ePOIzY3BmRKbcRpr3nRXC42CVEzdwgPeR5jNnBeAyKu6NGzjA20jzpbNCeHGqsuwGDrAcaR47K0SF4QoBq7rNFlaqbrOFlarbbGFD1K3U1pAhSm2NGKLU1p4hSm2tGKLU1pAhSm2ZKbXNYYhSW6ZPbXMYotSW6VPbHIYotWX61DaHIUptmT61zWFInudqYzTVLUMSIUOMIUOMMXhDgI0wH+s88Zzem9DHMbCeW7d5Q4BnwEfgnvzch4lsi7l0N22XvLCKGV+YP59nNSU+QI7xSt5BODOscJpDd9N2OQrbqLlMffNzXoGVrvt7xB87pNPfo0PdAS9cwYac1Jixmqq/GGAt/KGmypEr2BBvQJXd3IKAvehwX0s25DpqupKyvzr8GRkd7rpkQ0wIouf1z70wZIitgUWG2BpYZIitgUWG2BpYZIitgUWG2BpYZIitgaXhC2WXdczjhdKyIedR0905GJI9crFsyHHU1Ke2a7nqD6FkPBftMFV/fTBkvSa2vwi/2v+mxU3rCJepvRozfGz/vOv+emOIJ3x2tcLRjLU/YZa2STtoUxiTdVL8Z9d58ynXp9/kHbQtjIkpp+GSkZu7cC/LNjkieQddFcbknnLkn3Rq5hl3yTj0cTjLPSOV7s47SF6YUWSIMWSIMWSIMSwbcl3g8kyrkeZflgyJ33i33MABtpMvYNbCkFGbqZx9BPiQfIm/FobU/Z160w0U4HWWRTBbGPK3ZWIHZwrwKtsysU0N+cdCyrdh9c7tPt/omayvuB0uU7fZFlJuY0hor0VrjBmyEBaoj8+UIfKQfDH+uMcWx9kpYLuKnW5Hv34gn9Dxhi4p09vUjMPn5bOsG7rEVbhCwKpus4WVqttsYaXqNltYqbqV2iZKbZui1NbethNKbbG1MYtSW2xtXaTUFkObe3mU2hpEqa0xlNoaRamtQZTaCiGEEEIIIYQQwg2aP0tcws4pNxjaAAAAAElFTkSuQmCC" >
              </div>

    <!--2-->  <div class='d-flex'>
        <a class="navbar-brand text-white " href="{{route ('home')}}">phone store </a>
             </div>

    <!--3--> <div class="d-flex justify-content-lg-center">
        <div class="row">
            <div class="col ">

             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
              </svg>
              phonestore@gmail.com
               <br>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg>
            0551302929
         <i class="fas fa-phone me-3 text-white"></i> &nbsp;

     <ul class="navbar-nav ms-auto " >
        <!-- Authentication Links -->
         <div class="d-flex flex-row justify-content-center">
        @guest
            @if (Route::has('login'))
                <li class="nav-item ">
                   <a class="nav-link text-white " href="{{ route('login') }}">{{ __('Login /') }}&nbsp;</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    </div>


             </div>

             </div>

         </div>
       </div>
    </div>
</nav>
</header>



    <main class ="py-4">
        @yield('content')
    </main>


<!-- Footer -->

<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->

      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
         <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Phone Store
            </h6>
            <p>
                Our phone store is the go-to destination for all your mobile needs. We offer a wide range of smartphones and accessories from top brands at competitive prices.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="{{route ('phone')}}" class="text-reset">iphone</a>
            </p>
            <p>
              <a href="{{route ('phone')}}" class="text-reset">galaxy</a>
            </p>
            <p>
              <a href="{{route ('phone')}}" class="text-reset">onePlus</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Home</a>
            </p>
            <p>
              <a href="#!" class="text-reset">MyOrders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i>saudi arabia , Alqassim </p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              phonestore@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i>0551401999</p>
            <p><i class="fas fa-print me-3"></i>0542806658</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      THANKYOU FOR VISITING OUR
      <a class="text-reset fw-bold" href="{{route ('phone')}}">PHONESTORE !</a>
    </div>

  </footer>
  <!-- Footer -->



</body>
</html>
