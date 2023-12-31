@extends('layouts.user_type.auth')

@section('content')
<div class="container">
  <h6>Index</h6>
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Nifty 50</p>
                <h5 class="font-weight-bolder mb-0">
                  ₹53,000
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fa fa-university text-lg opacity-10" aria-hidden="true"></i>
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
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Bank Nifty</p>
                <h5 class="font-weight-bolder mb-0">
                  ₹25,000
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fa fa-university text-lg opacity-10" aria-hidden="true"></i>
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
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sensex</p>
                <h5 class="font-weight-bolder mb-0">
                  ₹25,000
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <h6>Your Investments</h6>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-4">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Invested</p>
                <h6 class="font-weight-bolder mb-0">
                  ₹8000
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h6>
              </div>
            </div>
            <div class="col-4">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold" style="text-align: center">Current value</p>
                <h6 class="font-weight-bolder mb-0" style="text-align: center">
                  ₹13,000
                  <span class="text-success text-sm font-weight-bolder" style="text-align: center">+55%</span>
                </h6>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fa fa-money" aria-hidden="true"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <h6>Most Bought on Groww</h6>
  <div class="row">
    <div class="col-md-3 mt-2">
      <div class="card">
        <div class="card-header mx-4 p-3 text-center">
          <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
            <img height="50" width="50" src="{{asset('assets/img/irfc4.jpg')}}" alt="" class="mt-2">
          </div>
        </div>
        <div class="card-body pt-0 p-3 text-center">
          <h6 class="text-center mb-0">IRFC</h6>
          <span class="text-xl" style="color:green;">2.90 (3.90%)</span>
          <hr class="horizontal dark my-3">
          <h5 class="mb-0">₹99.04</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 mt-2">
      <div class="card">
        <div class="card-header mx-4 p-3 text-center">
          <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
            <img height="50" width="50" src="{{asset('assets/img/reliance.jpeg')}}" alt="" class="mt-2">
          </div>
        </div>
        <div class="card-body pt-0 p-3 text-center">
          <h6 class="text-center mb-0">Reliance Power</h6>
          <span class="text-xl" style="color:green;">0.95 (4.25%)</span>
          <hr class="horizontal dark my-3">
          <h5 class="mb-0">₹23.30</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 mt-2">
      <div class="card">
        <div class="card-header mx-4 p-3 text-center">
          <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
            <img height="50" width="50" src="{{asset('assets/img/Vodafone_Idea_logo.png')}}" alt="" class="mt-2">
          </div>
        </div>
        <div class="card-body pt-0 p-3 text-center">
          <h6 class="text-center mb-0">Vodafone Idea</h6>
          <span class="text-xl" style="color:green;">2.75 (20.75%)</span>
          <hr class="horizontal dark my-3">
          <h5 class="mb-0">₹16.30</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header mx-4 p-3 text-center">
          <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
            <img height="50" width="50" src="{{asset('assets/img/tatamotors.png')}}" alt="" class="mt-2">
          </div>
        </div>
        <div class="card-body pt-0 p-3 text-center">
          <h6 class="text-center mb-0">Tata Motors</h6>
          <span class="text-xl" style="color:green;">26.05 (3.75%)</span>
          <hr class="horizontal dark my-3">
          <h5 class="mb-0">₹779.95</h5>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection