<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <meta name="description" content="Page description">
    <meta name="author" content="Your Name">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="h-full">

<div class="min-h-full">
    
    <?php require("partials/nav.php")?>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">404 not found</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        The page you are looking for is not found.<br>
        <a href="/" class="text-blue-500 underline">Go back</a>
        </div>
        
    </main>
</div>

</body>
</html>