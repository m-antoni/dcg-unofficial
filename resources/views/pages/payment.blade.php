@extends('layouts.app')

@section('content')
<div id="payment">
  <div class="container mt-3">
    <div class="row">
           
          <div class="col-md-4">
              <h1 class="wow fadeInDown">Payment Form</h1><hr class="bg-light">
              <form action="{{ route('create-payment') }}" method="POST" class="wow fadeInLeft"> 
                 {{ csrf_field() }}
                  
                  <div class="form-group">
                      @if (session('success'))
                          <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong> {{ session('success') ?? session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                      @endif
                  
                      @if (session('error'))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong> {{ session('error') ?? session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                      @endif
                  </div>
  
        
                 <div class="form-group">
                    <label for="exampleInputEmail1">Choose Division:</label>
                    <select name="company" class="form-control wow fadeInLeft">
                        <option value="" selected disabled>Choose Here...</option>
                        <option>Megacorp SME Solutions</option>
                        <option>iManila Prints</option>
                        <option>House Hold Management</option>
                        <option>WeTrade</option>
                        <option>Megacorp Promotions</option>
                        <option>Human Resource Systems</option>
                        <option>PhilTrip Advertising</option>
                        <option>HelpMed</option>
                    </select>
                  </div>

                  <div class="form-group mb-4 wow fadeInLeft">
                      <label for="emailForm">Enter Amount:</label>
                      <input type="text" name="amount" class="form-control">
                  </div>
         
                  <button type="submit" class="bttn bttn-simple bttn-md bttn-block">
                    <i class="fa fa-credit-card"></i> Pay with Paypal
                  </button>
              </form>

          </div>
      </div>
    </div>
</div>

@endsection
