<form action="" method="POST">
<h2>Pedidos</h2>
<h3>Selecione o endereço</h3> 
<?php foreach ($enderecos as $endereco): ?>  
 Rua: <?=$endereco['logradouro']?><br>
 Número:<?=$endereco['numero']?><br>
 Complemento:<?=$endereco['complemento']?><br>
 Bairro:<?=$endereco['bairro']?><br>
 Cidade: <?=$endereco['cidade']?><br>
 Cep:<?=$endereco['cep']?><br>			
<?php endforeach; ?>

<h3>Selecione cupom</h3> 
<?php foreach ($enderecos as $endereco): ?>  

<?php endforeach; ?>

<h3>Selecione a forma de pagamento</h3> 
<?php foreach ($formasdepagamento as $formadepagamento): ?>  

<?php endforeach; ?>

<h3>Produtos</h3>
<?php  foreach ($produto as $produto): ?>
<p><a href="./produto/ver/<?= $produto["id_produto"] ?>"> <?= $produto["nome"] ?></a><span class="price">$<?= $prod["preco"] ?></span></p>
<?php endforeach; ?>

<p>Total <span class="price" style="color:black"><b>R$ <?= $total ?></b></span></p>

<br>
<button>Finalizar</button>
</form>
