
<div>

    <table>
    <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
        <tr>
        <th>name</th>
        <th>email</th>


        </tr>

    @foreach($users as $user)
    <tr>
    
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>

    </tr>
    @endforeach
</table>
</div>