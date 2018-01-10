@extends('layouts.app')
@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            </ul>
        </div>
    @endif

        <form action="/add" method="post">
            {{csrf_field()}}
            <label for="name">Product Name </label>
            <input type="text" id="name" name="name" placeholder="Enter Product name"><br><br>
            <label for="name">Product Price </label>
            <input type="text" id="price" name="price" placeholder="Enter Price"><br>
            <br>
                
            <input type="submit" id="submit" value="ADD">
        </form>
@endsection('content')
