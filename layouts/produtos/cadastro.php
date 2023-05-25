<div class="col-md-12 m-3">
    <h2>Cadastro de Produto</h2>
    <form action="./index.php?pg=salvar" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" name="codigo"/>
        </div>
        <div class="form-group">
            <label for="nome">Produto:</label>
            <input type="text" class="form-control" name="nome"
            placeholder="Informe o nome do produto" required="required"/>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" name="descricao" required="required">
            </textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" class="form-control" name="preco"
            placeholder="Informe o preço do produto" required="required"/>
        </div>
        <div class="form-group">
            <label for="estoque">Estoque:</label>
            <input type="text" class="form-control" name="estoque"
            placeholder="Informe o estoque do produto" required="required"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Cadastrar"/>
        </div>
    </form>
</div>