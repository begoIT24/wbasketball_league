@extends('layout/template')

@section('title')
Edit Match | Wbasketball League
@endsection

@section('content)')

<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <h1 class="text-3xl font-bold mb-4 text-blue-500">Liga Femenina Endesa</h1>  
        </div>

        <img src="../../images/LFendesa.png" alt="Logo LFendesa" class="mx-auto h-20 w-auto">

        <div class="flex justify-center mt-8">
            <h2 class="text-xl font-semibold mb-4 text-blue-500">Edit Match</h2>
        </div>
        
        <div class="flex justify-between">
        <div class="w-1/2 px-2"> <!-- izquierda-->
       
            <form action="{{ route('matches.update', $match) }}" method="POST" class="max-w-sm mx-auto">

                @csrf 

                @method('put')
        
                <div class="mb-5">
                    <label for="local_team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Team</label>
                    <select id="local_team" name="local_team"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required >
                        <option selected = "{{ $match->team_local_id }}">{{ $match->getLocalTeamName() }} </option>
                        @foreach($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>            
                </div>

                <div class="mb-5">
                    <label for="points_local" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Team Points</label>
                    <input type="number" id="points_local" name="points_local" value="{{ $match->points_local }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
        </div>        

        <div class="w-1/2 px-2"> <!--derecha-->
            <div class="mb-5">
                <label for="visitor_team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visitor Team</label>
                <select id="visitor_team" name="visitor_team" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <option selected = "{{ $match->team_visitor_id }}">{{ $match->getVisitorTeamName() }} </option>
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                     @endforeach
                </select>           
            </div>
            
            <div class="mb-5">
                <label for="points_visitor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visitor Team Points</label>
                <input type="number" id="points_visitor" name="points_visitor" value="{{ $match->points_visitor }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>

        </div>
        </div>
        <!--inferior-->
        <div class="flex justify-center mt-8">
            <div class="mb-5">            
                <label for="date_match" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Match Date</label>
                <input type="datetime-local" id="date_match" name="date_match" value="{{ $match->date_match }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
        </div>
        
        <div class="flex justify-center mt-8">
            <a href="{{ route('matches.index') }}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 mr-2">
                Back</button>
            </a>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Submit</button>
        </div>
        

        </form> 

    </div>

</body>

   