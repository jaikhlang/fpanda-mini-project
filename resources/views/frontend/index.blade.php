@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')
  	<section class="search-area grey lighten-2">
  		<div class="container">
  			<div class="row">
  				<div class="col s12 center">
  					<h4>Order delicious food online!</h4>
  					<p>Order food online from the best restaurants near you.</p>

  					<div class="row card-panel white lighten-1">
  						<div class="col s12 m4">
  							<select class="input-field">
  								<option value="" selected disabled>Select Location</option>
  								<option value="1">Kokrajhar</option>
  								<option value="2">Bongaigaon</option>
  							</select>
  						</div>

  						<div class="col s12 m4">
  							<select class="input-field">
  								<option value="" selected disabled>Select Restaurant</option>
  								<option value="1">Omshri</option>
  								<option value="2">Pari</option>
  								<option value="3">Milouhab</option>
  							</select>
  						</div>
  						<div class="col s12 m4">
  							<button type="submit" class="btn orange lighten-1">GO TO RESTAURANT</button>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
@endsection
