
<x-app-layout>
    @section('title', 'Home')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('LATAR BELAKANG') }}
            </h2>

        </div>
    </x-slot>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 text-center text-white">
        <div
            class="inline-block p-6 bg-indigo-500 border border-gray-200 rounded-lg shadow hover:bg-indigo-600 dark:bg-blue-600 dark:border-gray-700 dark:hover:bg-blue-800 m-auto">
            <h2 class="font-semibold text-lg">Sistem Penunjang Keputusan</h2>
            <h4 class="inline-block">
                Pemilihan Lahan Tanah Menggunakan Metode AHP dan Profile Matching
            </h4>
        </div>
        <div class="card-body p-0 text-red-500 dark:text-white">

            <div class="w-full text-center ">
                <h3 class="p-4 text-justify text-lg ">
                    Alur penggunaan sistem yaitu <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>

                    <strong> Pembobotan antar kriteria menggunakan AHP<svg
                            class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                        Memasukkan nilai preferensi kriteria<svg
                            class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                        Hasil rekomendasi </strong>
                </h3>
            </div>


            <div class="w-full text-center mb-4">
                <a href="{{ route('user.bobot.ahp.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-4 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Mulai</a>
            </div>
            <div class="w-full flex justify-center mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.809477035386!2d99.71766327349324!3d0.12063366429651758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302a707774413aa7%3A0xd969f9bd25e99320!2sGersindo%20Minang%20Plantation%20-%20POM!5e0!3m2!1sid!2sid!4v1717919863207!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

</x-app-layout>