<?php

$bd = new SQLite3("db/equipamentos.db");
$sql = "SELECT * FROM equipamentos";
$equipamentos = $bd->query($sql);

$bd1 = new SQLite3("db/comentarios.db");
$sql1 = "SELECT * FROM comentarios";
$comentarios = $bd1->query($sql1);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script\taiwild.js"></script>
    <script src="../script\tailwind.config.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="import" href="telaModal.php">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>

<body class="bg-[#F6F5F9]">
    <div class="p-2 h-20 bg-[#CCE2E2] flex justify-between">
        <img src="../img/techman.png" alt="logo">
        <div class="flex m-2 flex items-center">
            <b class="text-xl m-8 text-[#35797d]" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer;">Novo equipamento</b>
            <img class="flex w-8 h-8" src="../img/logout_sair.png" style="cursor:pointer;" alt="sair">
        </div>
    </div>
    <!-- Equipamentos -->
    <section>
        <?php
         while($equipamento = $equipamentos->fetchArray()):
            ?>
        <div class="container">
            <img class="logo1" src="<?php echo $equipamento["poster"] ?>" alt="">
            <a><?php echo $equipamento["titulo"] ?></a>
            <p><?php echo $equipamento["descricao"] ?></p>
            <img class="icon"  type="button" data-bs-toggle="modal" data-bs-target="#exampleModa2" src="../img/comentario.png" alt="comentar">
            <img class="icon" type="button" data-bs-toggle="modal" data-bs-target="#exampleModa3"  
            data-id-apagar="<?php echo $equipamento["id"]?>" src="../img/deletar.png" alt="deletar"
            >

            <hr style="margin-top: 100px;">
        </div>
        <?php endwhile ?>
    </section>

<div>
    <!-- MODEL NOVO EQUIPAMENTO -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg black">
            <div class="modal-content">
                <form action="view/cadastrar_equip.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title text-xl p-2 text-[#35797d]" id="exampleModalLabel">Cadastro de equipamento</h5>
                        <button style="color: #35797D;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="name">
                            <input name="titulo" type="text" placeholder="Nome" required>
                        </div>
                        <div class="img">
                            <input name="img" type="text" placeholder="Endereço da Imagem" required>
                        </div>
                        <div class="desc">
                            <textarea name="descricao" type="text"placeholder="Descrição" required ></textarea>
                        </div>
                        <div class="flex m-2">
                            <input name="checar" class="check" type="checkbox">
                            <p style="margin-left: 8px;">Ativo</p>
                        </div>
                        <div >
                           <button style="background-color: #35797D;border-radius: 10px;color: white;padding: 15px 32px;text-align: center;text-decoration: none;margin-top: 50px;font-size: 16px;" type="submit" class="button">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODEL COMENTARIO -->
    <div class ="coment">
        <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg black">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-xl p-2 text-[#35797d]" id="exampleModalLabel">Comentários</h5>
                            <button style="color: #35797D;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                <?php
                    while($comentario = $comentarios->fetchArray()):
                        ?>
                            <div class="desc">
                                <h1><?php echo $comentario["titulo_comentario"] ?></h1>
                                <p><?php echo $comentario["comentarios"] ?></p>
                                <hr style="margin-top: 20px;">
                            </div>
                            <?php endwhile ?>
                            <div >
                               <button data-bs-toggle="modal" data-bs-target="#exampleModa4" class="button">Adicionar comentário</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </class>


    <!-- MODEL ADICIONAR COMENTARIO -->
    <div class="modal fade" id="exampleModa4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg black">
            <div class="modal-content">
                <form action="view/cadastrar_comentario.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title text-xl p-2 text-[#35797d]" id="exampleModalLabel">Cadastro de equipamento</h5>
                        <button style="color: #35797D;" class="btn-clo  aria-label="Close"></button>
                    </div>
                    <div class="name">
                            <input name="titulo_comentario" type="text" placeholder="Cargo" required>
                        </div>
                        <div class="desc">
                            <textarea class="desc1" name="comentarios" type="text" placeholder="Comentarios" required></textarea>
                        </div>
                        <div >
                        <button style="background-color: #35797D;border-radius: 10px;color: white;padding: 15px 32px;text-align: center;text-decoration: none;margin-top: 50px;font-size: 16px;" type="submit" class="button">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- MODEL DELETAR -->
        <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg black">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-xl p-2 text-[#35797d]" id="exampleModalLabel">Exclusão de equipamento</h5>
                        <button style="color: #35797D;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p class="del_desc">Atenção! Tem certeza que deseja excluir o equipamento? Essa ação não poderá ser desfeita.</p>
                        </div>
                        <div >
                        <form id="confirmar-apagar">
                            <input type="hidden" name="id" value="">
                            <button style="background-color: red;border-radius: 10px;color: white;padding: 15px 32px;text-align: center;text-decoration: none;margin-top: 50px;font-size: 16px;" type="submit" form="confirmar-apagar" id="confirmar-apagar" class="btn-excluir button1">Excluir</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
<!-- Script apagar equipamento -->

<!-- <script>
    document.querySelectorAll(".btn-excluir").forEach(btn=>{
        btn.addEventListener("click", e=>{
            const id = btn.getAttribute("data-id")
            const requestConfig = { method: "DELETE", header: new Headers()}
            fetch(`/equipamentos/${id}`, requestConfig)
                .then(response => response.json())
                .then(response => {
                    if (response.success ==="ok") {
                        console.log("apagado com sucesso")
                    }
                    
                })
        });
    });
    
</script>  --> 


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
       

    const exampleModal = document.getElementById('exampleModa3')
    exampleModal.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget
      const recipient = button.getAttribute('data-id-apagar')
      /* const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalTitle.textContent = `New message to ${recipient}`
  modalBodyInput.value = recipient */

  $("#confirmar-apagar").submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'db/delete_table_equipamentos.php',
          type: 'POST',
          data: {
            'id': recipient
          },}).done(function(result){
            document.location.reload(false);
          }).fail(function(result){
            console.log(result)
            console.log("erro")
          })})
})
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html> 