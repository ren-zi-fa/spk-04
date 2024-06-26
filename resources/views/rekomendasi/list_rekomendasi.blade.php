<x-app-layout>
    @section('title', 'List-Rekomendasi')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Berikut hasil rekomendasi produk berdasarkan bobot kriteria dan nilai preferensi yang Anda
                masukkan') }}
            </h2>

        </div>
    </x-slot>

    <div id="accordion-color" data-accordion="collapse"
        data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
        <h2 id="accordion-color-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                aria-controls="accordion-color-body-1">
                <span> Input Bobot Antar Kriteria</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <div class="relative overflow-x-auto shadow-md ">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C1
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Harga
                                </td>
                                <td class="px-6 py-4">
                                    {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_harga * 100
                                    ,0,",",".") . ' %' }}
                                </td>

                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C2
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Perizinan Regulasi
                                </td>
                                <td class="px-6 py-4">
                                    {{number_format($bobotKriteriaDanPreferensiKriteria->bobot_perizinan_regulasi * 100
                                    ,0,",",".") . ' %'}}
                                </td>

                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C3
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Ketersediaan Air
                                </td>
                                <td class="px-6 py-4">
                                    {{
                                    number_format($bobotKriteriaDanPreferensiKriteria->bobot_ketersediaan_air * 100
                                    ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C4
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Lokasi
                                </td>
                                <td class="px-6 py-4">
                                    {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_lokasi * 100
                                    ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C5
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Potensi penduduk
                                </td>
                                <td class="px-6 py-4">
                                    {{
                                    number_format($bobotKriteriaDanPreferensiKriteria->bobot_potensi_produksi * 100
                                    ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C6
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Aksesibilitas
                                </td>
                                <td class="px-6 py-4">
                                    {{ number_format($bobotKriteriaDanPreferensiKriteria->bobot_aksesibilitas *
                                    100 ,0,",",".") . ' %' }}
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C7
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Kondisi Lingkungan
                                </td>
                                <td class="px-6 py-4">
                                    {{
                                    number_format($bobotKriteriaDanPreferensiKriteria->bobot_kondisi_lingkungan * 100
                                    ,0,",",".") . ' %'
                                    }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        @php
        $kriteria = $bobotKriteriaDanPreferensiKriteria;
        function isNumber($str)
        {
        if ($str == trim($str) && strpos($str, ' ') !== false) {
        // echo 'has spaces, but not at beginning or end';
        return false;
        } else { return true;}
        }
        function isKriteriaDiabaikan($str)
        {
        if ($str === 'Kriteria Diabaikan') {return true;} else { return false; }
        }
        function isDiabaikan($str)
        {
        if ($str === 'Kriteria Diabaikan') {$str = '-'; return $str;} else { return $str;}
        }
        @endphp
        <h2 id="accordion-color-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                aria-controls="accordion-color-body-3">
                <span>Input Preferensi Kriteria Produk</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                <div class="relative overflow-x-auto shadow-md ">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C1
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Harga
                                </td>
                                <td class="px-6 py-4">
                                    @if(isNumber($kriteria->pref_harga))Rp{{
                                    number_format($kriteria->pref_harga,0,",",".") }}
                                    @else {{ isDiabaikan($kriteria->pref_harga) }} @endif
                                </td>

                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C2
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Perizinan Regulasi
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_perizinan_regulasi == 5)
                                    {{ isDiabaikan("Mudah") }}
                                    @elseif($kriteria->pref_perizinan_regulasi == 10)
                                    {{ isDiabaikan("Sedang") }}
                                    @elseif($kriteria->pref_perizinan_regulasi == 15)
                                    {{ isDiabaikan("Sulit") }}
                                    @elseif($kriteria->pref_perizinan_regulasi == 20)
                                    {{ isDiabaikan("Sangat Sulit") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_perizinan_regulasi) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_perizinan_regulasi)))
                                    @endif
                                </td>

                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C3
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Ketersediaan Air
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_ketersediaan_air == 5)
                                    {{ isDiabaikan("Tersedia Sepenuhnya") }}
                                    @elseif($kriteria->pref_ketersediaan_air == 10)
                                    {{ isDiabaikan("Tersedia Dengan Baik") }}
                                    @elseif($kriteria->pref_ketersediaan_air == 15)
                                    {{ isDiabaikan("Ketersediaan Terbatas") }}
                                    @elseif($kriteria->pref_ketersediaan_air == 20)
                                    {{ isDiabaikan("Ketersediaan Terbatas Sekali") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_ketersediaan_air) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_ketersediaan_air)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C4
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Lokasi
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_lokasi == 5)
                                    {{ isDiabaikan("Dekat Agak Jauh") }}
                                    @elseif($kriteria->pref_lokasi == 10)
                                    {{ isDiabaikan("Agak Jauh") }}
                                    @elseif($kriteria->pref_lokasi == 15)
                                    {{ isDiabaikan("Jauh") }}
                                    @elseif($kriteria->pref_lokasi == 20)
                                    {{ isDiabaikan("Sangat Jauh") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_lokasi) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_lokasi)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C5
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Potensi penduduk
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_potensi_produksi == 5)
                                    {{ isDiabaikan("Produktif") }}
                                    @elseif($kriteria->pref_potensi_produksi == 10)
                                    {{ isDiabaikan("Stabil") }}
                                    @elseif($kriteria->pref_potensi_produksi == 15)
                                    {{ isDiabaikan("Menengah") }}
                                    @elseif($kriteria->pref_potensi_produksi == 20)
                                    {{ isDiabaikan("Rendah") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_potensi_produksi) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_potensi_produksi)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C6
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Aksesibilitas
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_aksesibilitas == 5)
                                    {{ isDiabaikan("Sangat Mudah Diakses") }}
                                    @elseif($kriteria->pref_aksesibilitas == 10)
                                    {{ isDiabaikan("Mudah Diakses") }}
                                    @elseif($kriteria->pref_aksesibilitas == 15)
                                    {{ isDiabaikan("Agak Sulit Diakses") }}
                                    @elseif($kriteria->pref_aksesibilitas == 20)
                                    {{ isDiabaikan("Sangat Sulit Diakses") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_aksesibilitas) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_aksesibilitas)))
                                    @endif
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    C7
                                </th>
                                <td class="px-6 py-4 font-bold text-lg">
                                    Kondisi Lingkungan
                                </td>
                                <td class="px-6 py-4">
                                    @if($kriteria->pref_kondisi_lingkungan == 50)
                                    {{ isDiabaikan("Baik") }}
                                    @elseif($kriteria->pref_kondisi_lingkungan == 10)
                                    {{ isDiabaikan("Cukup") }}
                                    @elseif($kriteria->pref_kondisi_lingkungan == 15)
                                    {{ isDiabaikan("Buruk") }}
                                    @elseif($kriteria->pref_kondisi_lingkungan == 20)
                                    {{ isDiabaikan("Sangat Buruk") }}
                                    @else
                                    {{ isDiabaikan($kriteria->pref_kondisi_lingkungan) }}
                                    @endif
                                    @if(!(isKriteriaDiabaikan($kriteria->pref_kondisi_lingkungan)))
                                    @endif
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto mt-5">
        <table class="w-full text-sm text-left rtl:text-right">
            <caption
                class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Hasil Rekomendasi Produk

            </caption>
            <thead
                class="text-xs uppercase bg-text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Peringkat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Tanah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Skor Rekomendasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        @if ($key===0)
                        <x-eos-stars class="flex-shrink-0 w-6 h-6 inline-block me-8" /> @else {{ $key+1 }}
                        @endif
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->n_bobot }}
                    </td>
                    <td class="px-6 py-4">
                        Rp{{ number_format($product->harga,0,",",".") }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->detail }}
                    </td>
                    <td class="px-6 py-4">
                        @if ( !($product->fav_product_id) )
                        <form action="{{ route('myfavorites.store',$product->id) }}" method="POST">
                            <a class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-xs w1/2 px-5 py-2.5 text-center me-2 mb-2"
                                href="{{ route('rekomendasi.hasil.product.detail',$product->id) }}">
                                Detail</a>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            @csrf
                            <button type="submit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg
                                    class="w-6 h-6 text-blue-600 dark:text-white inline-block" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                </svg>
                                Add to
                                favorite</button>

                        </form>
                        @else
                        <form action="{{ route('myfavorites.destroy',$product->id) }}" method="POST">

                            <a class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                href="{{ route('search.show',$product->id) }}">Detail</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-semibold text-red-700 dark:text-red-700  hover:underline">
                                <svg class="w-6 h-6 text-blue-600 dark:text-white inline-block" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                </svg>
                                Remove from favorite</button>

                        </form>
                        @endif

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>