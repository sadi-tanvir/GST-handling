@extends('layout.app');

@section('title')
    {{empty($title)? "Laravel" : $title}}
@endsection;

@section('main-content')
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Register</h1>
            <form action="{{route("register.post")}}" method="POST">
                @csrf
                {{-- name --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full
                        Name</label>
                    <input name="name" type="text" id="name"
                           class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                           placeholder="Type Your Full Name">
                </div>

                {{-- email --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email
                        Address</label>
                    <input name="email" type="email" id="email"
                           class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                           placeholder="your@email.com">
                </div>

                {{-- password --}}
                <div class="mb-4">
                    <label for="password"
                           class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                    <input name="password" type="password" id="password"
                           class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                           placeholder="Enter your password">
                    <a href="#"
                       class="my-2 text-xs text-gray-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Already
                        have an account?
                        <a href="{{route("login.view")}}" class="text-blue-500">Login</a>
                    </a>
                </div>

                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm
            text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
            focus:ring-offset-2 focus:ring-indigo-500">Register
                </button>
            </form>
        </div>
    </div>
@endsection;
