<html>
<head>
<title>Generare parola aleatoriu</title>
<style type="text/css">
<!--
* {
    margin:0;
    padding:0;
}
#generate 
{
    border:none;
    background:#333;
    color:#ccc;
}
#table
{
    margin:0 auto;
}
-->
</style>
</head>
<body>
<form action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>" method="post">
<table cellspacing="5" border="0" cellpadding="0" id="table">
    <tr>
        <td>
            <strong>Numarul de caractere: </strong>
        </td>
        <td>
            <select name="numar_caractere" style=" width:50px;">
            <?php
            #numarul de caractere:minim 5 maxim 20
            $numar = range(5,20);
            foreach ($numar as $item)
             {
                echo '<option>'.$item.'</option>';
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <strong>Parola: </strong>
        </td>
        <td>
        <?php
        //scriptul se va executa doar daca se va apasa pe butonul submit
        if (isset($_POST['generate']))
         {
            //creez array`ul ce contine caracterele ce vor alcatui parola
            $caractere = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
                               'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
                               'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
                               'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
                               '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',  
                               '!', '@', '#', '$', '%', '^', '{', '*', '(', ']', 
                               '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',  
                               '!', '@', '#', '$', '%', '^', '{', '*', '(', ']');

            //generez aleatoriu parola
            $i = 0;
            while ($i < $_POST['numar_caractere']) {
                echo $caractere[rand(0,(count($caractere) - 1))];
                $i++;
            }
        }
        ?>
        </td>
    </tr>

    <tr>
        <td>
            &nbsp;
        </td>

        <td>
            <input name="generate" type="submit" id="generate" value="generate" />
        </td>
    </tr>
</table>
</form>
</body>
</html>
