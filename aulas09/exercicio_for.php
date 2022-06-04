<select>
    <option selected> -- Selecione o Ano</option>
    <option>1900</option>
    <?php
        for($ano = 2022; $ano >= 1900; $ano++){
            echo "<option>{$ano}</option>";
        }
        
    ?>
</select>