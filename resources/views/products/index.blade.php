@extends('layouts.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Products</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="products" class="display expandable-table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Quote#</th>
                                                    <th>Product</th>
                                                    <th>Business type</th>
                                                    <th>Policy holder</th>
                                                    <th>Premium</th>
                                                    <th>Status</th>
                                                    <th>Updated at</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a
                        href="" target="_blank">Dominion</a>
                    All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
