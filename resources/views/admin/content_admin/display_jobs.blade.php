@extends('admin.layout_admin.master')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Basic Data Tables example with responsive plugin</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Name JOB</th>
                                <th>Company</th>
                                <th>Number of employee</th>
                                <th>summary</th>
                                <th>date start</th>
                                <th>date expire</th>
                                <th>Email</th>
                                <th>date at</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                            <tr class="gradeX">
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->company }}</td>
                                <td>{{ $job->num_emp }}</td>
                                <td>{{ $job->summary }}</td>
                                <td>{{ $job->date_start }}</td>
                                <td>{{ $job->date_expire }}</td>
                                <td>{{ $job->email }}</td>
                                <td>{{ $job->created_at }}</td>
                                <td>{{ $job->updated_at }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    @endsection