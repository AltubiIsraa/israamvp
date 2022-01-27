<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
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
        <th>title</th>
        <th>Description</th>
        <th>subject</th>
        <th>grade</th>
        <th>view</th>
        <th>download</th>

        </tr>

    @foreach($docs as $doc)
    <tr>
    
        <td>{{$doc->title}}</td>
        <td>{{$doc->Desc}}</td>
        <td>{{$doc->subject}}</td>
        <td>{{$doc->grade}}</td>
        <td><a href="{{url('/view',$doc->id)}}">view</a></td>
        <td><a href="{{url('/dowload',$doc->file)}}">download</a></td>
        <td>
        <a href="/doc/delete/{{$doc->id}}">delete</a></br>
        <a href="/doc/show/{{$doc->id}}"><button type="submit" >show</button></a>
        <br>
        <a href="/doc/edit/{{$doc->id}}"><button type="submit" >edit</button></a>
      </td>
    </tr>

    @endforeach
</table>
</div>