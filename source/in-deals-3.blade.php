@extends('_layouts.master')

@section('title', 'Shopping Deals')

@section('content')

   <div class="scroll-container">
  <img src="{{ media('q_auto/abz1.jpg') }}" alt="Cinque Terre" width="370" height="493">
  <img src="{{ media('q_auto/dez1.jpg') }}" alt="Forest" width="370" height="493">
  <img src="{{ media('q_auto/jkz.jpg') }}" alt="Cinque Terre" width="370" height="493">
  <img src="{{ media('q_auto/mnz.jpg') }}" alt="Forest" width="370" height="493">
  <img src="{{ media('q_auto/ghz.jpg') }}" alt="Cinque Terre" width="370" height="493">
   </div><br>
  <a href="https://www.rimsim.com/in-deals-2" class="button"><b>BUY it NOW</b></a>
<br>
<br><br>To create a fixed top menu<br><br>, use position:fixed and top:0<br><br>. Note that the fixed menu will overlay your other<br><br> content. To fix this, add a margin-top (to the content) that is equal or l<br><br>arger than the height of your menu.
@endsection
