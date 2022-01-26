<h2>Delete Post</h2>

<form id ="form">
@csrf

  <label>Are you sure? <br> you want to delete - {{{$doc->title}}} - doc</label>
  <br>
  <br>
  <button onclick="checkButton()" type="submit">Delete Post</button>
  @csrf()
</form>


<script>  
    function checkButton() {    
         
                    var form = document.getElementById("form");
                    form.setAttribute('action', '{{route('Doc.destroy', [$doc])}}');
                    form.setAttribute('method', 'POST');     
        }         
</script> 
