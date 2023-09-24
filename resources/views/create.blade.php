<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create</title>
</head>
<body>
    <form action="store" method="post" class="max-w-md mx-auto bg-white p-6 rounded-lg">
        @csrf
        <div class="mb-4">
            <label for="Voornaam" class="block text-gray-700 font-bold mb-2">Voornaam</label>
            <input type="text" id="Voornaam" name="Voornaam" placeholder="voornaam" class="border-black border rounded w-full py-2 px-3 text-gray-700">
        </div>
    
        <div class="mb-4">
            <label for="Achternaam" class="block text-gray-700 font-bold mb-2">Achternaam</label>
            <input type="text" id="Achternaam" name="Achternaam" placeholder="achternaam" class="border-black border rounded w-full py-2 px-3 text-gray-700">
        </div>
    
        <div class="mb-6">
            <label for="Team" class="block text-gray-700 font-bold mb-2">Team</label>
            <input type="text" id="Team" name="Team" placeholder="team" class="border-black border rounded w-full py-2 px-3 text-gray-700">
        </div>

        <div class="mb-6">
            <label for="Contract" class="block text-gray-700 font-bold mb-2">Contract</label>
            <input type="number" id="Contract" name="Contract" placeholder="contract" class="border-black border rounded w-full py-2 px-3 text-gray-700">
        </div>
    <div>
        <button class="bg-green-500 text-white py-2 px-4 m-3 rounded" type="submit">Opslaan</button>
    </div>
    </form>
        
</body>
</html>