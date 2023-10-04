@extends('layout.app')

@section('content')
<div class="card-group">
    <div class="card border-0">
        <img src="{{ asset('assets/img/s1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-orange">Title1</h5>
            <p class="card-text">
                Our age management research helps to improve qualify of life of men everywhere; rejecting the
                standard that aging requires a person to reduce activity and lessen the enjoyment of life.
            </p>
        </div>
    </div>
    <div class="card border-0">
        <img src="{{ asset('assets/img/s2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-orange">Title2</h5>
            <p class="card-text">
                Our age management research helps to improve qualify of life of men everywhere; rejecting the
                standard that aging requires a person to reduce activity and lessen the enjoyment of life.
            </p>
        </div>
    </div>
    <div class="card border-0">
        <img src="{{ asset('assets/img/s3.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-orange">Title3</h5>
            <p class="card-text">
                Phoenix Labs is committed to applying science and technology to improve health and wellbeing,
                redefining what we can expect in life.
            </p>
        </div>
    </div>
</div>

<div class="p-3 mt-3 border-top">
    <h6>Products</h6>
    @foreach($brands as $brand)
        <a class="badge text-bg-orange text-decoration-none text-uppercase">
            #{{ $brand->name }}
        </a>
    @endforeach
</div>
@endsection