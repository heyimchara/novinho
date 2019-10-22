<?php

// usar procedure + mudar banco
function salvaPedidos($cod_cliente, $cod_formadepagamento, $idEndereco){
    $comando = "INSERT INTO pedido (cod_cliente, cod_formadepagamento, idEndereco, datacompra)"
            . "VALUES ('$cod_cliente', '$cod_formadepagamento', '$idEndereco', 'CURDATE()')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}

function listarPedidos(){
   $sql =  "SELECT*FROM pedido";
   $resultado = mysqli_query($conexao = conn(), $comando);
   $pedido = array();
   while ($linha = mysqli_fetch_assoc($resultado)){
    $pedido[] = $linha;   
   }
   return $pedido;
}

foreach ($produtos as $produto):  

endforeach; 

