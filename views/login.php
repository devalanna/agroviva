<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agroviva</title>
    <?php require_once(__DIR__ ."/includes/fonts.php") ?>
    <link rel="stylesheet" href="/css/estilos.css">

</head>

<body id="login-body">
    <main class="cent-login">
    <form id="form-login" method="post" action="/login">
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" id="login" name="login">
            <span id="login-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha">
        </div>
        <div class="form-actions">
            <button class="submit-btn" type="submit">Entrar</button>
            <button class="cancel-btn" type="reset">Cancelar</button>
        </div>
        <div>
            <input type="checkbox" name="logado" id="logado"/>
            <label for="logado">manter-me logado</label>
        </div>
        <div>
            <p>Ainda não tem conta?</p>
            <a href="/cadastrar">Cadastre-se</a>
        </div>
    </form>
    </main>
    <script src="/js/login.js"></script>
</body>

</html>