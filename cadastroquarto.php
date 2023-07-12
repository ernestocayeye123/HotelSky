<h1 class="text-center display-4">Novo Quarto</h1>


<form action="?page=salvarquarto" method="POST">

<input type="hidden" name="acaoquarto" value="cadastrar">

<div class="mb-3"> 
<input type="text" placeholder="Nome do Novo Quarto" maxlength="30" name="nome" class="form-control" required>
</div>

<div class="mb-3"> 
<input type="text" placeholder="Descrição do Novo Quarto" maxlength="50" name="descricao" class="form-control" required>
</div>

<div class="mb-3"> 
<input type="text" placeholder="Preço de Uma Noite" maxlength="30" name="preco_uma_noite" class="form-control" required>
</div>

<div class="mb-3"> 
<input type="text" placeholder="preco de Um Dia" maxlength="30" name="preco_um_dia" class="form-control" required>
</div>

<div class="mb-3 as"> 
<button type="submit" class="btn btn-danger form-control">Cadastrar Quarto</button>
</div>

<div class="mb-3 as"> 
<a  class="btn btn-secondary form-control" href="?page=listarquarto">Listar Quartos</a>
</div>

<style>.as{margin-left: 20px;}</style>

</form>