@extends('admin.layout_admin.master')
@section('content')

        <!--$table->string('name');
            $table->string('company');
            $table->string('num_emp');
            $table->string('summary');
            $table->string('date_start');
            $table->string('date_expire');
            $table->string('email'); -->
<div class="col-lg-12" xmlns="http://www.w3.org/1999/html">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Job announcement <small>Enter new job.</small></h5>
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
            <form method="post" class="form-horizontal" action="/admin/{{$job->id}}">

                @method('put')
                <div class="form-group"><label class="col-sm-2 control-label">name Job</label>
                    <div class="col-sm-10"><input type="text" value="{{ $job->name }}" class="form-control" name="name"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Company name</label>
                    <div class="col-sm-10"><input type="text" value="{{ $job->company }}" class="form-control" name="company"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Number of employees</label>
                    <div class="col-sm-10"><input type="text" value="{{ $job->num_emp }}" class="form-control" name="num_emp"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">summary of job</label>
                    <div class="col-sm-10"><input type="text" value="{{ $job->summary }}" class="form-control" name="summary"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">data start</label>
                    <div class="col-sm-10"><input type="date" value="{{ $job->date_start }}" class="form-control" name="date_start"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">data expire</label>
                    <div class="col-sm-10"><input type="date" value="{{ $job->date_expire }}" class="form-control" name="date_expire"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Email applay</label>
                    <div class="col-sm-10"><input type="email" value="{{ $job->email }}" class="form-control" name="email"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary">submite</button></div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- about company -->
<!-- job summery -->
<!-- job details
 Date posted - closing date
 number of vacancies
 function area : faculty IT-Software
 Nationality
 Contract type: parmatent
 contract duration :
 probation period : 2monthes
 referance number :
 work type : full time
 gender : any
 open ended : NO
 salary range :
 years of exprince :
 Extension possibility:
 -->
<!--Duties and responsibility -->
<!--Travel to province -->
<!--Skills  -->
<!-- Qualification -->
<!-- Job Location -->
<!-- Education -->
<!-- Submission Guidline -->
<!-- Submission email -->




@endsection
