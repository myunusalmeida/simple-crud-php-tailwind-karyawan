<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
    <main class="bg-gray-100 flex items-center justify-center min-h-screen">
        <section class="bg-white border border-gray-200 w-3/12 py-5 px-7">
            <h1 class="text-center text-slate-900 text-3xl font-bold">Form Login</h1>

            <form action="_action-login.php" method="post">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Type here" name="username" class="input input-bordered bg-white w-full" />
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Type here" name="password" class="input input-bordered bg-white w-full" />
                </div>
                <button class="btn btn-primary" type="submit" name="login">Login</button>
            </form>
        </section>
    </main>
</body>

</html>
