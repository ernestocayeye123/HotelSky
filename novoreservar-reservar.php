<h1 class="text-center display-4">Nova Reserva</h1>


<form action="?page=salvarreservar" method="POST">

<input type="hidden" name="acaoa" value="cadastrarreservar">

<div class="mb-3"> 
<input type="text" placeholder="Digite o Nome" maxlength="30" name="nomeCliente" class="form-control" required>
</div>

<div class="mb-3"> 
    <input type="text" placeholder="Contacto" maxlength="9" name="contacto" class="form-control" required>
</div>

<div class="mb-3">
<input type="text" placeholder="Nome do Quarto" maxlength="30" name="nome" class="form-control" value="<?php $nomQ=$_GET['nomQ']; print $nomQ; ?>" readonly>
</div>

<div class="mb-3">
<input type="text" placeholder="Descrição do Quarto" maxlength="30" name="descricao" class="form-control" value="<?php $descricaoo=$_GET['descricaoo']; print $descricaoo; ?>" readonly>
</div>

<div class="mb-3">
<input type="text" placeholder="Preço de Uma Noite" maxlength="30" name="preco_uma_noite" class="form-control" value="<?php $precoumanoite=$_GET['precoumanoite']; print $precoumanoite; ?>" readonly>
</div>

<div class="mb-3">
<input type="text" placeholder="Preço de 1 Dia" maxlength="30" name="preco_um_dia" class="form-control" value="<?php $precoumdia=$_GET['precoumdia']; print $precoumdia; ?>" readonly>
</div>

<div class="mb-3"> 
<label>Data Actual</label> 
<input type="date" maxlength="12" name="datareser" class="form-control" min="2023-07-04"  max="2023-07-10" required>
</div>

<div class="mb-3"> 
<label>Data de Entrada</label> 
<input type="date" maxlength="12" name="dataentrada" class="form-control" min="2023-07-04"  max="2023-07-30" required>
</div>

<div class="mb-3"> 
<label>Data de Saída</label> 
<input type="date" maxlength="12" name="datasaída" class="form-control" min="2023-07-04" required>
</div>

<div class="mb-3 as"> 
<button type="submit" class="btn btn-danger form-control">Reservar Cliente</button>
</div>

<style>.as{margin-left: 20px;}</style>
</form>