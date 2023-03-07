@extends('backend.master')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Designation Data Table</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Designations</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="color: #7e0e18;">Employee List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Employee No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>RQEM001</td>
                                <td>Kamrul Hasan</td>
                                <td>kamrul@gmail.com</td>
                                <td>+8801600000000</td>
                                <td>Backend</td>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option_b1" autocomplete="off"
                                                checked=""><i class="fa fa-eye"></i>
                                        </label>
                                        <label class="btn btn btn-info">
                                            <input type="radio" name="options" id="option_b2" autocomplete="off"><i
                                                class="fa fa-edit"> </i>
                                        </label>
                                        <label class="btn btn btn-danger">
                                            <input type="radio" name="options" id="option_b3" autocomplete="off"><i
                                                class="fa fa-trash"></i>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>RQEM002</td>
                                <td>Kamrul Hasan</td>
                                <td>kamrul@gmail.com</td>
                                <td>+8801600000000</td>
                                <td>Backend</td>
                                <td>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="options" id="option_b1" autocomplete="off"
                                                checked=""><i class="fa fa-eye"></i>
                                        </label>
                                        <label class="btn btn btn-info">
                                            <input type="radio" name="options" id="option_b2" autocomplete="off"><i
                                                class="fa fa-edit"> </i>
                                        </label>
                                        <label class="btn btn btn-danger">
                                            <input type="radio" name="options" id="option_b3" autocomplete="off"><i
                                                class="fa fa-trash"></i>
                                        </label>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
