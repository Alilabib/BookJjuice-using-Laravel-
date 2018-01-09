<table>
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

    <td><a href="edit/{{$myProduct->id}}"> Edit </a></td>

    <td><a href="add/{{$myProduct->id}}"> Delete </a></td>
</tr>
@endforeach

</table>
