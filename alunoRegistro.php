<?php
    require_once 'init.php';
    //abre a conexão
    $PDO = db_connect();
    //SQL para selecionar os registros
    $sql = "SELECT nomeTurma FROM Turma ORDER BY nomeTurma ASC";
    // seleciona os registros
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
?>   
<!DOCTYPE HTML>
<html>
<head>
    <title>Imperium</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/mainScreen.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>
<!-- Content -->
<div id="content">
    <div class="inner">

        <!-- Post -->
        <article class="box post post-excerpt">
            <header>
                <!--
                    Note: Titles and subtitles will wrap automatically when necessary, so don't worry
                    if they get too long. You can also remove the <p> entirely if you don't
                    need a subtitle.
                -->
                <h2><a href="#">Bem Vindo ao Imperium</a></h2>
                <p>Seu Gerenciador Pessoal Acadêmico</p>
            </header>
                <div class="dropdown">
                   <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                   Escolha a Sala Desejada
                   <span class="caret"></span>
                   </button>
                   <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                   <?php while($turma = $stmt->fetch(PDO::FETCH_ASSOC)){
                      echo "<li>".$turma['nomeTurma']."</li>";
                   }?>
                   </ul>
                </div>
                
        </article>
    </div>
</div>

<!-- Sidebar -->
<div id="sidebar">

    <!-- Logo -->
    <h1 id="logo"><a href="#">Imperium</a></h1>


    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="indexMain.html">Principal</a></li>
            <li class="current" ><a href="alunoRegistro.html">Registro de Alunos</a></li>
            <li><a href="calendario.html">Agenda</a></li>
            <li><a href="relatorios.html">Atividades</a></li>
        </ul>
    </nav>

    <!-- Copyright -->
    <ul id="copyright">
        <li>&copy; CEFET-MG Unidade Varginha.</li><li>Design: Edgard Alexandre, Larissa Rodrigues, Pedro Barbosa, Willian Alves</a></li>
    </ul>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/utilScreen.js"></script>
<script src="assets/js/mainScreen.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
