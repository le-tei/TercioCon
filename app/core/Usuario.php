<?php

include 'Banco.php';

class usuario {

    function salvarinformacoes($email, $nome, $curso) {
        $obj = new banco();
        $sql = "INSERT INTO usuarios (email, nome, curso) VALUES ('$email', '$nome', '$curso')";
        $obj->insert($sql);
    }
}

?>
