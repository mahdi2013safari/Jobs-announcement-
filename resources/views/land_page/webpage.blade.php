@extends('land_page.master')

@section('content_page')
    {{-- your content goes here --}}


    <div class="input-group m-b">
        <span class="input-group-btn"><a type="button" href="" class="btn btn-primary" id="btnSearch" onclick="clickSearch()">Search</a></span> <input type="text" class="form-control" value="" id="search_job" placeholder="Enter Name JOB">
    </div>

    <br/>
    <br/>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>ID</th>
                <th>JOB title</th>
                <th>Company</th>
                <th>Number of employee</th>
                <th>summary</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->id }}</td>
                    <td><a href="#">{{ $job->name }}</a></td>
                    <td><a href="#">{{ $job->company }}</a></td>
                    <td>{{ $job->num_emp }}</td>
                    <td>{{ $job->summary }}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Name title</th>
                <th>Company</th>
                <th>Number of employee</th>
                <th>summary</th>
            </tr>
            </tfoot>
        </table>
    </div>
    @endsection