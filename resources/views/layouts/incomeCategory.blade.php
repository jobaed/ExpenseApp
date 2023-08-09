@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row justify-content-between ">
                            <div class="align-items-center col">
                                <h3 class="ExpenseHeading">Income Category</h3>
                            </div>


                            <div class="align-items-center col">
                                <button type="button" class="float-end btn m-0 btn-sm bg-gradient-primary"
                                    data-bs-toggle="modal" data-bs-target="#addCatModel"> Add Category</button>

                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            @if (session()->has('message'))
                                <div class="alert alert-success w-50">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="container-fluid">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12 p-0 m-0">
                                        <div class="card px-3 py-3">


                                            {{-- <table class="table" id="tableData">
                                                <thead>
                                                    <tr class="bg-light">
                                                        <th>No</th>
                                                        <th>Category Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($categories as $category)
                                                    <tbody >
                                                        <td>{{ $category->id }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>
                                                            <button class="btn btn-success"><i
                                                                    class="fa-solid fa-eye"></i></button>

                                                            <button class="btn btn-danger"><i
                                                                    class="fa-solid fa-trash"></i></button>
                                                            </a>
                                                        </td>
                                                    </tbody>
                                                @endforeach

                                            </table> --}}

                                            <table id="myTable" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>No </th>
                                                        <th>Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td>{{ $category->id }}</td>
                                                            <td>{{ $category->name }}</td>
                                                            <td>
                                                                <button class="btn btn-success"><i
                                                                        class="fa-solid fa-eye"></i></button>

                                                                {{-- <button class="btn btn-danger"><i
                                                                        class="fa-solid fa-trash"></i></button> --}}
                                                                <form action="{{ route('delete.income.category', $category->id) }}"
                                                                    method="POST" style="display: inline-block">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger"><i
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

    <script>
        let tableData = $('#myTable');

        tableData.DataTable({
            order: [
                [0, 'desc']
            ],
            lengthMenu: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
            language: {
                paginate: {
                    next: '&#8594;', // or '→'
                    previous: '&#8592;' // or '←'
                }
            }
        });
    </script>




    <!-- Modal -->
    <div class="modal fade" id="addCatModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 ExpenseHeading" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('store.income.category') }}" method="POST">
                    @csrf
                    <div class="modal-body">



                        <div class="container">
                            <div class="row">
                                <div class="col-12 p-1">
                                    <label class="form-label">Category Name *</label>
                                    <input type="text" name="name" class="form-control" id="categoryName">
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
@endsection
