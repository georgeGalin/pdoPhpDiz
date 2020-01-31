<!DOCTYPE html>
<html>
    <body>
        <h2>Inserimento nuove parole e<br><h2>
        <h2>Consulta dizionario<br><h2>
        
        <br><br>
        <form method="POST" action="index.php">
            parola<br>
            <input type="text" name="parola" id="parola"><br>
            sinonimo<br>
            <input type="text" name="sinonimo" id="sinonimo"><br>
            contrario<br>
            <input type="text" name="contrario" id="contrario"><br><br>
            <input type="submit" value="invio" name="btn1">
            <input type="submit" value="consulta" name="btn2">


        </form>
    </body>
    <?php
        if(isset($_POST['btn1']))
        {
            include("apriConnessione.php");
  
            $parola=$_POST['parola'];
            $sinonimo=$_POST['sinonimo'];
            $contrario=$_POST['contrario'];
  
            $connessione->query("INSERT INTO $pdb (parola,sinonimo,contrario) values ('$parola','$sinonimo','$contrario')");
  
            echo 'la nuova parola è stata inserita';
            include("chiudiConnessione.php");
            
        }


        else if(isset($_POST['btn2']))
        {
            include("apriConnessione.php");
            $parola = $_POST['parola'];
           // echo $parola;
            $risultato = mysqli_query($connessione,"SELECT * FROM $pdb WHERE parola = '$parola' ");
            while($consulta = mysqli_fetch_array($risultato))
            {
    
                echo $consulta['parola'];
                echo '<br>';
                echo $consulta['sinonimo'];
                echo '<br>';
                echo $consulta['contrario'];
                echo '<br>';
                
            }


            include("chiudiConnessione.php");
        }
       
    ?>
</html>