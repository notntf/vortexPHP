<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/svg+xml" href="Public/image/vortex_icon.png">

    <title>vortex</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        *{
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
        }

        .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,     /* 0 para contorno, 1 para relleno */
      'wght' 700,   /* Peso de la fuente del icono (ej. 100 a 700) */
      'GRAD' 0,     /* Grado óptico */
      'opsz' 80   /* Tamaño óptico, puedes ajustarlo. Para text-3xl, podrías probar 30 o más. */
                      }              /* O puedes controlar el tamaño con font-size directamente en el span */
    </style>

</head>
<body class="bg-black text-white">
    <!-- Header -->
    <header class="absolute top-0 w-full z-10">
        <nav class="flex items-center justify-between px-6 py-4 md:px-12">
            <div class="flex items-center text-violet-800">
                <span class="material-symbols-outlined text-4xl font-black mr-1">
                    cyclone
                </span>
                <span class="text-4xl font-black">vortex</span>
            </div>
            <div class="space-x-4 text-xs">
                <button class="bg-zinc-950 text-zinc-50 font-extrabold px-4 py-2 rounded hover:bg-zinc-800 transition-all duration-300">INGRESA</button>
                <button class="bg-violet-800 text-zinc-50 font-extrabold px-4 py-2 rounded hover:bg-violet-950 transition-all duration-300">SUSCRIBETE AHORA</button>
            </div>
        </nav>
    </header>

    <!-- Inicio Section -->
    <section class="relative h-screen flex items-center justify-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('resources/image/v1.jpg');">
            <div class="absolute inset-0 bg-black opacity-80"></div>
        </div>
        <div class="relative text-center px-4 md:px-0">
            <div class="flex items-center justify-center">
                <span class="material-symbols-outlined text-9xl font-black mr-1">cyclone</span>
                <span class="text-9xl font-black">vortex</span>
            </div>
            <h1 class="text-4xl md:text-4xl font-bold mb-4">Disfruta las mejores películas y series, sin límites</h1>
            <p class="text-xl md:text-2xl mb-6">Donde quieras. Cuando quieras</p>
            <button class="bg-zinc-950 text-zinc-50 text-xl font-extrabold px-4 py-2 rounded hover:bg-zinc-900">SUSCRIBETE AHORA</button>
        </div>
    </section>

    <!-- Planes Section -->
    <section class="bg-black py-12 border-t border-gray-800">
        <div class="flex flex-col items-center justify-center gap-4">
            <h2>PLANES</h2>
            <div class="flex items-center justify-center gap-4">
                <div class="flex flex-col items-center justify-center bg-zinc-900 p-40">
                    <h3 class="font-extrabold">BASICO</h3>
                    <p>$5.99</p>
                </div>
                <div class="flex flex-col items-center justify-center bg-zinc-900 p-40">
                    <h3 class="font-extrabold">Estandar</h3>
                    <p>$8.99</p>
                </div>
                <div class="flex flex-col items-center justify-center bg-zinc-900 p-40">
                    <h3 class="font-extrabold">PREMIUM</h3>
                    <p>$11.99</p>
                </div>
            </div>          
        </div>
    </section>
    <!-- Categorias Section -->                  
    <section class="bg-black py-12 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4 md:flex items-center flex-row-reverse">
            categorias + photo
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-12 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4">
            footer
        </div>
    </footer>
</body>
</html>