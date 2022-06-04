<form action="" method= "post">
    <input name="n1" type="text" placeholder= "numero1"> <br/>


    <input name= "n2" type= "text"placeholder="numero2"> <br/>

    <button name="soma">somar </button>
    <button name= "subtracao">subtrair </button>
    <button name="divisao">dividir </button>
    <button name= "multiplicacao">multiplicar</button>
</form>

<?php
    
    if (isset($_POST['subtracao'])){
            echo $_POST["n1"] - $_POST["n2"];
    }
    if (isset($_POST['multiplicacao'])){
            echo $_POST["n1"] * $_POST["n2"];
    }  
    if (isset($_POST['divisao'])){
            echo $_POST["n1"] / $_POST["n2"];
    }
    if(isset($_POST['soma'])){                                 // Comando Se existir requisição
    echo $_POST["n1"] + $_POST["n2"];
    }

        //var_dump($_POST);           // Var dump mostra tudo que está dentro de um elemento específico
    
?>