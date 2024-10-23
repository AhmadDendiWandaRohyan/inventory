
<title>Ali Inventory | Login</title>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="knsYbjYdi1pkjbARWdW9gQl231T6xVUc1TQE2WPd">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="nathanaelfredericko@gmail.com">
    <meta name="author" content="nathfred">

    <!-- Favicon-->
    <!-- <link rel="icon" href="http://cuti.tvku.tv/img/tvku_favicon.png" type="image/x-icon" /> -->

    <title>Ali Inventory</title>

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
                <img class="h-20 fill-current text-gray-500" src="img/logoali.png" height="50" width="250" />
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <!-- Session Status -->

                <!-- Validation Errors -->
                <form action="/tambahakun" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nickname</label>
                        <input type="text" class="form-control" placeholder="Nickname" name="nickname" id="nickname" required>

                    </div>
                    <br>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" id="role" class="custom-select form-control" required>
                            <option value="">--Pilih Role--</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>

                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                    </div>


                    <br>
                    <a href="/dashboard" class="btn btn-default  float-left" name="back"><i class="fa-solid fa-circle-arrow-left fa-2x"></i></a>
                    <button type="submit" class="btn btn-primary plus float-right" name="submit">Create Account</button>

                </form>

                <br \>
            </div>
        </div>


</body>

</html>