<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit</title>
</head>
<body class="bg-neutral-950">
    <form action="{{ url('edit/update/' . $man->id) }}" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        @method('put')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="Voornaam">Voornaam</label>
            <input type="text" id="Voornaam" name="Voornaam" value=" {{ $man->Voornaam }} " placeholder="voornaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="Achternaam">Achternaam</label>
            <input type="text" id="Achternaam" name="Achternaam" value=" {{ $man->Achternaam }}" placeholder="achternaam" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="Team">Team</label>
            <input type="text" id="Team" name="Team" value=" {{ $man->Team }}" placeholder="team" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="Contract">Contract</label>
            <input type="text" id="Contract" name="Contract" value=" {{ $man->Contract }}" placeholder="contract" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div>
            <button type="submit" class="bg-green-500 text-white py-2 px-4 m-3 rounded">Opslaan</button>
        </div>
    </form>
            
</body>
</html>