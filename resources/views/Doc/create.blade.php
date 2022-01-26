

<form action="/dashboard/store" method="POST"></br>
@csrf
<h1>upload your document</h1></br>
<div>
  <x-label for="subject" :value="__('Choose a subject:')" />
    <select id="subject" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="subject" :value="old('subject')" required autofocus>
      <option value="English">English</option>
      <option value="Arabic">Arabic</option>
      <option value="Isalmic Education">Isalmic Education</option>
      <option value="History">History</option>
      <option value="Science">Science</option>
      <option value="Art">Art</option>
      <option value="Sport">Sport</option>
      <option value="Science">Science</option>
      <option value="Mathematics">Mathematics</option>
      <select></br></br>
</div>
<div>
  <x-label for="grade" :value="__('Choose a level:')" />

    <select id="grade" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="grade" :value="old('grade')" required autofocus>
      <option value="five">five</option>
      <option value="six">six</option>
      <option value="seven">seven</option>
      <option value="eight">eight</option>
      <option value="nine">nine</option>
      <option value="ten">ten</option>
      <option value="eleven">eleven</option>
      <option value="twelve">twelve</option>
    <select>
</div>

  <label for="title">title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="title">Description:</label><br>
  <textarea rows="4" cols="50" name="Desc"></textarea></br>
  <div class="form-group">
<input type="submit" value="Submit">

</form>

