@extends('layouts.user_type.auth')

@section('content')

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Handphone</p>
                <h5 class="font-weight-bolder mb-0">
                  700
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-tablet-button text-lg opacity-10" aria-hidden="true"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Laptop</p>
                <h5 class="font-weight-bolder mb-0">
                  500
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-laptop text-lg opacity-10" aria-hidden="true"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Printer</p>
                <h5 class="font-weight-bolder mb-0">
                  120
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-ui-04 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mt-3">
      <div class="card card-profile mt-md-0 mt-5">
        <a href="javascript:;">
          <div class="p-3">
            <img class="w-100 border-radius-md" src="./assets/img/7.jpg">
          </div>
        </a>
        <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
          <h4 class="mb-0"></h4>
          <p></p>
          <div class="row justify-content-center text-center">
            <div class="col-12 mx-auto">
              <h5 class="text-info mb-0"></h5>
              <small></small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-6">
      <div class="card card-profile card-plain">
        <div class="card-body text-center bg-white shadow border-radius-lg p-3">
          <a href="javascript:;">
            <img class="w-100 border-radius-md" src="./assets/img/2.jpg">
          </a>
          <h5 class="mt-3 mb-1 d-md-block d-none"></h5>
          <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker"></p>
          <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase"></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-3">
      <div class="card card-profile mt-md-0 mt-5">
        <a href="javascript:;">
          <div class="p-3">
            <img class="w-100 border-radius-md" src="./assets/img/3.jpg">
          </div>
        </a>
        <div class="card-body blur justify-content-center text-center mx-4 mb-4 border-radius-md">
          <h4 class="mb-0"></h4>
          <p></p>
          <div class="row justify-content-center text-center">
            <div class="col-12 mx-auto">
              <h5 class="text-info mb-0"></h5>
              <small></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col-md-4 mt-4">
      <div class="card card-blog card-plain">
        <div class="position-relative">
          <a class="d-block blur-shadow-image">
            <img class="w-100 border-radius-md" src="./assets/img/6.jpg">
          </a>
        </div>
        <div class="card-body px-1 pt-3">
          <!-- <p class="text-gradient text-primary mb-2 text-sm">Entire Apartment • 2 Guests • 1 Bed</p>
          <a href="javascript:;">
            <h5>
              Cozy Double Room Near Station
            </h5>
          </a>
          <p>
            Different people have different taste, and various types of music have many ways of leaving an impact on someone.
          </p>
          <button type="button" class="btn btn-outline-primary btn-sm">From / Night</button> -->
        </div>
      </div>
    </div>
  
    <div class="col-md-8 mt-4">
      <div class="card">
        <div class="position-relative" style="height: 50px;overflow: hidden;margin-top: -50px;z-index:2;position: relative;">
          <div class="position-absolute w-100 top-0" style="z-index: 1;">
              <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                  <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                </defs>
                <g class="moving-waves">
                  <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                  <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                  <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                  <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                  <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                  <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                </g>
              </svg>
            </div>
        </div>
      </div>
    </div>
  
  </div>
 

@endsection


