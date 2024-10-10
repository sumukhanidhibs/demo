<?php require("partials/body.php")?>  
<?php require("partials/nav.php")?>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1><?=$note['title']?></h1>
            <p><?=$note['content']?>
        </div>
    </main>
</div>

</body>
</html>