<x-app-layout>
    @section('title', 'Presetreference')
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Detail') }}
            </h2>

        </div>
    </x-slot>
    <a class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
    href="{{ route('presetpreferences.index') }}"> Back</a>
<a href="{{ route('presetpreferences.edit',$presetpreference->id) }}"
    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Edit</a>

 

        <div class="relative overflow-x-auto mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Preset Preference Name</strong></td>
                    <td  scope="col" class="px-6 py-3">{{ $presetpreference->name }}</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Details</strong></td>
                    <td  scope="col" class="px-6 py-3">{{ $presetpreference->detail }}</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Harga</strong></td>
                    <td  scope="col" class="px-6 py-3"> Rp.{{ $presetpreference->harga }} per tahun</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Perizinan Regulasi</strong> </td>
                    <td  scope="col" class="px-6 py-3">
                        @if($presetpreference->perizinan_regulasi == 5)
                            Mudah
                        @elseif($presetpreference->perizinan_regulasi == 10)
                            Sedang
                        @elseif($presetpreference->perizinan_regulasi == 15)
                             Sulit
                        @elseif($presetpreference->perizinan_regulasi == 20)
                            Sangat Sulit
                        @endif
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Ketersediaan Air</strong></td>
                    <td  scope="col" class="px-6 py-3">
                        @if($presetpreference->ketersediaan_air == 5)
                            Tersedia Sepenuhnya
                        @elseif($presetpreference->ketersediaan_air == 10)
                            Tersedia Dengan Baik
                        @elseif($presetpreference->ketersediaan_air == 15)
                             Ketersediaan Terbatas
                        @elseif($presetpreference->ketersediaan_air == 20)
                            Ketersediaan Terbatas Sekali
                        @endif
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Lokasi</strong></td>
                    <td  scope="col" class="px-6 py-3">
                        @if($presetpreference->lokasi == 5)
                            Dekat
                        @elseif($presetpreference->lokasi == 10)
                            Agak Jauh
                        @elseif($presetpreference->lokasi == 15)
                             Jauh
                        @elseif($presetpreference->lokasi == 20)
                           Sangat  Jauh 
                        @endif
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Potensi Produksi</strong></td>
                    <td  scope="col" class="px-6 py-3">
                        @if($presetpreference->potensi_produksi == 5)
                            Produktif
                        @elseif($presetpreference->potensi_produksi == 10)
                            Stabil
                        @elseif($presetpreference->potensi_produksi == 15)
                             Menengah 
                        @elseif($presetpreference->potensi_produksi == 20)
                           Rendah 
                        @endif
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td  scope="col" class="px-6 py-3"><strong>Aksesibilitas</strong></td>
                    <td  scope="col" class="px-6 py-3">
                        @if($presetpreference->potensi_produksi == 5)
                            Sangat Mudah Diakses
                        @elseif($presetpreference->potensi_produksi == 10)
                            Mudah Diakses
                        @elseif($presetpreference->potensi_produksi == 15)
                            Agak Sulit Diakses
                        @elseif($presetpreference->potensi_produksi == 20)
                            Sangat Sulit Diaksess
                        @endif
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td width='30%'><strong>Kondisi Lingkungan</strong></td>
                    <td  scope="col" class="px-6 py-3">
                        @if($presetpreference->kondisi_lingkungan == 5)
                            Baik
                        @elseif($presetpreference->kondisi_lingkungan == 10)
                            Cukup
                        @elseif($presetpreference->kondisi_lingkungan == 15)
                           Buruk
                        @elseif($presetpreference->kondisi_lingkungan == 20)
                            Sangat Buruk
                        @endif
                    </td>
                </tr>

            </table>
    </div>
</x-app-layout>