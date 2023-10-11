@extends('layout.app')

@section('content')
    @php
        $product_data = json_decode($product->attribute_data, false);
    @endphp
    <div class="p-3">
        <nav
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><b>Products</b></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('brand', ['id' => $product->brand->id]) }}">{{ $product->brand->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product_data->name->en }}</li>

            </ol>
        </nav>
        <div class="pt-3">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    @if($product->images->count() > 0)
                        <img
                            src="{{ asset('storage/'.$product->images[0]->id.'/'.$product->images[0]->file_name) }}"
                            class="img-thumbnail rounded w-100" alt="{!! $product_data->name->en !!}">
                    @endif
                </div>
                <div class="col-12 col-md-6 col-lg-8 pt-3 pt-md-0">
                    <h4>{!! $product_data->name->en !!}</h4>
                    <p>{!! $product_data->description->en !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
