<?php
?>

<h2>Ver detalhes do produto</h2>
        <p> Id: <?=$produto['cod_produto']?></p>
        <p> Categoria: <?=$produto['cod_categoria']?></p>
        <p> Preço: <?=$produto['preco']?></p>
        <p> Nome: <?=$produto['nome']?></p>        
        <p> Descrição: <?=$produto['descricao']?></p>        
        <p> Imagem: <?=$produto['imagem']?></p>   
        <p> estoque_minimo: <?=$produto['estoque_minimo']?></p>
        <p> estoque_maximo: <?=$produto['estoque_maximo']?></p>
              
<a href="./produto/comprar/<?=$produto['cod_produto']?>">Adicionar ao carrinho</a>
