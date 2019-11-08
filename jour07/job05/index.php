<?php
session_start();
if(!isset($_SESSION['joueur']))
{
    $_SESSION['joueur'] = 1;
}
 
 if(isset($_POST['fin'] ))
 {
     unset($_POST);
     session_destroy();
}
if(!isset($_SESSION['grille']))
{
  $_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);
}
    for($i = 1; $i <= 9; $i++){
        if(isset($_POST['click'.$i]) && $_POST['click'.$i] == $i)
        {
            if ($_SESSION['joueur'] == 1){
            $_SESSION['grille'][$i] = "O <input type='hidden' name='click".$i."' value='O'/>";
            } else{
            $_SESSION['grille'][$i] = "X <input type='hidden' name='click".$i."'' value='X'/>";
            }
        }else if(isset($_POST['click'.$i]) && $_POST['click'.$i] == 'O'){
            $_SESSION['grille'][$i] = "O <input type='hidden' name='click".$i."' value='O'/>";
        }else if(isset($_POST['click'.$i]) && $_POST['click'.$i] == 'X'){
            $_SESSION['grille'][$i] = "X <input type='hidden' name='click".$i."' value='X'/>";
 
        }else{
            $_SESSION['grille'][$i] = "<input name='click".$i."' type='submit' value='".$i."'/>";
        }
    }
     
    if($_SESSION['joueur'] == 1)
    {
        $_SESSION['joueur'] = 2;
    }else{
        $_SESSION['joueur'] = 1;
    }
 
?>


<html>
    <head>
        <meta charset="utf-8" />
        <title>Morpion</title>
    </head>
    <body>

<p id="player">Le joueur <?php echo $_SESSION['joueur']; ?> doit jouer</p>
       <form method='post'>
        <table border>
                <tr>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][1]); ?> </td>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][2]); ?> </td>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][3]); ?> </td>
                </tr>
                <tr>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][4]); ?> </td>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][5]); ?> </td>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][6]); ?> </td>
                </tr>
                <tr>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][7]); ?> </td>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][8]); ?> </td>
                    <td width=100 align=center> <?php echo($_SESSION['grille'][9]); ?> </td>
                </tr>
        </table>
        </form>
        <form method='post'>
            <input type="submit" name="fin" value="reset">
        </form>
    </body>
</html>