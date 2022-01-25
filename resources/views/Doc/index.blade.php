<div>

  @foreach($docs as $doc)
@csrf
  <div>
    <h1>
      {{$doc->title}}
    </h1>
  </div>

  @endforeach
</div>