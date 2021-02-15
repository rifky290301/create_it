<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Create IT</title>
    <link rel="icon" href="images/global/IG LOGO.svg">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <main id="create_it">
        <navigation></navigation>

        <div style="margin-top: 5rem" class="">
            <router-view></router-view>
        </div>
    </main>
    <script src="/js/app.js"></script>
</body>
</html>