<?php // input_form.php
echo <<<_END
 <html>
 <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <title>Input Form</title>
 </head>
 <body>
 <form method="post" action="input_form.php">
 What is your name?
 <input type="text" name="nickName">
 <input type="text" name="age">
 <input type="submit">
 </form>
 </body>
 </html>
_END;

// check for form post
if (!empty($_POST['nickName'])){
    echo $_POST['nickName'];
    echo $_POST['age'];
}
?>