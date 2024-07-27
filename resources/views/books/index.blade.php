<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('partials.header')
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Books List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">ISBN</th>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Author</th>
                        <th class="py-2 px-4 border-b">Description</th>
                        <th class="py-2 px-4 border-b">Date Published</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $book->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $book->isbn }}</td>
                            <td class="py-2 px-4 border-b">{{ $book->title }}</td>
                            <td class="py-2 px-4 border-b">{{ $book->author }}</td>
                            <td class="py-2 px-4 border-b">{{ $book->description }}</td>
                            <td class="py-2 px-4 border-b">{{ $book->date_published }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
