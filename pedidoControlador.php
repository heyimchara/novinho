<?php

require_once 'modelo/pedidoModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formadepagamentoModelo.php';

function salvarPedido(){
    $cod_cliente = acessoPegarUsuarioLogado();
    
 if(ehPost()){
       $id_cupom = $_POST["id_cupom"];
       $desconto = pegarCupomPorId($id_cupom);
       $desconto = $desconto['desconto']/100;
       echo $desconto;
       $total = 0;  
       
       $produtos = $_SESSION["carrinho"];
       $cod_formadepagamento = $_POST["cod_formadepagamento"];
       $idEndereco = $_POST["idEndereco"];
       
       
       $mensagem = salvaPedidos($cod_cliente, $cod_formadepagamento, $idEndereco);
       echo $mensagem;
       redirecionar('pedido/listarPedidos');
}else{ 
    
   $dados = array();
   $dados["produtos"] = $produtos;
   $dados['enderecos'] = pegarEnderecosPorUsuario($cod_cliente);
   $dados['formadepagamento'] = pegarTodasFormasDePagamento();
 
    exibir('pedido/adicionar', $dados);
    
}
}