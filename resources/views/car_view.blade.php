@extends('admin.layout_admin.master')
@section('content')

    <form action="{{ url('/car') }}" method="post">
        name :<input type="text" name="name" /><br/>
        model :<input type="text" name="model" /><br/>
        price :<input type="text" name="price" /><br/>
        sumite :<input type="submit" name="OK" /><br/>
    </form>

    @endsection