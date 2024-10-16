<?php require("partials/body.php")?>  
<?php require("partials/nav.php")?>
<?php require("partials/header.php")?>

    <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form  action="" method="POST">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">title</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="title" id="title" autocomplete="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="title" value="<?= !empty($error) ? trim(htmlspecialchars($_POST['title'])) : ''; ?>">
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="content" class="block text-sm font-medium leading-6 text-gray-900">content</label>
          <div class="mt-2">
            <textarea id="content" name="content" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= !empty($error) ? trim(htmlspecialchars($_POST['content'])) : ''; ?></textarea>
          </div>

        <div>
    <?php if(isset($error['warning'])) :?>
      <p class="text-red-500 text-sm"><?= $error['warning']?></p>
      <?php else : ?>
        <p class="text-green-500 text-sm">A new note is created</p>
    <?php endif;?>
  </div>

        <div class="mt-2 flex items-center ">
    <button type="submit" class="rounded-md bg-indigo-600 px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
  
  </div>
</form>
    </main>

<?php require("partials/footer.php")?>

