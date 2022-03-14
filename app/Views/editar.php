
<div class="row container">
    <div class="col s12">
        <h3 class="light">Página de Edição de registros</h3> 
    </div>       

    <div class="col s12">
        <form action="?router=Site/alterar/" method="POST">
            <?php foreach ($editarForm as $registro): ?>
                <input type="hidden" name="id" value="<?php echo $registro['id']?>">
                <div class="col s12">
                <div class="input-field col s12 m6">
                    <input type="text" name="nome" id="nome" value="<?php echo $registro['nome']?>" required>
                    <label for="nome">Nome</label>
                </div>
                
                <div class="input-field col s12 m6">
                    <input type="email" name="email" id="email" value="<?php echo $registro['email']?>" required>
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                <input type="submit" value="Enviar" class="btn-small blue">

                </div>
                
            <?php endforeach; ?>
        </form>
    </div>

    </div>





</div>
