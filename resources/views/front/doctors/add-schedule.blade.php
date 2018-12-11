@extends('front.doctors.master')

@section('body')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Schedule
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
                        <form role="form" action="{{  route('all-schedule.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="number" class="form-control hidden" name="user_id" value="{{ Session::get('id') }}">
                                </div>

                                <div class="form-group">
                                    <label for="chamber">Chamber</label>
                                    <input type="text" class="form-control" name="chamber" id="chamber" placeholder="Chamber">
                                </div>

                                <div class="form-group">
                                    <label for="starting_date">Starting Date</label>
                                    <input type="date" class="form-control" name="starting_date" id="starting_date" placeholder="Starting Date">
                                </div>

                                <div class="form-group">
                                    <label for="ending_date">Ending Date</label>
                                    <input type="date" class="form-control" name="ending_date" id="ending_date" placeholder="Starting Date">
                                    <h5>This field is not mandatory for one day schedule</h5>
                                </div>

                                <div class="form-group">
                                    <label for="staring_time">Starting Time</label>
                                    <input type="time" class="form-control" name="staring_time" id="staring_time" placeholder="Starting Date">
                                </div>

                                <div class="form-group">
                                    <label for="ending_time">Ending Time</label>
                                    <input type="time" class="form-control" name="ending_time" id="ending_time" placeholder="Ending Time">
                                </div>

                                <div class="form-group">
                                    <label for="total_appointment">Total Appointment</label>
                                    <input type="number" class="form-control" name="total_appointment" id="total_appointment" placeholder="Total Appointment">
                                </div>
                                <h4>Address of Chamber</h4>
                                <div class="form-group">
                                    <label for="house_no">House No</label>
                                    <input type="number" class="form-control" name="house_no" id="house_no" placeholder="House No">
                                </div>

                                <div class="form-group">
                                    <label for="road">Road No/Name</label>
                                    <input type="text" class="form-control" name="road" id="road" placeholder="Road No/Name">
                                </div>

                                <div class="form-group">
                                    <label for="dist">District Name</label>
                                    <input type="text" class="form-control" name="dist" id="dist" placeholder="District Name">
                                </div>

                                <div class="form-group">
                                    <label for="sub_dist">Sub District Name</label>
                                    <input type="text" class="form-control" name="sub_dist" id="sub_dist" placeholder="Sub District Name">
                                </div>

                                <div class="form-group">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="number" class="form-control" name="zip_code" id="zip_code" placeholder="Zip Code">
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



    </div>

    @endsection