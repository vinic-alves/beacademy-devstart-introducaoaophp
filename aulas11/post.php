<form action="" method="post">
    <input type="text" nome="" placeholder="Digite aqui">

    <button>Enviar</button>

</form>
<?php
    if($_POST){
        echo $_POST['nome'];
    }
?>