@extends('layout/template')

@section('title')
Match Details | Wbasketball League
@endsection

@section('content')

<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div class="text-center">
                <h1 class="text-3xl font-bold mb-4 text-blue-500">Liga Femenina Endesa</h1>
                <img src="../images/LFendesa.png" alt="Logo LFendesa" class="mx-auto h-20 w-auto">
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <h2 class="text-xl font-semibold mb-4 text-blue-500">Match Details</h2>
        </div>

        <div class="flex justify-center">
            <div class="w-1/2 mx-2 text-right">
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Team</label>
                    <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{$match->getLocalTeamName()}}
                    </li>
                </div>

                <div class="whitespace-nowrap px-4 py-2 text-gray-700 text-right"> 
                    <img src="{{ asset($match->getLocalLogo()) }}" alt="LogoTeam1" class="h-20 w-auto ml-auto">
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Team Points</label>
                    <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{$match->points_local}}
                    </li>
                </div>
            </div>

            <div class="w-1/2 mx-2 text-left">
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visitor Team</label>
                    <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{$match->getVisitorTeamName()}}
                    </li>
                </div>

                <div class="whitespace-nowrap px-4 py-2 text-gray-700">
                    <img src="{{ asset($match->getVisitorLogo()) }}" alt="LogoTeam2" class="h-20 w-auto">
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visitor Team Points</label>
                    <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        {{$match->points_visitor}}
                    </li>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Match Date</label>
                <li class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    {{$match->date_match}}
                </li>
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <a href="{{ route('matches.index') }}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800  h-10">
                Back
            </a>
            <a href="{{ route('matches.edit', $match->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 h-10 ml-2">
                Edit
            </a>
            <form action="{{ route('matches.destroy', $match->id) }}" method='POST'>
                @csrf
                @method('delete')
                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 h-10 ml-2">
                    Delete
                </button>
            </form>
        </div>
    </div>
</body>

@endsection
