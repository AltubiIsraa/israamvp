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

        </tr>

    @foreach($docs as $doc)
    <tr>
    
        <td>{{$doc->title}}</td>
        <td>{{$doc->Desc}}</td>
        <td>{{$doc->subject}}</td>
        <td>{{$doc->grade}}</td>
    </tr>
    @endforeach
</table>
</div>