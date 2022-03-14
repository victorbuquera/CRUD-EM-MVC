<div class="row container">
<div class="col s12">
    <h3 class="light">Página de consultas</h3>

    <div class="col s12">
        
    
    <table class="centered striped highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>  
                    <th>Opções</th>  
                </tr>
            </thead>
        <tbody>
        <?php foreach($consulta as $registro): ?>
        <tr>
                <td><?php echo $registro['nome'] ?></td>
                <td><?php echo $registro['email'] ?></td>                                                        <!--criptografa o ID-->  
                <td>
                    <a class="waves-effect waves-light btn blue darken-3" href="?router=Site/editar/&id=<?php 
                        echo base64_encode($registro['id'])?>">Editar</a> 
                    <a class="waves-effect waves-light btn red darken-3"href="?router=Site/confirmaDelete/&id=<?php 
                        echo base64_encode( $registro['id']) ?>">Deletar</a>
                </td>
        </tr>    
        <?php endforeach; ?> 
        </tbody>
    </div>
    </table>
</div>
</div>
