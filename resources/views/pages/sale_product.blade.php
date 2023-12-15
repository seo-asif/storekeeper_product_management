@extends('master')
@section('content')
    <div class="row mt-md-3">
        <div class="col-10 ">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title mb-3 text-primary">Sale Product</h4>

                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>Sl</th>

                                    <th>Product Name</th>
                                    <th >In Stock</th>
                                    <th class="ps-md-4">Quantity</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>T- Shirt</td>
                                    <td class="ps-md-3">20</td>
                                    <td>
                                        <input type="number">
                                    </td>
                                    <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>

                                    <td>Mobile</td>
                                    <td class="ps-md-3">10</td>
                                    <td>
                                        <input type="number">
                                    </td>
                                    <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col-->



    </div>
@endsection
