<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-hidde">
    
    <x-header />

    <main id="main">
        
        <x-navbar />
        
        <x-carousel />
        
        <x-scrolling-logo />
        
        <x-banner />
        
        <x-category :data="$data_functionality" />
        
        <x-products :data="$data_product"/>
        
        <x-promotional />

        <x-product-type :data="$data_weapon" />
        
    </main>
    
    <x-footer />

    <script src="https://kit.fontawesome.com/68cfd0271a.js" crossorigin="anonymous"></script>
</body>

</html>
