@extends('master')

@section('content')
    <div class="row mt-md-3">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3 text-primary">Sale Product</h4>
                    <form method="post" action="{{ route('sale.product.updatePrice') }}">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Product Name</th>
                                        <th>Current Price</th>
                                        <th class="ps-3">Update Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td class="ps-md-4">{{ $product->price }}</td>
                                            <td>
                                                <input type="number" name="update_price[{{ $product->id }}]"
                                                    min="0">
                                            </td>
                                            <td class="table-action">
                                                <button type="submit" class="btn btn-primary" name="product_id"
                                                    value="{{ $product->id }}">
                                                    Update Price
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col-->
    </div>
@endsection
