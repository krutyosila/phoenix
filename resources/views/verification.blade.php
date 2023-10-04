@extends('layout.app')

@section('content')
    <div class="d-lg-flex justify-content-between">
        <div class="p-3 p-md-5">
            <img src="{{ asset('assets/img/verification.png') }}" style="max-width: 320px" width="100%" alt="">
        </div>
        <div class="p-3 p-md-5 w-100">
            <h5 class="text-orange">Anti-Piracy</h5>
            <p>
                Unfortunately, in addition to medicines certified and admitted to production and distribution,
                counterfeit
                medicines sometimes appear on the market. These can affect patients, not having the effect of the
                original
                product and damaging the reputation of the producing company.
            </p>
            <form class="row g-3">
                <div class="col-auto col-form-label">
                    Enter 11-Digit Code
                </div>
                <div class="col-auto">
                    <label for="digit-code" class="visually-hidden">---- --- ----</label>
                    <input type="text" class="form-control" id="digit-code" placeholder="---- --- ----">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Check Code</button>
                </div>
            </form>
            <p>
                By entering your drug code in the online form on the website,This detail can be considered as an index
                of
                product authenticity. Since each box has a unique number, the codes checked too often are identified as
                suspicious by the system. Too many checks on a product indicate that the product is counterfeit.
            </p>
        </div>
    </div>
@endsection
