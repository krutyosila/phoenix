@extends('layout.app')

@section('content')
    <div class="d-lg-flex justify-content-between">
        <div class="p-3 p-md-5">
            <img src="{{ asset('assets/img/contact.png') }}" style="max-width: 320px" width="100%" alt="">
        </div>
        <div class="p-3 p-md-5 w-100">
            <h5 class="text-orange">Contact Us</h5>
            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Name Surname">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="col-12 pt-3">
                        <label for="message" class="form-label">Message / Order</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <div class="col-12 pt-3">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
