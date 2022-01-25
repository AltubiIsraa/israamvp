

<form action="/docs/store" method="POST"></br>
@csrf
<h1>upload your document</h1></br>
<div>
  <x-label for="subject" :value="__('Choose a subject:')" />
    <select id="subject" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="subject" :value="old('subject')" required autofocus>
      <option value="English">English</option>
      <option value="Arabic">Arabic</option>
      <option value="English">Isalmic Education</option>
      <option value="Arabic">History</option>
      <option value="English">Science</option>
      <option value="Arabic">Art</option>
      <option value="English">Sport</option>
      <option value="Arabic">Science</option>
      <option value="Arabic">Mathematics</option>
      <select></br></br>
</div>
<div>
  <x-label for="grade" :value="__('Choose a level:')" />

    <select id="grade" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="grade" :value="old('grade')" required autofocus>
      <option value="five">five</option>
      <option value="six">six</option>
      <option value="five">seven</option>
      <option value="six">eight</option>
      <option value="five">nine</option>
      <option value="six">ten</option>
      <option value="five">eleven</option>
      <option value="six">twelve</option>
    <select>
</div>

  <label for="title">title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="title">Description:</label><br>
  <textarea rows="4" cols="50" name="Desc"></textarea></br>

<input type="submit" value="Submit">

</form>

