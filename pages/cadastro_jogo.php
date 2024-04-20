    
    <main>
        <article class="meio">
            <p class="page-name">Cadastro de Jogos</p>
            <form action="index.php?page=processar_jogo" method="post" class="form-jogo" >
                <div class="row">
                    <div class="add-img">
                        <img src="assets/icons/addIcon.svg" alt="" srcset="">
                    </div>
                    <div class="col-jogo">
                        <input type="text" name="ctnome" placeholder="Nome"> 
                        <textarea name="ctdescricao" cols="30" rows="5" placeholder="Descrição do jogo" ></textarea>
                        <input type="text" name="ctgenero" placeholder="Gênero">
                    </div>
                </div>
                <div class="espaco-jogo"></div>
                <input type="submit" value="Cadastrar" class="btn">
                <input type="reset" value="Limpar" class="btn">
            </form>
        </article>
    </main>
</body>
</html>