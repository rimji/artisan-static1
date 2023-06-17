@extends('_layouts.master')

@section('title', 'Shopping made easy!')

@section('content')
   
      <div class="scroll-container">
  <img src="{{ media('q_auto/abz1.jpg') }}" alt="Cinque Terre" width="300" height="400">
  <img src="{{ media('q_auto/dez1.jpg') }}" alt="Forest" width="300" height="400">
  <img src="{{ media('q_auto/jkz.jpg') }}" alt="Cinque Terre" width="300" height="400">
  <img src="{{ media('q_auto/mnz.jpg') }}" alt="Forest" width="300" height="400">
  <img src="{{ media('q_auto/ghz.jpg') }}" alt="Cinque Terre" width="300" height="400"">
      </div><br>
  <a href="https://www.rimsim.com/in-deals-2" class="button"><b>BUY it NOW</b></a>
@endsection
