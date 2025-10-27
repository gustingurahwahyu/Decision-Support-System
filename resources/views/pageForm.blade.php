<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rekomendasi Wisata Bali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            background-color: #f3f4f6;
        }


        .form-section {
            margin-top: 80px;
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body>
    <x-navbar />
    <div class="container mx-auto px-4 form-section">
        <div class=" mx-auto">
            <x-form />
        </div>
    </div>
    <x-footer />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
