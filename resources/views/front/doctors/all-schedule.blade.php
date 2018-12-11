@extends('front.doctors.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                All Schedule
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style="width: 800px;height: 500px;">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- calendar elements -->
                    <div class="box box-primary">
                        <!-- /.box-header -->
                        <!-- calendar start -->
                        <div id='calendar' class="cal-design" style="font: bold 20px Nunito"></div>

                    </div>
                    <!-- /.box -->


                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </section>

    </div>
<<<<<<< HEAD
=======

    <style>
        .cal-design{
            color: whitesmoke;
            background-color: #2e383c;
        }

        .cal-design:hover{
            transition: 1s;
            color: #2e383c;
            background-color: grey;
        }
    </style>
>>>>>>> 83f4da159adade44a7ca3d1d9da6904da91c9b0b


    @endsection

@section('custom-js')
    {{--calendar scripts--}}

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
                        @foreach($schedules as $schedule)
                    {
                        title : '{{ $schedule->chamber }}',
                        start : '{{ $schedule->starting_date }}',
                        end : '{{ $schedule->ending_date }}',
                        url : '{{ route('all-schedule.edit', $schedule->id) }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
    @endsection
