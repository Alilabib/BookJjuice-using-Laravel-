@extends('layouts.app')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="container">
        <form action="/add" method="post">
            {{csrf_field()}}
          <div class="form-group{{$errors->has('name') ? ' has-error ' : ''}}">
            <label class="control-label" for="name">Product Name </label>
            <input type="text" id="name" class="form-control" name="name" value="{{Request::old('name')}}" placeholder="Enter Product name">
          </div>
          <div class="form-group{{$errors->has('price') ? ' has-error ' :''}}">
            <label class="control-label" for="price">Product Price </label>
            <input type="text" id="price" class="form-control" name="price" value="{{Request::old('price')}}" placeholder="Enter Price">
         </div>
            <input type="submit" class="btn btn-primary" id="submit" value="ADD">
        </form>
</div>
@endsection('content')
