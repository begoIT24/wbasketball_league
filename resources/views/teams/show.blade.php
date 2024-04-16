@extends('layout/template')

@section('title')
Team Details | Wbasketball League
@endsection

@section('content)')

<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <h1 class="text-3xl font-bold mb-4 text-blue-500">Liga Femenina Endesa</h1>  <!-- color azul del logo #356EB3  -->
        </div>
        <img src="../images/LFendesa.png" alt="Logo LFendesa" class="mx-auto h-20 w-auto">
        <div class="flex justify-center mt-8">
        <h2 class="text-xl font-semibold mb-4 text-blue-500">Team Details</h2>
        </div>       
    
        <div class="max-w-sm mx-auto">
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team Name</label>
                <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$team->name}}</li>
            </div>

            <div class="mb-5 flex justify-center">
                <img src="{{ asset($team->logo) }}" alt="LogoTeam" class="h-20 w-auto">
            </div>   
           
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ranking</label>
                <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$team->ranking}}</li>
            </div>

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$team->address}}</li>
            </div>

        </div>

        <div class="max-w-sm mx-auto">
        <div class="flex justify-between mb-5">
            <a href="{{ route('teams.index') }}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 h-10">
                Back</button>
            </a>
            <a href="{{ route('teams.edit', $team->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 h-10">
                Edit</button>
            </a>
            <form action="{{ route('teams.destroy', $team->id) }}" method='POST'>
            @csrf    
            @method('delete')
                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 h-10">
                    Delete</button>
            </form>       
        </div>
    </div>
</body>