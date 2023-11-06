<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho</title>
  <?php require_once(__DIR__ ."/includes/fonts.php") ?>
  <link type="text/css" rel="stylesheet" href="/css/estilos.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <header>
    <div class="menuCabecalho">
      <a href="/">Home</a>
      <a href="#sessao-1">Sobre</a>
      <a href="#rodape">Contatos</a>
      <a href="#fotos">Quem somos</a>
    </div>

    <div class="cadastroCabecalho">
      <a href="/cadastrar">Cadastre-se</a>
      <a href="/login">Login</a>
    </div>
  </header>
  <section id="sessao-1">
    <div class="textoHome">
      <h1>Sejam bem vindos ao AGROviva!</h1>
      <p>Este site tem como objetivo repassar informações das tecnicas e tecnologias usadas no agronegocio, no qual buscamos
        algumas das duvidas mais comuns em um setor tão abragente que é o agronegocio, nosso site irá conter conteudos
        que vão de tecnicas de uma colheita produtiva até as tecnicas utilizadas para menter a preservação do produto
      </p>
      <h1>Isso é realmente necessário?</h1>
      <p>a importancia no conhecimento agropecuario se vem no sentido unico em que muitos não sabem o processo que foi
        até chegar no produto final que vai para aréa de venda, muitos colocam "N" motivos por conta dos altos preços
        dos FLV (Frutas, Legumes e verduras). Então este é o fundamento para a criação do site</p>
    </div>
    <div class="botaoHome">
      <a href="/cadastrar">Cadastre-se já</a>
    </div>
  </section>
  <section id="fotos">
    <div class="pessoal">
      <a target="_blank" href="https://www.instagram.com/a.thabyta.apf/"><img src="/img/thabyta.jpeg"></a>
      <h3>Alanna Thabyta</h3>
      <ul>
        <li>
          Curso: ADS
        </li>
        <li>
          Matricula: <br> 202308424106
        </li>
      </ul>
    </div>
    <div class="pessoal">
      <a target="_blank" href="https://www.instagram.com/renatavmbraga/"><img src="/img/rena.jpeg"></a>
      <h3>Renata Vidal</h3>
      <ul>
        <li>
          Curso: ADS
        </li>
        <li>
          Matricula: <br> 202308424696
        </li>
      </ul>
    </div>
    <div class="pessoal">
      <a target="_blank" href="https://www.instagram.com/sir_d.vi/"><img src="/img/davi.jpeg"></a>
      <h3>Davi Cruz</h3>
      <ul>
        <li>
          Curso: ADS
        </li>
        <li>
          Matricula: <br> 202308242431
        </li>
      </ul>
    </div>
    <div class="pessoal">
      <a target="_blank" href="https://www.instagram.com/levi_monteiro_de_melo/"><img src="/img/levi.jpeg"></a>
      <h3>Levi Monteiro</h3>
      <ul>
        <li>
          Curso: CC
        </li>
        <li>
          Matricula: <br> 202308093311
        </li>
      </ul>
    </div>
    <div class="pessoal">
      <a target="_blank" href="https://www.instagram.com/ramon_kel/"><img src="/img/ramonn.jpeg"></a>
      <h3>Ramon Kelvin</h3>
      <ul>
        <li>
          Curso: ADS
        </li>
        <li>
          Matricula: <br> 202308778773
        </li>
      </ul>
    </div>
  </section>
  <footer id="rodape">
    <div class="menu1Sessao2">
      <a>AGROviva</a>
    </div>
    <div class="menu2Sessao2">
      <h2>Contato</h2>
      <div class="contact-item">
        <ion-icon name="call"></ion-icon>
        <p>(85) X XXXX-XXXX</p>
      </div>
      <div class="contact-item">
        <ion-icon name="mail"></ion-icon>
        <p>Teste@mail.com</p>
      </div>
      
    </div>
    <div class="menu3Sessao2">
      <a href="/">Home</a>
      <a href="/login">Entrar</a>
      <a href="/cadastrar">Cadastrar Agora</a>
    </div>
  </footer>
</body>

</html>