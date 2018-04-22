@extends('admin.layout_admin.master')
@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
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
                <form method="post" class="form-horizontal" action="">
                    <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10"><input type="text" placeholder="" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10"><input type="text" placeholder="" class="form-control" ></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">father name</label>
                        <div class="col-sm-10"><input type="text" placeholder="" class="form-control" ></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">age</label>
                        <div class="col-sm-10"><input type="text" placeholder="" class="form-control" ></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10"><button type="text" placeholder="" class="btn btn-w-m btn-primary" >Submit</button></div>
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
