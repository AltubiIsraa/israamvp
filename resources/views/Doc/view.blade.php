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
            <th>descri</th>
            <th>document</th>
        </tr>
        <tr>
<td>{{$doc->title}}
</td>
<td>{{$doc->Desc}}</td>
<td><iframe height="700" width="700" src="/doc/{{$doc->file}}" frameborder="2"></iframe>
</td>
        </tr>


    </table>




</div>