<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surf My Kitchen</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@1.16.2/dist/full.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="antialiased">
        <div class="relative justify-center flow-root min-h-screen py-4 text-black bg-yellow-400 items-top sm:items-center sm:pt-0">      
            <?php
                include 'include/navigation.inc.php';
            ?>

            <div class="w-full px-6 py-4 sm:block ">
            
            <!-- Content Here -->

                <?php 
                    include 'include/comingsoon.inc.php'
                ?>

            <!-- End Content -->

            </div>

            <?php
                include 'include/footer.inc.php';
            ?>
        </div>
    </body>
</html>