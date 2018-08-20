@extends('admin.layout.base')

@section('title','Dashboard')

@section('content')
    <div class="dashboard">
        <div class="row expanded">
            <h2>Dashboard</h2>
            <form action="/admin" method="post" enctype="multipart/form-data">
                <input name="product" type="text" value="testing">
                <input type="file" name="image">
                <input type="submit" value="Go" name="submit">
            </form>

            {{\App\Classes\Request::all()}}
        </div>
    </div>
@endsection