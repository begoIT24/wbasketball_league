@extends('layout/template')

@section('title')
Teams | Wbasketball League
@endsection

@section('content)')

<body class= "bg-cover bg-center bg-no-repeat" style="background-image: url('images/basket_court.jpg');">> <!-- <body class="bg-gray-100"> -->

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <h1 class="text-3xl font-bold mb-4 text-white">Liga Femenina Endesa</h1>  <!-- #356EB3  -->
        </div>
        <img src="images/LFendesa.png" alt="Logo LFendesa" class="mx-auto h-20 w-auto">

        <a href="{{ route('teams.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            New Team
        </a>
        <a href="{{ route('matches.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Matches
        </a>
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
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            <a href="{{ route('teams.show', $team->id) }}" class="hover:underline relative inline-block">{{ $team->name }}</a>
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700"><img src="{{ asset($team->logo) }}" alt="Logo Equipo" class="h-10 w-10"></td>
                        <td class="border px-4 py-2 text-gray-700">{{ $team->ranking }}</td>
                        <td class="border px-4 py-2 text-gray-700">{{ $team->address }}</td>                                   
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
        <br>

        {{$teams->links()}}   <!-- paginación automática -->
       
    </div>
    
</body>
  
      