<?php

         if ($query == /mysql_query($sql)){
                echo "Sucesso";                                            
            } else {
                echo "Erro";    
               mysql_error();
            }
            } else { //erro na seleção do banco de dados
    echo "Erro seleção";
    }
    }else { //erro na conexão com a servidor
    echo "erro conexão";    
    }
    ?>

<?php
    $local_server="localhost";
    $usuario_server = "root";
    $senha_server = "root";
    $banco_dados = "span";
    if ($conecta === \mysql_connect($local_server, $usuario_server, $senha_server)){
    if ($db === \mysql_select_db($banco_dados, $conecta)){
    }else { //erro na seleção do banco de dados
    echo "Erro seleção";
    }
    }else { //erro na conexão com a servidor
    echo "erro conexão";    
    }
?>