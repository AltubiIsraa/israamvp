
<h1>Display Documents</h1>
<br><br>

<form>
@csrf()
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
  <tr>
  <td><label>{{$doc->title}}</label></td>
  <td><label>{{$doc->Desc}}</label></td>
  <td><label>{{$doc->subject}}</label></td>
  <td><label>{{$doc->grade}}</label></td>
  </tr>
</table>



 
</form>