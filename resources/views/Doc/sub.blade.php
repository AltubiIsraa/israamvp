
<!DOCTYPE html>
<html>    
<body>
<h1>upload your document</h1>
<p>Choose subject:</p>
<form action="/action_page.php" name="subject">
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">Arabic Language</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">Islamic Education</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">History</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">English Language</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">Science</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">Mathematics</label><br>
</form> </br>
<form action="/action_page.php" name="level">
  <label for="cars">Choose a Grade:</label></br>
  <select id="cars" name="cars">
    <option value="volvo">five</option>
    <option value="saab">six</option>
    <option value="fiat">seven</option>
    <option value="audi">eight</option>
    <option value="audi">nine</option>
    <option value="audi">ten</option>
    <option value="audi">eleven</option>
    <option value="audi">twelve</option>

</select>
</form></br>
<form action="/action_page.php">
  <label for="title">title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="title">Description:</label><br>
  <textarea rows="4" cols="50" name="desc" form="usrform">
Enter text here...</textarea></br>
<!-- </form></br>
<form action="/action_page.php">
  <label for="myfile">Select files:</label></br>
  <input type="file" id="myfile" name="myfile" multiple><br><br>
</form> -->

<a href="{{ url('/dashboard/subject') }}">
  <input type="submit" value="Submit">
</a>


</body>
</html>

