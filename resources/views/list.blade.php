<h1>lists</h1>
<table border=1px>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>address</td>
        <td>email</td>
        <td>action</td>>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['address']}}</td>
        <td>{{$member['email']}}</td>
        <td>
            <a href="{{route('edit',$member['id'])}}">edit</a>
            <a href="{{route('delete',$member['id'])}}">delete</a>
        </td>
    </tr>
     
    @endforeach
</table>
<a href="{{route('add')}}">add member</a>
<div>
    {{$members->links()}}
</div>
<style>
    .w-5 {display: none}
</style>