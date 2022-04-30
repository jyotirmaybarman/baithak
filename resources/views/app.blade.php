@extends('layout')

@section('content')
<section class="">
    <div class="flex py-12 lg:flex-row flex-col items-center justify-center gap-20">
      <div class="text-center lg:text-left">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium mt-12">Welcome to बैठक !!</h1>
        <p class="mb-8 leading-relaxed text-gray-500 dark:text-gray-300">The most simple and secure medium for your e-meetings</p>
        <div class="flex flex-col lg:flex-row gap-12 mt-8 items-center">
            <a href="#" class="flex gap-4 p-4 rounded bg-blue-500 hover:bg-blue-700 text-white">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <span>
                    Host a new meeting
                </span>
            </a>
            <span>OR</span>
            <a href="#" class="hover:bg-gray-300 dark:hover:bg-[#494949] flex gap-4 p-4 rounded border dark:bg-[#333] dark:border-[#333]">Join a meeting</a>
        </div>
      </div>
      <div class="hidden lg:block lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/team-meeting-colored-.png') }}">
      </div>
    </div>
  </section>
@endsection