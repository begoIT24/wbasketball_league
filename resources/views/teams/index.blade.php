@extends('layout/template')

@section('title')
Teams | Wbasketball League
@endsection

@section('content)')

<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <h1 class="text-3xl font-bold mb-4 text-blue-500">Liga Femenina Endesa</h1>  <!-- #356EB3  -->
        </div>
        <img src="images/LFendesa.png" alt="Logo LFendesa" class="mx-auto h-20 w-auto">

        <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">#</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"></th> <!-- columna para el logo del equipo -->
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Ranking</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Address</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="odd:bg-gray-50">
                    @foreach($teams as $team)                   
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $team->id }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $team->name }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700"><img src="{{ $team->logo }}" alt="Logo Equipo A" class="h-10 w-10"></td>
                        <td class="border px-4 py-2">{{ $team->ranking }}</td>
                        <td class="border px-4 py-2">{{ $team->address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>    
      