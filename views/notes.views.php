<?php require("partials/body.php")?>  
<?php require("partials/nav.php")?>
<?php require("partials/header.php")?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note):?>
                <li>
                <a href="note?id=<?=$note['id']?>"><?=$note['title']?> by <?=$note['name']?></a>
            </li>
                <?php endforeach;?>

                <div class="mt-6">
                <a href="notes/create" class="text-blue-500 hover:underline">create note</a>
                </div>
        </div>
    </main>

    
<?php require("partials/footer.php")?>