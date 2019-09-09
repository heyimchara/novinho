<?php
?>
<div class="corpinho">
<div class="caixinha">
<h2>Ver detalhes do produto</h2>
        <p> Id: <?=$produto['cod_produto']?></p>
        <p> Categoria: <?=$produto['cod_categoria']?></p>
        <p> Preço: <?=$produto['preco']?></p>
        <p> Nome: <?=$produto['nome']?></p>        
        <p> Descrição: <?=$produto['descricao']?></p>        
        <p> Imagem: <?=$produto['imagem']?></p>   
        <p> estoque_minimo: <?=$produto['estoque_minimo']?></p>
        <p> estoque_maximo: <?=$produto['estoque_maximo']?></p>
              
 </div>
 </div>

<div class="subtopo">
            <h1 class="titulo"><?=$produto['nome']?></h1>
          </div>

<br>
<div class="row">
  <div class="columns medium-2">
    <img src="imagens/prin_pijama.jpg">
    <br>
    <img src="imagens/pijama2.jpg">
    <br>
    <img src="imagens/pijama3.jpg">
    <br>
  </div>
  <div class="columns medium-5">
     <img src="imagens/pijama.jpg" width="200px" height="200px">
  </div>

   <div class="columns medium-5">
     <h4><?=$produto['nome']?></h4>
    <p><?php $preco ?></p>
    <p>1x de <?php $preco ?> sem juros no cartão</p>
    <p>Tamanho:</p>
<select name="select">
  <option value="valor1" selected>Escolha o tamanho</option> 
  <option value="valor2" >P</option>
  <option value="valor3">M</option>
   <option value="valor3">G</option>
    <option value="valor3">GG</option>
</select>
<br><br>
<p style="text-align:center;"><button class="hollow button" style="border: 1px solid #CC2EFA;color:#CC2EFA" ><a href="./carrinho/adicionar/<?=$produto['cod_produto']?>">Adicionar ao carrinho</a></button></p>

   </div>
</div>
<br>
<div class="row">
<h3>Detalhes do produto</h3>
<ul>
  <li><?=$produto['descricao']?></li>
  <li>Material:Poliéster</li>
  <li>Composição:67% poliéster e 33% viscose</li>
  <li>Cor:Rosa</li>
  <li>Lavagem:Lavar a mão</li>
</ul>
</div>

<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>