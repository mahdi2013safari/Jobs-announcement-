@include('admin.layout_admin.header')

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name fa fa-user-plus"></h1>

        </div>
        <h3>Register to JobBook</h3>
        <p>Create account to see it in action.</p>
        <form class="m-t" role="form" method="POST" action="{{ route('register') }}">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required="" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="" value="{{old('password')}}">
            </div>
            <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
        </form>
        <p class="m-t"> <small>JobBook use inspina template theme &copy; 2014</small> </p>
    </div>
</div>


<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>


@include('admin.layout_admin.footer')