<div>
    <table>
        <tr></tr>
    </table>
    @foreach($docs as $doc)
    <h1>{{$doc->title}}</h1>
    <h1>{{$doc->Desc}}</h1>
    <h1>{{$doc->subject}}</h1>
    <h1>{{$doc->grade}}</h1>
    @endforeach
</div>