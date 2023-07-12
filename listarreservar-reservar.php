<h1 class="text-center display-4">Listar Reservas</h1>
<?php

$sql="SELECT rs.codigoReserva, rs.datareser, rs.dataentrada, rs.datasaída, qua.codigoQuarto, qua.nome, qua.descricao,
qua.preco_uma_noite, qua.preco_um_dia, cl.codigoClient, cl.nomeCliente, cl.contacto FROM reserva rs LEFT JOIN quarto
AS qua ON qua.codigoQuarto=rs.codigoReserva LEFT JOIN cliente AS cl ON cl.codigoClient=rs.codigoReserva ORDER BY
rs.codigoReserva";

$res=$conn->query($sql);
$qtd=$res->num_rows;

if($qtd>0){
    print "<table class='table table-hover table-striped table-bordered'>";

    print"<tr>";

print "<th>Código</th>";
print "<th>Nome</th>";
print "<th>Contacto</th>";

print "<th>Nome do Quarto</th>";
print "<th>Descrição</th>";
print "<th>Preço Uma Noite</th>";
print "<th>Preço 1 Dia</th>";

print "<th>Data Act</th>";
print "<th>Data de Entrada</th>";
print "<th>Data de Saída</th>";

print "<th>Ações:</th>";

print"</tr>";

while($row=$res->fetch_object()){
    print"<tr>";

print "<td>".$row->codigoClient."</td>";
print "<td>".$row->nomeCliente."</td>";
print "<td>".$row->contacto."</td>";

print "<td>".$row->nome."</td>";
print "<td>".$row->descricao."</td>";
print "<td>".$row->preco_uma_noite."</td>";
print "<td>".$row->preco_um_dia."</td>";

print "<td>".$row->datareser."</td>";
print "<td>".$row->dataentrada."</td>";
print "<td>".$row->datasaída."</td>";

print "<td>

<button onclick=\"location.href='?page=editarreservar&codigoClient=".$row->codigoClient."&codigoQuarto=".$row->codigoQuarto."&codigoReserva=".$row->codigoReserva."';\" class='btn btn-success'>Editar</button>
<button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvarreservar&acaoa=excluirreservar&codigoClient=".$row->codigoClient."&codigoQuarto=".$row->codigoQuarto."&codigoReserva=".$row->codigoReserva."';}else{false;}\" class='btn btn-danger'>Excluir</button>


</td>";

print"</tr>";

}
print "</table>";
}else{

print"<p class='alert alert-danger'>Não foi possível encontrar nenhuma reserva!</p>";

}

?>