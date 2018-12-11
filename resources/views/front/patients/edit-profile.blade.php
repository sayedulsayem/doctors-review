@extends('front.patients.master')
@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Profile
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('patients/edit-store') }}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="number" class="form-control hidden" name="user_id" value="{{ Session::get('id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nid">National Identity Number</label>
                                    <input type="number" class="form-control" name="nid" id="nid" placeholder="National Identity Number">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ Session::get('email') }}" readonly="readonly">
                                </div>

                                <div class="form-group">
                                    <label for="DateOfBirth">Date Of Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Date Of Birth">
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
                                </div>

                                <div class="form-group">
                                    <label for="houseNo">House Number</label>
                                    <input type="number" class="form-control" name="house_number" id="house_number" placeholder="House Number">
                                </div>

                                <div class="form-group">
                                    <label for="RoadNumber">Road Number/Name</label>
                                    <input type="text" class="form-control" name="road" id="road" placeholder="Road Number/Name">
                                </div>

                                <div class="form-group">
                                    <label for="subDist">Sub District</label>
                                    <input type="text" class="form-control" name="sub_dist" id="sub_dist" placeholder="Sub District">
                                </div>

                                <div class="form-group">
                                    <label for="Dist">District</label>
                                    <input type="text" class="form-control" name="dist" id="dist" placeholder="District">
                                </div>

                                <div class="form-group">
                                    <label for="zipCode">Zip Code</label>
                                    <input type="number" class="form-control" name="zip_code" id="zip_code" placeholder="Zip Code">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">

                                    <p class="help-block">Example block-level help text here.</p>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
