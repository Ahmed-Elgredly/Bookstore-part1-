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

    <section id="Register">
        <div class="container my-5">
            <form class="w-25 m-auto">
                <h1 class="text-center mb-4 text-success">Register</h1>
                <div class="mb-3">
                    <label for="Role" class="form-label">Role :</label>
                    <select class="form-control" id="Role" class="role">
                        <option value="" selected hidden></option>
                        <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Name" class="form-label">Name :</label>
                    <input type="text" class="form-control" id="Name" class="name">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="Email" class="email">
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="Password" class="password">
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone :</label>
                    <input type="text" class="form-control" id="Phone" class="phone">
                </div>
                <div class="mb-3">
                    <label for="Gender" class="form-label">Gender :</label>
                    <select class="form-control" id="Gender" class="gender">
                        <option value="" selected hidden></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>
        </div>
    </section>

    <script src="<?= asset("js/bootstrap.js"); ?>"></script>
    <script src="<?= asset("js/jquery.js"); ?>"></script>

</body>

</html>