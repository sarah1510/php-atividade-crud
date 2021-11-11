<?php
    session_start();

    require('../database/conexao.php');

    $sql = "SELECT * FROM tbl_pessoa";

    $resultado = mysqli_query($conexao, $sql);

    include('../componentes/header.php');
?>

<div class="container">

    <br/>
    
    <table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Celular</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
            <tr>
                <!-- <th>1</th>
                <th>TESTE DE NOME</th>
                <th>TESTE DE SOBRENOME</th>
                <th>TESTE DE EMAIL</th>
                <th>TESTE DE CELULAR</th> -->

                <?php 

                   
                
                ?>
                <th>

                    <a href="editar.php?cod_pessoa=<?php echo $dados["cod_pessoa"]?>">EDITAR</a>
                    <a href="acoes.php?cod_pessoa=<?php echo $dados["cod_pessoa"].'&acao=delete'?>" >EXCLUIR</a>

                    <!-- <button class="btn btn-warning">Editar</button> -->

                    <!-- <form action="" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="">
                        <button class="btn btn-danger">Excluir</button>
                    </form> -->
                    
                </th>
            </tr>
    </tbody>

    </table>

</div>

<?php
    include('../componentes/footer.php');
?>