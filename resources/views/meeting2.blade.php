@extends('layout')

@section('content')
<input value="{{ $response }}" id="response" class="hidden">
<input value="{{ $token }}" id="token" class="hidden">
<input type="text" value="" name="" id="meetingIdBox" class="bg-transparent border p-2 pointer-events-none mb-4">
<div class="flex gap-8">
    <div class="left w-[75%] h-[800px] felx flex-col justify-between items-between">
        <div class="top h-[90%] grid grid-cols-3">
            <div class="group cursor-pointer relative flex justify-center items-center h-[360px] w-[360px]">
                {{-- <img class="block h-full w-full object-center" src="https://randomuser.me/api/portraits/men/89.jpg" alt=""> --}}
                <video class="block h-[360px] w-[360px]"  autoplay="true" id="videoElement"> </video>
                <div class="hidden group-hover:flex absolute left-5 top-5 actions gap-4">
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </button>
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
                <button class="hidden group-hover:block absolute p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6 fill-dark dark:fill-white" viewBox="0 0 124 125" >
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.21 37.5228L86.92 2.2328C83.92 -0.767195 79.15 2.3228 77.72 4.97281C77.48 5.42281 77.91 5.8328 77.52 8.8828C77.0947 12.7558 76.1808 16.5594 74.8 20.2028L59.1 35.9028C52.84 42.1728 43.88 39.3828 36.23 35.5828C34.62 34.7828 32.55 33.0128 30.76 34.8028L24.11 41.4528C23.6428 41.9214 23.3805 42.5561 23.3805 43.2178C23.3805 43.8795 23.6428 44.5142 24.11 44.9828L79.9 100.763C80.3686 101.23 81.0033 101.492 81.665 101.492C82.3267 101.492 82.9614 101.23 83.43 100.763L90.07 94.1128C91.84 92.3428 89.58 90.0528 88.66 88.1128C85.26 81.1128 82.21 71.6928 87.88 66.0228L104.27 49.7128C107.988 48.5781 111.781 47.7027 115.62 47.0928C118.71 46.6028 119.09 46.9928 119.53 46.7028C122.23 44.9528 125.23 40.5428 122.21 37.5228ZM54.48 83.1028L41.77 70.4028L1 121.963L2.92 123.873L54.48 83.1028Z" stroke-width="0.57" stroke-miterlimit="22.93"/>
                    </svg>  
                </button>
                <p class="hidden group-hover:block absolute bottom-5 right-5 px-3 py-2 text-sm rounded-lg bg-gray-100 dark:bg-[#464646]">Jake Paul</p>
            </div>
            {{-- <div class="group cursor-pointer relative flex justify-center items-center h-[360px] w-[360px]">
                <img class="block h-full w-full object-center" src="https://randomuser.me/api/portraits/men/98.jpg" alt="">
                <div class="hidden group-hover:flex absolute left-5 top-5 actions gap-4">
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </button>
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
                <button class="hidden group-hover:block absolute p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6 fill-dark dark:fill-white" viewBox="0 0 124 125" >
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.21 37.5228L86.92 2.2328C83.92 -0.767195 79.15 2.3228 77.72 4.97281C77.48 5.42281 77.91 5.8328 77.52 8.8828C77.0947 12.7558 76.1808 16.5594 74.8 20.2028L59.1 35.9028C52.84 42.1728 43.88 39.3828 36.23 35.5828C34.62 34.7828 32.55 33.0128 30.76 34.8028L24.11 41.4528C23.6428 41.9214 23.3805 42.5561 23.3805 43.2178C23.3805 43.8795 23.6428 44.5142 24.11 44.9828L79.9 100.763C80.3686 101.23 81.0033 101.492 81.665 101.492C82.3267 101.492 82.9614 101.23 83.43 100.763L90.07 94.1128C91.84 92.3428 89.58 90.0528 88.66 88.1128C85.26 81.1128 82.21 71.6928 87.88 66.0228L104.27 49.7128C107.988 48.5781 111.781 47.7027 115.62 47.0928C118.71 46.6028 119.09 46.9928 119.53 46.7028C122.23 44.9528 125.23 40.5428 122.21 37.5228ZM54.48 83.1028L41.77 70.4028L1 121.963L2.92 123.873L54.48 83.1028Z" stroke-width="0.57" stroke-miterlimit="22.93"/>
                    </svg>  
                </button>
                <p class="hidden group-hover:block absolute bottom-5 right-5 px-3 py-2 text-sm rounded-lg bg-gray-100 dark:bg-[#464646]">Jake Paul</p>
            </div>
            <div class="group cursor-pointer relative flex justify-center items-center h-[360px] w-[360px]">
                <img class="block h-full w-full object-center" src="https://randomuser.me/api/portraits/men/50.jpg" alt="">
                <div class="hidden group-hover:flex absolute left-5 top-5 actions gap-4">
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </button>
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
                <button class="hidden group-hover:block absolute p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6 fill-dark dark:fill-white" viewBox="0 0 124 125" >
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.21 37.5228L86.92 2.2328C83.92 -0.767195 79.15 2.3228 77.72 4.97281C77.48 5.42281 77.91 5.8328 77.52 8.8828C77.0947 12.7558 76.1808 16.5594 74.8 20.2028L59.1 35.9028C52.84 42.1728 43.88 39.3828 36.23 35.5828C34.62 34.7828 32.55 33.0128 30.76 34.8028L24.11 41.4528C23.6428 41.9214 23.3805 42.5561 23.3805 43.2178C23.3805 43.8795 23.6428 44.5142 24.11 44.9828L79.9 100.763C80.3686 101.23 81.0033 101.492 81.665 101.492C82.3267 101.492 82.9614 101.23 83.43 100.763L90.07 94.1128C91.84 92.3428 89.58 90.0528 88.66 88.1128C85.26 81.1128 82.21 71.6928 87.88 66.0228L104.27 49.7128C107.988 48.5781 111.781 47.7027 115.62 47.0928C118.71 46.6028 119.09 46.9928 119.53 46.7028C122.23 44.9528 125.23 40.5428 122.21 37.5228ZM54.48 83.1028L41.77 70.4028L1 121.963L2.92 123.873L54.48 83.1028Z" stroke-width="0.57" stroke-miterlimit="22.93"/>
                    </svg>  
                </button>
                <p class="hidden group-hover:block absolute bottom-5 right-5 px-3 py-2 text-sm rounded-lg bg-gray-100 dark:bg-[#464646]">Jake Paul</p>
            </div>
            <div class="group cursor-pointer relative flex justify-center items-center h-[360px] w-[360px]">
                <img class="block h-full w-full object-center" src="https://randomuser.me/api/portraits/men/78.jpg" alt="">
                <div class="hidden group-hover:flex absolute left-5 top-5 actions gap-4">
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </button>
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
                <button class="hidden group-hover:block absolute p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6 fill-dark dark:fill-white" viewBox="0 0 124 125" >
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.21 37.5228L86.92 2.2328C83.92 -0.767195 79.15 2.3228 77.72 4.97281C77.48 5.42281 77.91 5.8328 77.52 8.8828C77.0947 12.7558 76.1808 16.5594 74.8 20.2028L59.1 35.9028C52.84 42.1728 43.88 39.3828 36.23 35.5828C34.62 34.7828 32.55 33.0128 30.76 34.8028L24.11 41.4528C23.6428 41.9214 23.3805 42.5561 23.3805 43.2178C23.3805 43.8795 23.6428 44.5142 24.11 44.9828L79.9 100.763C80.3686 101.23 81.0033 101.492 81.665 101.492C82.3267 101.492 82.9614 101.23 83.43 100.763L90.07 94.1128C91.84 92.3428 89.58 90.0528 88.66 88.1128C85.26 81.1128 82.21 71.6928 87.88 66.0228L104.27 49.7128C107.988 48.5781 111.781 47.7027 115.62 47.0928C118.71 46.6028 119.09 46.9928 119.53 46.7028C122.23 44.9528 125.23 40.5428 122.21 37.5228ZM54.48 83.1028L41.77 70.4028L1 121.963L2.92 123.873L54.48 83.1028Z" stroke-width="0.57" stroke-miterlimit="22.93"/>
                    </svg>  
                </button>
                <p class="hidden group-hover:block absolute bottom-5 right-5 px-3 py-2 text-sm rounded-lg bg-gray-100 dark:bg-[#464646]">Jake Paul</p>
            </div>
            <div class="group cursor-pointer relative flex justify-center items-center h-[360px] w-[360px]">
                <img class="block h-full w-full object-center" src="https://randomuser.me/api/portraits/men/63.jpg" alt="">
                <div class="hidden group-hover:flex absolute left-5 top-5 actions gap-4">
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </button>
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
                <button class="hidden group-hover:block absolute p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6 fill-dark dark:fill-white" viewBox="0 0 124 125" >
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.21 37.5228L86.92 2.2328C83.92 -0.767195 79.15 2.3228 77.72 4.97281C77.48 5.42281 77.91 5.8328 77.52 8.8828C77.0947 12.7558 76.1808 16.5594 74.8 20.2028L59.1 35.9028C52.84 42.1728 43.88 39.3828 36.23 35.5828C34.62 34.7828 32.55 33.0128 30.76 34.8028L24.11 41.4528C23.6428 41.9214 23.3805 42.5561 23.3805 43.2178C23.3805 43.8795 23.6428 44.5142 24.11 44.9828L79.9 100.763C80.3686 101.23 81.0033 101.492 81.665 101.492C82.3267 101.492 82.9614 101.23 83.43 100.763L90.07 94.1128C91.84 92.3428 89.58 90.0528 88.66 88.1128C85.26 81.1128 82.21 71.6928 87.88 66.0228L104.27 49.7128C107.988 48.5781 111.781 47.7027 115.62 47.0928C118.71 46.6028 119.09 46.9928 119.53 46.7028C122.23 44.9528 125.23 40.5428 122.21 37.5228ZM54.48 83.1028L41.77 70.4028L1 121.963L2.92 123.873L54.48 83.1028Z" stroke-width="0.57" stroke-miterlimit="22.93"/>
                    </svg>  
                </button>
                <p class="hidden group-hover:block absolute bottom-5 right-5 px-3 py-2 text-sm rounded-lg bg-gray-100 dark:bg-[#464646]">Jake Paul</p>
            </div>
            <div class="group cursor-pointer relative flex justify-center items-center h-[360px] w-[360px]">
                <img class="block h-full w-full object-center" src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
                <div class="hidden group-hover:flex absolute left-5 top-5 actions gap-4">
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </button>
                    <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                        <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
                <button class="hidden group-hover:block absolute p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6 fill-dark dark:fill-white" viewBox="0 0 124 125" >
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M122.21 37.5228L86.92 2.2328C83.92 -0.767195 79.15 2.3228 77.72 4.97281C77.48 5.42281 77.91 5.8328 77.52 8.8828C77.0947 12.7558 76.1808 16.5594 74.8 20.2028L59.1 35.9028C52.84 42.1728 43.88 39.3828 36.23 35.5828C34.62 34.7828 32.55 33.0128 30.76 34.8028L24.11 41.4528C23.6428 41.9214 23.3805 42.5561 23.3805 43.2178C23.3805 43.8795 23.6428 44.5142 24.11 44.9828L79.9 100.763C80.3686 101.23 81.0033 101.492 81.665 101.492C82.3267 101.492 82.9614 101.23 83.43 100.763L90.07 94.1128C91.84 92.3428 89.58 90.0528 88.66 88.1128C85.26 81.1128 82.21 71.6928 87.88 66.0228L104.27 49.7128C107.988 48.5781 111.781 47.7027 115.62 47.0928C118.71 46.6028 119.09 46.9928 119.53 46.7028C122.23 44.9528 125.23 40.5428 122.21 37.5228ZM54.48 83.1028L41.77 70.4028L1 121.963L2.92 123.873L54.48 83.1028Z" stroke-width="0.57" stroke-miterlimit="22.93"/>
                    </svg>  
                </button>
                <p class="hidden group-hover:block absolute bottom-5 right-5 px-3 py-2 text-sm rounded-lg bg-gray-100 dark:bg-[#464646]">Jake Paul</p>
            </div> --}}

            {{-- <div id="videoContainer" class="">
                <video autoplay="true" id="videoElement"> </video>
            </div> --}}
        </div>
        <div class="bottom h-[8%] mt-[1%] flex flex-col items-center justify-center">
            <div class="flex gap-4">
                <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                    </svg>
                </button>
                <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </button>
                <button class="p-3 bg-gray-100 rounded hover:bg-gray-300 dark:bg-[#464646] dark:hover:bg-[#333]">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    </svg>
                </button>
                <button class="p-3 bg-red-500 rounded hover:bg-red-300">
                    <svg  class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        <path d="M16.707 3.293a1 1 0 010 1.414L15.414 6l1.293 1.293a1 1 0 01-1.414 1.414L14 7.414l-1.293 1.293a1 1 0 11-1.414-1.414L12.586 6l-1.293-1.293a1 1 0 011.414-1.414L14 4.586l1.293-1.293a1 1 0 011.414 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="right flex flex-col w-[25%] bg-gray-100 dark:bg-[#222] h-[800px] py-8">
        <p class="font-bold uppercase text-center mb-4">Live Chat</p>
        <ul class="chat p-4 flex-auto">
            <li class="sender">
                <div class="user flex items-center gap-2">
                    <div class="avatar h-12 w-12 rounded-full text-white bg-red-500 flex items-center justify-center">
                        J
                    </div>
                    <p class="user font-bold">Jyotirmay Barman</p>
                </div>
                <p class="message p-2 ml-14 bg-gray-300 dark:bg-[#333] inline-block rounded-xl rounded-tl-none">
                    What's up peopple ?
                </p>
            </li>
            <li class="replier mt-4 flex flex-col items-end">
                <div class="user flex items-center gap-2">
                    <div class="avatar order-2 h-12 w-12 rounded-full text-white bg-blue-500 flex items-center justify-center">
                        J
                    </div>
                    <p class="user font-bold">John Doe</p>
                </div>
                <p class="message p-2 mr-14 bg-gray-300 dark:bg-[#333] inline-block rounded-xl rounded-tr-none">
                    What's up peopple ?
                </p>
            </li>
        </ul>
        <div class="msg-input flex items-center justify-center gap-4">
            <textarea rows="1" cols="22" class="px-2 py-3 border resize-none border-gray-300 dark:border-[#464646] dark:bg-[#2c2c2c] rounded outline-[#1f1f1f]"></textarea>
            <button class="py-3 px-4 bg-blue-500 rounded hover:bg-blue-700">
                <svg class="h-6 w-5 fill-white" viewBox="0 0 123 123" fill="none">
                    <g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33044 44.5801L117.33 0.370049C117.986 0.0447391 118.724 -0.0749663 119.449 0.0266263C120.173 0.128219 120.85 0.446368 121.391 0.939363C121.931 1.43236 122.31 2.07719 122.478 2.78932C122.646 3.50144 122.594 4.24763 122.33 4.93005L78.3304 120.54C78.0787 121.205 77.6372 121.781 77.0607 122.198C76.4843 122.614 75.7983 122.852 75.0879 122.882C74.3775 122.911 73.6739 122.732 73.0646 122.365C72.4553 121.999 71.9671 121.462 71.6604 120.82L53.9304 84.14L89.1204 33.7701L38.8504 68.86L2.06044 51.2401C1.42161 50.933 0.886641 50.4457 0.521545 49.8381C0.156449 49.2306 -0.0228012 48.5295 0.00590988 47.8213C0.034621 47.1131 0.270038 46.4288 0.683113 45.8528C1.09619 45.2768 1.66885 44.8344 2.33044 44.5801V44.5801Z"/>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>
<script src="https://sdk.videosdk.live/js-sdk/0.0.20/videosdk.js"></script>
<script>
    let response = document.querySelector('#response');
    let token = document.querySelector('#token');
    response = JSON.parse(response.value); 
    // console.log(response);
    const meetingId = response.meetingId
    const meetingIdBox = document.querySelector('#meetingIdBox');
    meetingIdBox.value = meetingId;

    // console.log(window.VideoSDK);
    window.VideoSDK.config(token);
    
    // Initilize meeting
    const meeting = VideoSDK.initMeeting({
        meetingId: meetingId, // required
        name: "Jyotirmay", // required
        participantId:response.id // optional, default: SDK will generate
        // micEnabled: "<Flag-to-enable-mic>", // optional, default: true
        // webcamEnabled: "<Flag-to-enable-webcam>", // optional, default: true
        // maxResolution: "<Maximum-resolution>", // optional, default: "hd"
    });
    const onPress = () => {
        // Joining Meeting
        meeting?.join();
    };
    
    onPress();
    console.log(meeting);
    
    let video = document.querySelector("#videoElement");
    navigator.mediaDevices.getUserMedia({
        video: true,
        audio: true,
    }).then((stream) => {
        // console.log(stream);
        video.srcObject = stream;
        video.play();
    });




</script>
@endsection