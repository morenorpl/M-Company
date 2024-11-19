<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <title>Document</title>
</head>


<body class="bg-[#AAD7B8] font-sans text-gray-700">
    <div class="container mx-auto p-8 flex">
        <div class="max-w-md w-full mx-auto">
            <div class="container flex flex-col justify-center items-center">
                <img src="../assets/images/dashboard.png " class="mr-3 w-1/4" alt="Logo" />
                <span class="bg-gray-900 text-transparent bg-clip-text">
                    <h1 class="text-4xl text-center mb-12  stroke-gray-900 font-bold ">Login to M-Company</h1>
                </span>

            </div>

            <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                <div class="p-8">
                    <form method="POST" action="../utils/auth.php">
                        <div class="mb-5">
                            <input placeholder="Username" type="text" name="username" class="block w-full p-3 rounded bg-gray-200 border border-transparent focus:outline-none">
                        </div>

                        <div class="mb-5">
                            <input placeholder="*********" type="password" name="password" class="block w-full p-3 rounded bg-gray-200 border border-transparent focus:outline-none">
                        </div>

                        <button type="submit" name="login" class="w-full p-3 mt-4 bg-[#F7C236] text-white rounded shadow hover:bg-[#F7D47A]">Login</button>
                    </form>
                </div>

                <?php
                if (isset($_GET['notification'])) {
                    echo $_GET['notification'];
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>