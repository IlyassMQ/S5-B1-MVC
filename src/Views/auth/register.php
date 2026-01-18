<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6">Register</h1>

        <form method="POST" action="/S5-B1-MVC/public/register" class="space-y-4">
            <input type="text" name="name" placeholder="Full Name" required
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

            <input type="email" name="email" placeholder="Email" required
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

            <input type="password" name="password" placeholder="Password" required
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

            <select name="role_id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                <option value="1">Candidate</option>
                <option value="2">Recruiter</option>
            </select>

            <button type="submit"
                    class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 transition-colors">
                Register
            </button>
        </form>

    </div>

</body>
</html>
