<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table >
        <tr>
            <th><?php $_POST["button0"]  ?></th>
        </tr>
    </table>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <input type="button" name="button0" value="0" onclick="submitFunc()" ></input>
        <input type="button" name="button1" value="1" ></input>
        <input type="button" name="button2" value="2" ></input>
        <input type="button" name="button_add" value="+" ></input><br/><br/>
        <input type="button" name="button3" value="3" ></input>
        <input type="button" name="button4" value="4" ></input>
        <input type="button" name="button5" value="5" ></input>
        <input type="button" name="button_sub" value="-" ></input><br/><br/>
        <input type="button" name="button6" value="6" ></input>
        <input type="button" name="button7" value="7" ></input>
        <input type="button" name="button8" value="8" ></input>
        <input type="button" name="button_mult" value="x" ></input><br/><br/>
        <div style="text-indent: 25px;"><input  type="button" name="button9" value="9" ></input>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="button_div" value="/" ></input></div><br/>
        <input style="text-align: center; width: 94px;" type="submit" name="equals" value="=" ></input>
    
    </form>
    
</body>
</html>