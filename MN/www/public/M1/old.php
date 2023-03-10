<header>
   <?php
    //include('nav.html'); 
    ?>
   </header>
   <h1>PHP - TEST</h1>
   <form action="eval.php" method="post">
      <label>Name:</label>
      <input type="text" name="name">
      <fieldset>
         <legend>MatteTal</legend>
         <label>2x5 = </label>
         <input type="text" name="tal1">
         <br>
         <label>55+60 = </label>
         <input type="text" name="tal2">
         <br>
         <label>21/3 = </label>
         <input type="text" name="tal3">
         <br>
         <label>2^2 =</label>
         <input type="text" name="tal4">
         <br>
         <label>2^3 =</label>
         <input type="text" name="tal5">
        <br>
        <input type="submit" value="Correct">
    </fieldset>  
</form>

<form action="convert.php" method="post">
      <fieldset>
         <legend>
            <h1>Currency Converter</h1>   
         </legend>
         <label>Dollar to SEK</label>
         <input type="text" name="dollar">
         <br>
         <input type="submit" value="Convert">
      </fieldset>
   </form>  

   <form action="info.php" method="post">
      <fieldset>
         <legend>Write your name and age</legend>
         <label>Name: </label>
         <input type="text" name="name">
         <label>Surname: </label>
         <input type="text" name="surname">
         <br>
         <label>Age: </label>
         <input type="text" name="age">
         <br>
         <input type="submit" value="Register">
      </fieldset>
   </form>

   <form action="calculate.php" method="post">
   <fieldset>
       <legend>Kalkylator</legend>
       <input type="number" name="n1"> +
       <input type="number" name="n2">
       <br>
       <input type="submit" value="Beräkna">
   </fieldset>
</form>

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
            <input type="submit" value="Rätta">
         </fieldset>  
      </form>