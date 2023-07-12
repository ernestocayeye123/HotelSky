<h1 class="text-center display-4">Listar Quartos</h1>
<?php

$sql="SELECT * FROM quarto";
$res=$conn->query($sql);
$qtd=$res->num_rows;

if($qtd>0){
    print "<table class='table table-hover table-striped table-bordered'>";

    print"<tr>";

print "<th>Código do Quarto</th>";
print "<th>Nome do Quarto</th>";
print "<th>Descrição do Quarto</th>";
print "<th>Preço de Uma Noite</th>";
print "<th>Preço de Um Dia</th>";
print "<th>Ações do ADM</th>";

print"</tr>";

while($row=$res->fetch_object()){
    print"<tr>";

print "<td>".$row->codigoQuarto."</td>";
print "<td>".$row->nome."</td>";
print "<td>".$row->descricao."</td>";
print "<td>".$row->preco_uma_noite."</td>";
print "<td>".$row->preco_um_dia."</td>";

print "<td>

<button onclick=\"location.href='?page=editarquarto&codigoQuarto=".$row->codigoQuarto."';\" class='btn btn-success'>Editar</button>
<button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvarquarto&acaoquarto=excluir&codigoQuarto=".$row->codigoQuarto."';}else{false;}\" class='btn btn-danger'>Excluir</button>


</td>";

print"</tr>";

}
print "</table>";
}else{

print"<p class='alert alert-danger'>Não encontrou nenhum Quarto listado!</p>";

}

?>

<div class="mb-3 as"> 
<a  class="btn btn-secondary form-control" href="?page=cadastroquarto">Voltar</a>
</div>

<style>.as{margin-left: 20px;}</style>
