<?php
    if(isset($_POST['submit']))
    {
        // print_r($_POST['txtevento']);
        // print_r($_POST['txtdata']);

        include_once('config.php');

        $evento = $_POST['txtevento'];
        $data = $_POST['txtdata'];

        $result = mysqli_query($conexao, "INSERT INTO eventos(nome_evento,data_evento) VALUES ('$evento','$data' )");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="body">
    <header>
        <nav id="nav">
            <div class="mobile-menu" onclick="menuOpen(this)">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div id="menu-opcoes">

                <ul class="nav-list">
                    <p>TEMAS</p>
                    <button id="tema-claro" onclick="claro()">Claro</button>
                    <button id="tema-escuro" onclick="escuro()">Escuro</button>
                    <p>VISUALIZAÇÕES</p>
                    <button id="semanais" onclick="visualizacao('semanal')">Semanais</button>
                    <button id="mensais" onclick="visualizacao('mensal')">Mensais</button>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="calendar-container">
            <div class="calendar-header">
                <button id="prev-month">❮</button>
                <div class="month">Outubro 2024</div>
                <button id="next-month">❯</button>
            </div>
            <table class="calendar">
                <thead>
                    <tr>
                        <th>Dom</th>
                        <th>Seg</th>
                        <th>Ter</th>
                        <th>Qua</th>
                        <th>Qui</th>
                        <th>Sex</th>
                        <th>Sáb</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <div class="selected-date-container">
                <p id="selected-date-message"></p>
                <button id="cadastrar-evento-btn" onclick="toggleFormulario()" style="display: none;">Cadastrar Evento</button>
            </div>
        </div>

        <div id="view-semanal" style="display: none;"></div>
        <div id="view-mensal" style="display: flex;"></div>

        

        <!-- Modal para inserir informações do evento -->
        <section class="formulario">
            <div id="Modal">
                <i class="fa-solid fa-x" style="position: relative;bottom: 20%;right: 45%;"  onclick=" toggleFormulario()"></i>
                <h1>EVENTOS</h1>
                <form action="index.php" method="POST">
                        <input type="text" id="txtevento" name="txtevento" aria-label="Nome do evento" placeholder="Nome do evento">
                        <input type="date" id="txtdata" name="txtdata" aria-label="Data do evento">
                        <button type="submit" id="submit" name="submit">Cadastrar</button>
 
                </form>
            </div>
        </section>

    </main>

    <script src="mobile-navbar.js"></script>


</body>

</html>
