<div class="row container">
    <div class="col s12">
        <h3 class="light">Página de cadastro</h3>
    </div>

    <div class="col s12">
        <form action="?router=Site/cadastro/" method="POST">
            <div class="input-field col s12 m6">
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Digite seu nome</label>
            </div>
            
            <div class="input-field col s12 m6">
                <input type="email" name="email" id="email" required>
                <label for="email">Digite seu Email</label>
            </div>

            <div class="input-field col s12">
                <input type="submit" value="Enviar" class="btn-small">
                <input type="reset" value="Limpar" class="btn-small">

            </div>

            </form>
    </div>
</div>
