@extends('master')

@section('content')
    <div class="row mt-md-3  ">



        <div class="col-8 ">
            <div class="mb-2">
                <h4 class="text-primary">Add Product</h4>
            </div>

            <form action="{{ route('store.product') }}" method="POST">
                @csrf

                <div class="mb-3">
                    {{-- <label for="productname" class="form-label">Product Name</label> --}}
                    <input class="form-control" type="text" id="productname" name="name" placeholder="Product Name"
                        required>
                </div>
                <div class="mb-3">
                    {{-- <label for="quantity" class="form-label">Quantity</label> --}}
                    <input class="form-control" type="number" id="quantity" name="quantity" placeholder="Quantity">
                </div>
                <div class="mb-3">
                    {{-- <label for="price" class="form-label">Price</label> --}}
                    <input type="text" id="price" class="form-control" name="price"placeholder="price">
                </div>

                <div class="text-center d-grid">
                    <button class="btn btn-success" type="submit"> Add Product </button>
                </div>

            </form>
        </div>
    </div>
@endsection
