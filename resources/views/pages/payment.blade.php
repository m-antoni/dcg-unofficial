@extends('layouts.app')

@section('content')
<div id="payment">
  <div class="container mt-3">
    <div class="row">
          <div class="col-md-4">
              <h1 class="wow fadeInDown">Online Payment</h1><hr class="bg-light">
              <form class="wow fadeInLeft"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Choose Division:</label>
                    <select class="form-control" required>
                      <option selected>Choose Here...</option>
                      <option value="1">Megacorp SME Solutions</option>
                      <option value="2">iManila Prints</option>
                      <option value="3">House Hold Management</option>
                      <option value="4">WeTrade</option>
                      <option value="5">Megacorp Promotions</option>
                      <option value="6">Human Resource Systems</option>
                      <option value="7">PhilTrip Advertising</option>
                      <option value="8">HelpMed</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid division
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emailForm">Please Enter SA#:</label>
                    <input type="text" class="form-control" id="emailForm" placeholder="Enter SA..." required>
                    <div class="invalid-feedback">
                       Please provide valid SA#
                    </div>
                  </div>
                  <div class="form-group mb-4">
                      <label for="emailForm">Client Name:</label>
                      <input type="text" class="form-control" id="emailForm" placeholder="Your Name here..." required>   
                      <div class="invalid-feedback">
                        Please provide a valid Name...
                    </div>    
                  </div>

                  <button type="submit" class="bttn bttn-simple bttn-md bttn-block"><i class="fa fa-credit-card"></i> Pay Now
                  </button>
              </form>
          </div>
      </div>
    </div>
</div>
	
	
@endsection