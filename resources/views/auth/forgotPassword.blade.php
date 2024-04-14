@extends('layout.app');

@section('main-content')
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-xl">
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Forgot Password?</h1>
            <form class="" action="#">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email
                        Address</label>
                    <input type="email" id="email"
                           class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                           placeholder="your@email.com" required>
                </div>
                <a class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm
            text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
            focus:ring-offset-2 focus:ring-indigo-500">Submit</a>
            </form>
        </div>


    </div>
@endsection;
