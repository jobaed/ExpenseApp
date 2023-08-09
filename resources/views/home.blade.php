@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Expense Summary</h4>
                    </div>

                    <div class="card-body">

                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                                    <div class="card card-plain h-100 bg-white">
                                        <div class="p-5">
                                            <div class="row">
                                                <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                                    <div>
                                                        <h2 class="mb-0 text-capitalize font-weight-bold">50,0000</h2>
                                                        <p class="mb-0 text-md">Income</p>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                                    <div
                                                        class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                                        <img class="w-100 " src="{{ asset('images/icon (1).svg') }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                                    <div class="card card-plain h-100 bg-white">
                                        <div class="p-5">
                                            <div class="row">
                                                <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                                    <div>
                                                        <h2 class="mb-0 text-capitalize font-weight-bold">15,0000</h2>
                                                        <p class="mb-0 text-md">Expense</p>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                                    <div
                                                        class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                                        <img class="w-100 " src="{{ asset('images/icon (1).svg') }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                



                            </div>
                        </div>


                        <div class="container-fluid my-5">
                            
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12 p-0 m-0">
                                        <div class="card px-3 py-3">
                                            <div class="row justify-content-between ">
                                                <div class="align-items-center col">
                                                    <h4 class="mb-0">Income</h4>
                                                </div>
                                                
                                            </div>
                                            <hr class="bg-dark " />
                                            <table class="table" id="tableData">
                                                <thead>
                                                    <tr class="bg-light">
                                                        <th>Title</th>
                                                        <th>Category</th>
                                                        <th>Description</th>
                                                        <th>Amount</th>
                                                        <th>Income Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableList">
                                                    <td>Selary</td>
                                                    <td>Selary</td>
                                                    <td>Getting Selary After Some Issue</td>
                                                    <td>12,0000</td>
                                                    <td>08/08/2023</td>
                                                    <td>View | Delete</td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid my-5">
                            
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12 p-0 m-0">
                                        <div class="card px-3 py-3">
                                            <div class="row justify-content-between ">
                                                <div class="align-items-center col">
                                                    <h4 class="mb-0">Expence</h4>
                                                </div>
                                                
                                            </div>
                                            <hr class="bg-dark " />
                                            <table class="table" id="tableData">
                                                <thead>
                                                    <tr class="bg-light">
                                                        <th>Title</th>
                                                        <th>Category</th>
                                                        <th>Description</th>
                                                        <th>Amount</th>
                                                        <th>Income Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableList">
                                                    <td>Selary</td>
                                                    <td>Selary</td>
                                                    <td>Getting Selary After Some Issue</td>
                                                    <td>12,0000</td>
                                                    <td>08/08/2023</td>
                                                    <td>View | Delete</td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
