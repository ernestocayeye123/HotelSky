<h1 class="text-center display-4">Editar Quarto</h1>

<?php

$sql="SELECT * FROM quarto WHERE codigoQuarto=".$_REQUEST["codigoQuarto"];
$res=$conn->query($sql);
$row=$res->fetch_object();

?>

<form action="?page=salvarquarto" method="POST">

<input type="hidden" name="acaoquarto" value="editar">
<input type="hidden" name="codigoQuarto" value="<?php print $row->codigoQuarto; ?>">

<div class="mb-3"> 
<input type="text" placeholder="Nome do Novo Quarto" maxlength="30" name="nome" class="form-control" required value="<?php print $row->nome; ?>">
</div>

<div class="mb-3"> 
<input type="text" placeholder="Descrição do Novo Quarto" maxlength="50" name="descricao" class="form-control" required value="<?php print $row->descricao; ?>">
</div>

<div class="mb-3"> 
<input type="text" placeholder="Preço de Uma Noite" maxlength="30" name="preco_uma_noite" class="form-control" required value="<?php print $row->preco_uma_noite; ?>">
</div>

<div class="mb-3"> 
<input type="text" placeholder="preco de Um Dia" maxlength="30" name="preco_um_dia" class="form-control" required value="<?php print $row->preco_um_dia; ?>">
</div>

<div class="mb-3 as"> 
<button type="submit" class="btn btn-danger form-control">Editar Quarto</button>
</div>

<style>.as{margin-left: 20px;}</style>

</form>