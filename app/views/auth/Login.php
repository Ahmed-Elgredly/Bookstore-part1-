<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="<?= asset("css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?= asset("css/global.css"); ?>">

</head>

<body>

    <?php include __DIR__ . "/../components/Navbar.php" ?>

    <section id="Login">
        <div class="container my-5">
            <form class="w-25 m-auto">
                <h1 class="text-center mb-4 text-success">Login</h1>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="Email" class="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="Password" class="password">
                </div>
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </section>

    <script src="<?= asset("js/bootstrap.js"); ?>"></script>
    <script src="<?= asset("js/jquery.js"); ?>"></script>

</body>

</html>