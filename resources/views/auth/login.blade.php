
@include('admin.layout_admin.header')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name fa fa-sign-in"></h1>

        </div>
        <h3>Welcome to JobBook admin panel</h3>
        <p>This is web site profectlly design for adminastrator web site, can access all permission by login [Admin].
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>
        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            </div>
            @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{$errors->first('email')}}</strong>
                </div>
            @endif
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="#"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
        </form>
        <p class="m-t"> <small>This Dashboard design it by inspina template &copy; 2014</small> </p>
    </div>
</div>

@include('admin.layout_admin.footer')
