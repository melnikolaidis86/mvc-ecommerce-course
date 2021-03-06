@extends('admin.layout.base')

@section('title','Product Category')

@section('content')
    <div class="category">
        <div class="row expanded">
            <h2>Product Categories</h2>
        </div>

        @include('includes.messages')

        <div class="row expanded">
            <div class="small-12 medium-6 columns">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="input-group-field" placeholder="Search by name">
                        <div class="input-group-button">
                            <input type="button" class="button" value="Search">
                        </div>
                    </div>
                </form>
            </div>
            <div class="small-12 medium-5 end columns">
                <form action="/admin/product/categories" method="post">
                    <div class="input-group">
                        <input type="text" class="input-group-field" name="name" placeholder="Category Name">
                        <input type="hidden" name="token" value="{{\App\Classes\CSRSFToken::_token()}}">
                        <div class="input-group-button">
                            <input type="submit" class="button" value="Create">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row expanded">
            <div class="small-12 medium-11">
                @if(count($categories))
                    <table class="hover">
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category['name']}}</td>
                                    <td>{{$category['slug']}}</td>
                                    <td>{{$category['added']}}</td>
                                    <td width="100" class="text-right">
                                        <a href="#"><i class="fa fa-edit"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $links !!}

                @else
                    <h3>You have not created any category</h3>
                @endif
            </div>
        </div>
    </div>
@endsection