
<title>ALI Inventory | Login</title>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="knsYbjYdi1pkjbARWdW9gQl231T6xVUc1TQE2WPd">

    <!-- Compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="nathanaelfredericko@gmail.com">
    <meta name="author" content="nathfred">

    <!-- Favicon-->
    <!-- <link rel="icon" href="http://cuti.tvku.tv/img/tvku_favicon.png" type="image/x-icon" /> -->

    <title>ALI</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="http://cuti.tvku.tv/css/app.css">

    <!-- Custom Styles : Mazer Bootstrap-->
    <link rel="stylesheet" href="http://cuti.tvku.tv/css/bootstrap.css">

    <!-- Scripts -->
    <script src="http://cuti.tvku.tv/js/app.js" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <img src="img/logoali.png" height="50" width="300" />
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <!-- Session Status -->

                <!-- Validation Errors -->
                <form action="/home" method="POST">
                    @csrf
                    <div class="form-group">
                        Username
                        <input type="text" class="form-control" placeholder="Username" name="username" autofocus>

                    </div>
                    <br>
                    <div class="form-group">
                        Password <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>


                    <br>
                    <button type="submit" class="btn btn-primary plus float-right" name="submit">LOG IN</button>

                </form>

                <br \>
            </div>
        </div>




</body>

</html>