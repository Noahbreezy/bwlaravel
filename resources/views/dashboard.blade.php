@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Welcome, {{ Auth::user()->username }}</h1>
        
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection