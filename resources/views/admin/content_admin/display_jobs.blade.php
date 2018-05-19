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
                    <div class="input-group m-b">
                        <span class="input-group-btn">
                            <a type="button" href="" class="btn btn-primary" id="btnSearch" onclick="clickSearch()">Search</a>
                        </span> <input type="text" class="form-control" value="" id="search_job" placeholder="Enter Name JOB">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name JOB</th>
                                <th>Company</th>
                                <th>Number of employee</th>
                                <th>summary</th>
                                <th>date start</th>
                                <th>date expire</th>
                                <th>Email</th>
                                <th>Edit record</th>
                                <th>Delete record</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->company }}</td>
                                <td>{{ $job->num_emp }}</td>
                                <td>{{ $job->summary }}</td>
                                <td>{{ $job->date_start }}</td>
                                <td>{{ $job->date_expire }}</td>
                                <td>{{ $job->email }}</td>
                                <th><a href="/admin/{{ $job->id }}/edit" class="fa fa-edit">   Edit</a></th>
                                <th><a href="" data-toggle="modal" data-target="#DeleteModal" onclick="clickDelete({{ $job->id }})" class="fa fa-trash"  style="color: red">   Delete</a></th>

                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name JOB</th>
                                <th>Company</th>
                                <th>Number of employee</th>
                                <th>summary</th>
                                <th>date start</th>
                                <th>date expire</th>
                                <th>Email</th>
                                <th>Edit record</th>
                                <th>Delete record</th>

                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal window show delete confirm-->
    <div class="modal inmodal" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-trash modal-icon"></i>
                    <h4 class="modal-title">Are you sure?</h4>
                    <small class="font-bold">This deletion may deleted on database without any backup!<br>Make sure take backup first and then delete it.</small>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-danger" id="deleteRoute" href="">Delete</a>
                </div>
            </div>
        </div>
    </div>

    @endsection

@section('java-script')
    <script>
        function clickDelete(id) {
            $('#deleteRoute').attr('href','admin/'+id+'/delete');
        }
        function clickSearch() {
            var $x = $('#search_job').val();
            $('#btnSearch').attr('href','admin/'+$x);
        }
    </script>
    @endsection