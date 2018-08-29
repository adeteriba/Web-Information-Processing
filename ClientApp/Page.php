<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="Javascript.js"></script>
    <link rel="stylesheet" type="text/css" href="Style1.css">
  </head>

  <body>
    <div align="center">
      <h2>Create</h2>
      <form id="create">
        Name:<br>
        <input type="text" name="name"><br> URL:
        <br>
        <input type="text" name="url"><br> Description:
        <br>
        <input type="text" name="theDesc"><br>
            <input type="submit" name="submit" value="Create">
      </form><br>

      <h2> Retrieve</h2>
      <form id="retrieve">
        ID: <br>
        <input type="text" name="id"><br>
        <input type="submit" name="submit" value="Retrieve By ID"><br> Name: <br>
        <input type="text" name="retname"><br>
        <input type="submit" name="submit" value="Retrieve By Name">
      </form> <br>


      <h2>Update</h2>
      <form id="update">
        ID:<br>
        <input type="text" name="id"><br> Name: <br>
        <input type="text" name="name"><br> URL:
        <br>
        <input type="text" name="url"><br> Description:
        <br>
        <input type="text" name="theDesc"><br>
        <input type="submit" name="submit" value="Update">
      </form>

      <h2>Delete</h2>
      <form id="delete">
        ID: <br>
        <input type="text" name="id"><br>
        <input type="submit" name="submit" value="Delete">
      </form>
    </div>
  </body>

</html>
