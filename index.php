<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="assets/logo.png">
    <title>Meu Portfolio</title>
</head>

<body class="bg-[#1e0b1a] text-gray-200">
    <!-- Cabecalho -->
    <?php
        include('./componentes/header.php');
    ?>
    <!-- Main -->
    <main class="mx-auto max-w-screen-lg min-h-20 px-6 py-6">
        <!-- Banner -->
    <?php
        include('./componentes/main_banner.php');
    ?>
        <!-- Projetos -->
    <?php
        include('./componentes/main_projetos.php');
    ?>
    </main>
    <!-- Footer -->
    <?php
        include('./componentes/footer.php'); 
    ?>
</body>

</html>