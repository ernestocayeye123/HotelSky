<h1 class="text-center display-4">Editar Usuário</h1>

<?php

$sql="SELECT * FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];
$res=$conn->query($sql);
$row=$res->fetch_object();

?>

<form action="?page=salvar" method="POST">

<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">

<div class="mb-3"> 
<input type="text" placeholder="Editar Nome do Usuário" maxlength="30" name="usuarioBD" class="form-control" value="<?php print $row->usuarioBD; ?>" required>
</div>

<div class="mb-3"> 
    <input type="password" placeholder="*Nova Senha do Usuário" maxlength="32" name="senha" class="form-control" required>
</div>

<div class="mb-3"> 
<button type="submit" class="btn btn-danger">Editar Usuário</button>
</div>
</form>