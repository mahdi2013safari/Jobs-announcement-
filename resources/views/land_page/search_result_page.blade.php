@extends('land_page.master')

@section('content_page')
    {{-- your content goes here --}}




    <br/>
    <br/>

    <div class="table-responsive">
        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter" >
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

                <tr>
                    <td>{{ $jobs->id }}</td>
                    <td><a href="#">{{ $jobs->name }}</a></td>
                    <td><a href="#">{{ $jobs->company }}</a></td>
                    <td>{{ $jobs->num_emp }}</td>
                    <td>{{ $jobs->summary }}</td>
                </tr>

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
@section('javascript')
    <script src="/style_admin/js/plugins/footable/footable.all.min.js"></script>
    <script>

    </script>
@endsection
