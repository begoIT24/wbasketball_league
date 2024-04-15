@extends('layout/template')

@section('title')
Match Calendar | Wbasketball League
@endsection


@section('content)')

<body class= "bg-cover bg-center bg-no-repeat" style="background-image: url('images/basket_court.jpg');">>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <h1 class="text-3xl font-bold mb-4 text-white">Liga Femenina Endesa</h1>
        </div>
        <img src="images/LFendesa.png" alt="Logo LFendesa" class="mx-auto h-20 w-auto">

        <a href="{{ route('matches.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            New Match
        </a>
        <a href="{{ route('teams.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Teams
        </a>
        <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">#</th>    
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Local Team</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"></th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Local Team Points</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Visitor Team</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"></th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Visitor Team Points</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Match Date</th>                                               
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="odd:bg-gray-50">

                    @foreach($matches as $match)
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        <a href="{{ route('matches.show', $match->id) }}" class="hover:underline relative inline-block">{{ $match->id }}</a>
                    
                        </td>                   
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            <a href="{{ route('teams.show', $match->team_local_id) }}" class="hover:underline relative inline-block">{{ $match->getLocalTeamName() }}</a>
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700"><img src="{{ asset($match->getLocalLogo()) }}" alt="LogoTeam1" class="h-10 w-10"></td>
                        <td class="border px-4 py-2 text-gray-700">{{ $match->points_local }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                            <a href="{{ route('teams.show', $match->team_visitor_id) }}" class="hover:underline relative inline-block">{{ $match->getVisitorTeamName() }}</a>
                        </td> 
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700"><img src="{{ asset($match->getVisitorLogo()) }}" alt="LogoTeam2" class="h-10 w-10"></td>                 
                        <td class="border px-4 py-2 text-gray-700">{{ $match->points_visitor }}</td>
                        <td class="border px-4 py-2 text-gray-700">{{ $match->date_match }}</td>                                 
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
        <br>

        {{$matches->links()}}      <!-- paginación automática -->
       
    </div>
    
</body>
  
      