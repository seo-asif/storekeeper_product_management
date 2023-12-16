@extends('master')

@section('content')
    <div class="row mt-md-3">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">All Sale Transactions</h4>

                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th class="ps-md-4">Date</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Sale Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sales as $key => $sale)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $sale->created_at }}</td>
                                        <td>{{ $sale->product_name }}</td>
                                        <td class="ps-md-4">{{ $sale->quantity }}</td>
                                        <td class="ps-md-4">{{ $sale->subtotal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col-->
    </div>
@endsection
