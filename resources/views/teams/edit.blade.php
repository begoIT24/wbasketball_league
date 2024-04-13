@extends('layout/template')

@section('title')
Edit Team | Wbasketball League
@endsection

@section('content)')

<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <h1 class="text-3xl font-bold mb-4 text-blue-500">Liga Femenina Endesa</h1>  <!-- color azul del logo #356EB3  -->
        </div>
        <img src="../../images/LFendesa.png" alt="Logo LFendesa" class="mx-auto h-20 w-auto">
        <div class="flex justify-center mt-8">
        <h2 class="text-xl font-semibold mb-4 text-blue-500">Edit Team</h2>
        </div>

        <div class="flex justify-center mt-8">       
            <form action="{{ route('teams.update', $team) }}" method="POST" class="max-w-sm mx-auto">

                @csrf  <!-- genera token para realizar input oculto -->

                @method('put')

                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team Name</label>
                    <input type="text" id="name" name="name" value="{{ $team->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="address" name="address" value="{{ $team->address }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="logo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team Logo</label>
                    <input type="file" id="logo" name="logo" accept="image/*" value="{{ $team->logo }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>

                <div class="flex justify-between mb-5">
                    <a href="{{ route('teams.index') }}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Back</button>
                    </a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>   
        
        </div>

    </div>
</body>
      