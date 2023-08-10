@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-between ">
                            <div class="align-items-center col">
                                <h3 class="ExpenseHeading">Expense Summary</h3>
                            </div>

                            <div class="align-items-center col">
                                <a href="{{ url('/expense-category') }}" class="float-end btn m-0 btn-sm bg-gradient-primary">  Expense
                                    Category</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="d-flex justify-content-center ">
                            @if (session()->has('message'))
                                <div class="alert alert-success w-50 text-light">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="container-fluid">
                            <div class="row">


                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 animated fadeIn p-2 shadow rounded">
                                    <div class="card card-plain h-100 bg-white">
                                        <div class="p-5">
                                            <div class="row">
                                                <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                                    <div>
                                                        <h2 class="mb-0 text-capitalize font-weight-bold">{{ $totalExpense }} <i
                                                                class="ps-1 fa-solid fa-bangladeshi-taka-sign"
                                                                style="font-size: 18px"></i></h2>
                                                        <h5 class="mb-0 text-md ExpenseHeading"> Expense</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                                    <div
                                                        class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md ">
                                                        <img class="w-100 blackIconForWhite"
                                                            src="{{ asset('images/expense.png') }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="container-fluid my-5 ">

                            <div class="container-fluid shadow p-5 rounded">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12 p-0 m-0">
                                        <div class="card px-3 py-3 shadow-none">
                                            <div class="row justify-content-between ">
                                                <div class="align-items-center col">
                                                    <h4 class="mb-0 ExpenseHeading">Expense</h4>
                                                </div>

                                                <div class="align-items-center col">
                                                    <button type="button"
                                                        class="float-end btn m-0 btn-sm bg-gradient-primary"
                                                        data-bs-toggle="modal" data-bs-target="#addIncome"> Add
                                                        Expense</button>
                                                </div>

                                            </div>
                                            <hr class="bg-dark " />
                                            <table class="table" id="myTable">
                                                <thead>
                                                    <tr class="bg-light">
                                                        <th>No</th>
                                                        <th>Title</th>
                                                        <th>Category</th>
                                                        <th>Description</th>
                                                        <th>Amount</th>
                                                        <th>Expense Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableList">
                                                    @foreach ($expense as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->title }}</td>
                                                            <td>{{ $item->ExpenseCategory->name }}</td>
                                                            <td>{{ $item->description }}</td>
                                                            <td><span
                                                                    class="incomeMony bg-danger">{{ $item->amount }}</span>
                                                            </td>
                                                            <td>{{ $item->expense_date }}</td>
                                                            <td>
                                                                <button class="btn btn-success"><i
                                                                        class="fa-solid fa-eye"></i></button>

                                                                {{-- <button class="btn btn-danger"><i
                                                                        class="fa-solid fa-trash"></i></button> --}}
                                                                <form action="" method="POST"
                                                                    style="display: inline-block">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger"><i
                                                                            class="fa-solid fa-trash"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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




        <!-- Modal -->
        <div class="modal fade" id="addIncome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 ExpenseHeading" id="exampleModalLabel">Add Expense</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('store.expense') }}" method="POST">
                        @csrf
                        <div class="modal-body">
    
    
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 p-1">
                                        <label class="form-label">Title *</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="col-12 p-1">
                                        <label class="form-label">Income Category *</label>
                                        <select name="expense_category_id" id="" class="form-control">
                                            <option value="">Select Catrgory</option>
                                            @foreach ($expenseCategory as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label class="form-label">Description *</label>
                                        <textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="col-12 p-1">
                                        <label class="form-label">Amount *</label>
                                        <input type="text" name="amount" class="form-control">
                                    </div>
                                    <div class="col-12 p-1">
                                        <label class="form-label">Income Date *</label>
                                        <input type="date" name="expense_date" class="form-control">
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="float-end btn m-0 btn-sm bg-gradient-faded-light me-3"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="float-end btn m-0 btn-sm bg-gradient-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    
    
        <script>
            $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    order: [
                        [0, 'desc']
                    ],
                    lengthMenu: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                    language: {
                        paginate: {
                            next: '&#8594;', // Right arrow
                            previous: '&#8592;' // Left arrow
                        }
                    }
                });
            });
        </script>
@endsection
