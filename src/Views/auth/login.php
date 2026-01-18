<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6">Login</h1>

        <form method="POST" action="/S5-B1-MVC/public/login" class="space-y-4">
            <input type="email" name="email" placeholder="Email" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"/>
            
            <input type="password" name="password" placeholder="Password" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"/>
            
            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition-colors">
                Login
            </button>
        </form>

        <p class="text-center mt-4 text-gray-600">
            Don't have an account? 
            <a href="/S5-B1-MVC/public/register" class="text-blue-500 hover:underline">Register here</a>
        </p>
    </div>

</body>
</html>
