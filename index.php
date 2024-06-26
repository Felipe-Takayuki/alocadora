<?php 
require_once 'components/topo.php';

if (isset($_GET['page'])) {
    $p = $_GET['page'];
    switch($p) {
        case 'home': 
            require_once 'components/meio.php';
            break;
        case 'jogos':
            require_once 'pages/jogos.php';
            break;
        case 'empresa':
            require_once 'pages/empresa.php';
            break;
        case 'fale_conosco':
            require_once 'pages/fale_conosco.php';
            break;
        case 'locacao':
            require_once 'pages/locacao.php';
            break;
        case 'cadastro':
            require_once 'pages/cadastro.php';
            break;
        case 'login':
            require_once 'pages/login.php';
            break;
        case 'cadastro-jogo':
            require_once 'pages/cadastro_jogo.php';
            break;
        case 'processar_login':
            require_once 'pages/Dados/d.login.php';
            break;
        case 'processar_cadastro':
            require_once 'pages/Dados/d.cadastro.php';
            break;
        case 'processar_jogo':
            require_once 'pages/Dados/d.jogos.php';
            break;
        case 'processar_fale':
            require_once 'pages/Dados/d.fale.php';
            break;

    }
}else {
    require_once 'components/meio.php';
}

require_once 'components/rodape.php';
?>

</body>
</html>