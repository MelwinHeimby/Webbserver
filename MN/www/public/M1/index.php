<!doctype html>
<html>
   <head lang="sv">
    <meta charset="utf-8">
    <title>Transform Currency</title>
   </head>
   <body>
      <h1>Quiz</h1>
      <form action="quiz.php" method="post">
         <label>Namn:</label>
         <input type="text" name="name">
         <fieldset>
            <legend>Quiz</legend>
            <label>Sveriges nationalrätt: </label>
            <input type="text" name="svar1">
            <br>
            <label>Min favoritfärg: </label>
            <input type="text" name="svar2">
            <br>
            <label>21/3 = </label>
            <input type="text" name="svar3">
            <br>
            <label>2^2 =</label>
            <input type="text" name="svar4">
            <br>
            <label>Can be divided by 2</label>
            <br>
            <label>4: </label>
            <input type="checkbox" name="svar5" value="1">
            <label>6: </label>
            <input type="checkbox" name="svar6" value="1">
            <br>
            <input type="submit" value="Rätta">
         </fieldset>  
      </form>
   </body>
</html>