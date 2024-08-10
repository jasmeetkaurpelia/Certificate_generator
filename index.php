<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-lg shadow-xl max-w-4xl w-full">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Certificate Generator</h1>
        <form action="generate_certificate.php" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Recipient Name -->
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Recipient Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter recipient's name" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out shadow-sm hover:shadow-md">
            </div>

            <!-- Course Name -->
            <div>
                <label for="course" class="block text-gray-700 font-semibold mb-2">Course Name</label>
                <input type="text" id="course" name="course" required placeholder="Enter course name" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out shadow-sm hover:shadow-md">
            </div>

            <!-- Completion Date -->
            <div>
                <label for="date" class="block text-gray-700 font-semibold mb-2">Completion Date</label>
                <input type="date" id="date" name="date" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out shadow-sm hover:shadow-md">
            </div>

            <!-- Instructor Name -->
            <div>
                <label for="instructor" class="block text-gray-700 font-semibold mb-2">Instructor Name</label>
                <input type="text" id="instructor" name="instructor" placeholder="Enter instructor's name" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out shadow-sm hover:shadow-md">
            </div>

            <!-- Institution Name -->
            <div>
                <label for="institution" class="block text-gray-700 font-semibold mb-2">Institution Name</label>
                <input type="text" id="institution" name="institution" placeholder="Enter institution's name" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out shadow-sm hover:shadow-md">
            </div>

            <!-- Certificate ID -->
            <div>
                <label for="certificate_id" class="block text-gray-700 font-semibold mb-2">Certificate ID</label>
                <input type="text" id="certificate_id" name="certificate_id" placeholder="Enter certificate ID" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out shadow-sm hover:shadow-md">
            </div>

            <div class="col-span-1 md:col-span-2">
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out shadow-lg hover:shadow-xl">
                    Generate Certificate
                </button>
            </div>
        </form>
    </div>
</body>
</html>
