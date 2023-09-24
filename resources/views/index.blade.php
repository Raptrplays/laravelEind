<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Coureurs</title>
</head>
<body>
    <table class="min-w-full divide-y">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-gray-500">
                    VOORNAAM
                </th>
                <th class="px-6 py-3 text-left text-gray-500">
                    ACHTERNAAM
                </th>
                <th class="px-6 py-3 text-left text-gray-500">
                    TEAM
                </th>
                <th class="px-6 py-3 text-left text-gray-500">
                    CONTRACT
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-gray-200">
            @foreach ($coureurs as $coureur)
                <tr>
                    <td class="px-6 py-4">
                        {{ $coureur->Voornaam }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $coureur->Achternaam }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $coureur->Team }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $coureur->Contract }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ url('edit/' . $coureur->id) }}" class="text-blue-600">Edit</a>
                        <form action="{{ url('delete/' . $coureur->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button class="bg-green-500 text-white py-2 px-4 m-3 rounded">
      <a href="create">Create</a>
    </button>
    
</body>
</html>