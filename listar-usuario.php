<h1 class="text-center display-4">Listar Usuáio</h1>
<?php

$sql="SELECT * FROM usuario";
$res=$conn->query($sql);
$qtd=$res->num_rows;

if($qtd>0){
    print "<table class='table table-hover table-striped table-bordered'>";

    print"<tr>";

print "<th>Código do Usuário</th>";
print "<th>Nome do Usuário</th>";
print "<th>Senha do Usuário</th>";
print "<th>Ações do ADM</th>";

print"</tr>";

while($row=$res->fetch_object()){
    print"<tr>";

print "<td>".$row->id_usuario."</td>";
print "<td>".$row->usuarioBD."</td>";
print "<td>".$row->senha."</td>";

print "<td>

<button onclick=\"location.href='?page=editar&id_usuario=".$row->id_usuario."';\" class='btn btn-success'>Editar</button>
<button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>


</td>";

print"</tr>";

}
print "</table>";
}else{

print"<p class='alert alert-danger'>Não encontrou nenhum usuário!</p>";

}

?>

<div class="mb-3 as"> 
<a  class="btn btn-secondary form-control" href="?page=novo">Voltar</a>
</div>

<style>.as{margin-left: 20px;}</style>
