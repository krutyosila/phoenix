@extends('layout.app')

@section('content')

    <div class="d-lg-flex justify-content-between">
        <div class="w-100 p-3 border-right">
            <h5 class="mb-3 pb-2 text-orange">{{ $brand->name }}</h5>
            <div class="row row-cols-2 row-cols-md-4 g-4">
                @foreach($brand->products as $product)
                    @php
                        $product_data = json_decode($product->attribute_data, false);
                    @endphp
                    <div class="col">
                        <a href="{{ route('product', ['id' => $product->id]) }}"
                           class=" text-decoration-none text-dark text-center">
                            @if($product->images->count() > 0)
                            <img
                                src="{{ asset('storage/'.$product->images[0]->id.'/'.$product->images[0]->file_name) }}"
                                class="img-thumbnail rounded" alt="{!! $product_data->name->en !!}">
                            @endif
                            <h6 class="pt-2 card-title">{!! $product_data->name->en !!}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="p-3">
            <div class="list-group border-left">
                @foreach($brands as $brand)
                    <a href="{{ route('brand', ['id' =>$brand->id]) }}"
                       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span class="d-inline-block w-100 pe-4">{{ $brand->name }}</span>
                        <span class="badge text-bg-light ms-auto rounded-pill">{{ $brand->products->count() }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
