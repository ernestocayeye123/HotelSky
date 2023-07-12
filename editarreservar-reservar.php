<h1 class="text-center display-4">Editar Reservas</h1>

<?php

$sql="SELECT * FROM cliente WHERE codigoClient=".$_REQUEST["codigoClient"];
$res=$conn->query($sql);
$row=$res->fetch_object();

$sql1="SELECT * FROM quarto WHERE codigoQuarto=".$_REQUEST["codigoQuarto"];
$res1=$conn->query($sql1);
$row1=$res1->fetch_object();

$sql2="SELECT * FROM reserva WHERE codigoReserva=".$_REQUEST["codigoReserva"];
$res2=$conn->query($sql2);
$row2=$res2->fetch_object();
?>



<form action="?page=salvarreservar" method="POST">

<input type="hidden" name="acaoa" value="editarreservar">
<input type="hidden" name="codigoClient" value="<?php print $row->codigoClient; ?>">
<input type="hidden" name="codigoQuarto" value="<?php print $row1->codigoQuarto; ?>">
<input type="hidden" name="codigoReservav" value="<?php print $row2->codigoReserva; ?>">

<div class="mb-3"> 
<input type="text" placeholder="Digite o Nome" maxlength="30" name="nomeCliente" class="form-control" value="<?php print $row->nomeCliente; ?>" required>
</div>

<div class="mb-3"> 
    <input type="text" placeholder="Contacto" maxlength="9" name="contacto" class="form-control" value="<?php print $row->contacto; ?>" required>
</div>

<div class="mb-3">
<input type="text" placeholder="Nome do Quarto" maxlength="30" name="nome" class="form-control" value="<?php print $row1->nome; ?>" readonly>
</div>

<div class="mb-3">
<input type="text" placeholder="Descrição do Quarto" maxlength="30" name="descricao" class="form-control" value="<?php print $row1->descricao; ?>" readonly>
</div>

<div class="mb-3">
<input type="text" placeholder="Preço de Uma Noite" maxlength="30" name="preco_uma_noite" class="form-control" value="<?php print $row1->preco_uma_noite; ?>" readonly>
</div>

<div class="mb-3">
<input type="text" placeholder="Preço de 1 Dia" maxlength="30" name="preco_um_dia" class="form-control" value="<?php print $row1->preco_um_dia; ?>" readonly>
</div>

<div class="mb-3"> 
<label>Data Actual</label> 
<input type="date" maxlength="12" name="datareser" class="form-control" min="2023-07-04"  max="2023-07-10" value="<?php print $row2->datareser; ?>" required>
</div>

<div class="mb-3"> 
<label>Data de Entrada</label> 
<input type="date" maxlength="12" name="dataentrada" class="form-control" min="2023-07-04"  max="2023-07-30" value="<?php print $row2->dataentrada; ?>" required>
</div>

<div class="mb-3"> 
<label>Data de Saída</label> 
<input type="date" maxlength="12" name="datasaída" class="form-control" min="2023-07-04" value="<?php print $row2->datasaída; ?>" required>
</div>

<div class="mb-3 as"> 
<button type="submit" class="btn btn-danger form-control">Reservar Cliente</button>
</div>

<button type="submit" class="btn btn-danger">Editar Reserva</button>
<style>.as{margin-left: 20px;}</style>
</div>
</form>