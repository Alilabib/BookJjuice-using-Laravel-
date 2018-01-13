@extends('layouts.app')
@section('content')
<div class="container">
<table class="table table-stripped">
    <tr>
        <td>Name   </td>
        <td>Price  </td>
        <td>Update </td>
        <td>Delete </td>
    </tr>

@foreach($product as $myProduct )
<tr>
    <td>{{$myProduct->name }}</td>

    <td>{{$myProduct->price}}</td>

    <td><a class="btn btn-info" href="edit/{{$myProduct->id}}"> Edit </a></td>

    <td><a class="btn btn-danger" href="add/{{$myProduct->id}}"> Delete </a></td>
</tr>
@endforeach

</table>

</div>

@endsection
