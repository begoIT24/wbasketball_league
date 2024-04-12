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

        <a href="{{ url('teams/create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            New Team
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
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $team->name }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700"><img src="{{ $team->logo }}" alt="Logo Equipo A" class="h-10 w-10"></td>
                        <td class="border px-4 py-2">{{ $team->ranking }}</td>
                        <td class="border px-4 py-2">{{ $team->address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <div class="flex justify-center">
            <nav aria-label="Page navigation example">
            <ul class="flex items-center -space-x-px h-8 text-sm">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                    </a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
    
</body>    
      