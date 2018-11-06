@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <h4 class="text-center text-success">Welcome to Our App</h4>

    <div class="container">
    <div class="row">
        <ul>
            @if(Session::get('visitorId'))
                <li class="nav-item dropdown"><a class="nav-link text-primary dropdown-toggle" data-toggle="dropdown" href="">{{ Session::get('visitorName') }}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-secondary" href="#" onclick="
                    event.preventDefault();
                    document.getElementById('visitorLogoutForm').submit();
                    ">logout</a></li>
                    </ul>
                    <form id="visitorLogoutForm" action="{{ route('visitor-logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            @else
            @endif
        </ul>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font: 18px 'Open Sans'">
                    Visitor Information
                </div>
                <hr/>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    {{--                    <h1 class="text-success text-center">{{ Session::get('message') }}</h1>--}}
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th class="bg-warning text-center">NID</th>
                            <th class="bg-success text-center">Name</th>
                            <th class="bg-warning text-center">Email</th>
                            <th class="bg-success text-center">Address</th>
                            <th class="bg-warning text-center">Date Of Birth</th>
                            <th class="bg-success text-center">Mobile</th>
                        </tr>
                        </thead>
                        {{--<tbody>--}}
                        {{--@foreach($visitors as $visitor)--}}
                            {{--<tr class="odd gradeX">--}}
                                {{--<td class="bg-warning">{{ $visitor->nid }}</td>--}}
                                {{--<td class="bg-success">{{ $visitor->name }}</td>--}}
                                {{--<td class="bg-warning">{{ $visitor->email }}</td>--}}
                                {{--<td class="bg-success">{{ $visitor->address }}</td>--}}
                                {{--<td class="bg-success">{{ $visitor->date }}</td>--}}
                                {{--<td class="bg-success">{{ $visitor->mobile }}</td>--}}
                        {{--@endforeach--}}
                        {{--</tbody>--}}
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    </div>
@endsection