<select>
    <option selected> -- Selecione o Ano</option>
    <option>1900</option>
    <?php
        $ano = 2022;

        while ($ano >= 1900){
            echo "<option>{$ano}</option>";
            $ano--;
        }
    ?>
</select>
