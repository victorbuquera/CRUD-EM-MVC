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
                <td><?php echo $registro['email'] ?></td>
                <td><a class="waves-effect waves-light btn blue darken-3" href="?router=Site/editar/&id=<?php echo $registro['id'] ?>">Editar</a> 
                <td><a class="waves-effect waves-light btn red darken-3"href="?router=Site/deletar/&id=<?php echo $registro['id'] ?>">Deletar</a>
            </td>
        </tr>    
        <?php endforeach; ?> 
        </tbody>
    </div>
    </table>
</div>
</div>
