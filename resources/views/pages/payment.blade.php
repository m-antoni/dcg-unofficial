@extends('layouts.app')

@section('content')
 <a href="{{ route('homepage') }}">
      <button class="bttn bttn-fill bttn-danger bttn-sm wow fadeInDown mt-3">
        <i class="fa fa-arrow-left"></i> Go Back
      </button>
  </a>
	<div class="container mt-3 payment">
			<div class="row justify-content-center">
					<div class="col-md-4">
              <h1 align="center"> Online Payment</h1>
							<form class="needs-validation"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Choose Division:</label>
                    <select class="form-control" required>
                      <option selected>Choose Here...</option>
                      <option value="1">Megacorp SME Solutions</option>
                      <option value="2">iManila Prints</option>
                      <option value="3">House Hold Management</option>
                      <option value="3">WeTrade</option>
                      <option value="3">Megacorp Promotions</option>
                      <option value="3">Human Resource Systems</option>
                      <option value="3">PhilTrip Advertising</option>
                      <option value="3">HelpMed</option>
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
                  <div class="form-group">
                      <label for="emailForm">Client Name:</label>
                      <input type="text" class="form-control" id="emailForm" placeholder="Your Name here..." required>   
                      <div class="invalid-feedback">
                        Please provide a valid Name...
                    </div>    
                  </div>

                  <button type="submit" class="bttn-fill bttn-primary bttn-block "><i class="fa fa-credit-card"></i> Pay Now</button>
            	</form>
					</div>
			</div>
	</div>
	
@endsection