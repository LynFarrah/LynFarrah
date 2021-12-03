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
        <div class="relative justify-center flow-root min-h-screen text-black bg-yellow-400 items-top sm:items-center sm:pt-0">      

            <div class="flex h-screen">
                <div class="flex-1 flex flex-col overflow-hidden">
                    <header>
                        <nav class="bg-white shadow">
                            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                <div class="flex justify-between h-16">
                                    <div class="flex">
                                        <!-- Logo -->

                                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </header>
                    <div class="flex h-full">
                        <?php
                            include '../include/user-navigation.inc.php';
                        ?>
                        <main class="flex flex-col h-full w-full overflow-x-hidden overflow-y-auto mb-14">
                            <div class="flex w-full mx-auto px-6 py-8">
                                <!-- Content Here -->
                            </div>
                        </main>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>