

@php
$page_title = "Covid19-Tracker Android App";
@endphp

@include('header')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="card">
          <div class="card-body">
            <p class="card-title title">{{ $tutorial->title }} Tutorial</p>
            <p class="card-text"> – Step By Step Guide!
            </p>
          </div>
        </div>
      </div>
    <div class="col-sm-12 col-md-6">
        <img class="img-thumbnail" src="{{ asset('storage/'.$tutorial->image) }}" alt="">      
    </div>
</div>



<button onclick="topFunction()" id="btn-scroll-up" title="Go to top"><i class="fa fa-angle-up"></i></button>

@include('footer')