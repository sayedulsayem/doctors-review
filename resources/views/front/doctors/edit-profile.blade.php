@extends('front.doctors.master')
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
                        <form role="form" action="{{ url('doctors/edit-store') }}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <input type="user_id" class="form-control hidden" name="user_id" value="{{ Session::get('id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nid">National Identity Number</label>
                                    <input type="nid" class="form-control" name="nid" id="nid" placeholder="National Identity Number">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ Session::get('email') }}" readonly="readonly">
                                </div>

                                <div class="form-group">
                                    <label for="FathersName">Father's Name</label>
                                    <input type="text" class="form-control" name="fathers_name" id="fathers_name" placeholder="Father's Name">
                                </div>

                                <div class="form-group">
                                    <label for="MothersName">Mother's Name</label>
                                    <input type="text" class="form-control" name="mothers_name" id="mothers_name" placeholder="Mother's Name">
                                </div>

                                <div class="form-group">
                                    <label for="DateOfBirth">Date Of Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Date Of Birth">
                                </div>
                                <div for="mbbs" class="border border-secondary">
                                    <label>MBBS</label>
                                    <input type="text" class="form-group hidden" value="MBBS" name="MBBS">
                                    <div class="form-group">
                                        <label for="license">License No.</label>
                                        <input type="text" class="form-control" name="license" id="license" placeholder="License No. ">
                                    </div>
                                    <div class="form-group">
                                        <label for="InstituteName">Institute Name</label>
                                        <input type="text" class="form-control" name="institute" id="institute" placeholder="Institute Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="PassingYear">Passing Year</label>
                                        <input type="text" class="form-control" name="passing_year" id="passing_year" placeholder="Passing Year">
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="BMBS" value="BMBS"><span>BMBS</span>
                                    </label>
                                    <label for="">Institute Name</label>
                                    <input class="text" name="BMBS_institute">
                                    <label for="">Passing Year</label>
                                    <input class="text" name="BMBS_passing_year">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="MBChB"><span>MBChB</span>
                                    </label>
                                    <label for="">Institute Name</label>
                                    <input class="text" name="MBChB_institute">
                                    <label for="">Passing Year</label>
                                    <input class="text" name="MBChB_passing_year">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="MBBCh"><span>MBBCh</span>
                                    </label>
                                    <label for="">Institute Name</label>
                                    <input class="text" name="MBBCh_institute">
                                    <label for="">Passing Year</label>
                                    <input class="text" name="MBBCh_passing_year">
                                </div>

                                <div for="specialities" class="border border-secondary">
                                    <label>Specialities</label>
                                    <div class="form-group">
                                        <label for="license">Speciality Name</label>
                                        <input type="text" class="form-control" name="speciality" id="speciality" placeholder="Speciality">
                                    </div>
                                    <div class="form-group">
                                        <label for="InstituteName">Explanation</label>
                                        <input type="text" class="form-control" name="sp_explanation" id="sp_explanation" placeholder="Explanation">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Main Chamber With Address</label>
                                    <div>
                                        <textarea name="main_chamber" id="main_chamber" cols="100%" rows="10" placeholder="Main Chamber Clinic/Hospital Name With Full Address"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Private Practise Schedules Date</label>
                                    <input type="date" class="form-group" name="private_schedules" id="private_schedules">
                                    <label for="">Private Practise Schedules Time</label>
                                    <input type="time" class="form-group" name="private_schedules_time" id="private_schedules_time">
                                    <button>Add New</button>
                                </div>

                                <div class="form-group">
                                    <label for="">Practising Area</label>
                                    <input type="text" class="form-group" name="practise_area" placeholder="e.g. Orthopedics">
                                    <label for="">Explanation for Normal People</label>
                                    <input type="text" class="form-group" name="practise_area_explanation" placeholder="e.g. Bones pain">
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
