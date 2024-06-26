<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Home" href="{{ route('home') }}" :isActive="request()->routeIs('home')">
        <x-slot name="icon">
            <x-eos-home class="flex-shrink-0 w-8 h-8" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Cari Tanah" href="{{url('/tanah/search')}}" :isActive="request()->is('tanah/search')">
        <x-slot name="icon">
            <x-eos-search class="flex-shrink-0 w-8 h-8" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="Rekomendasikan Lahan" href="{{url('/tanah/rekomendasi')}}" :isActive="request()->is('tanah/rekomendasi')">
        <x-slot name="icon">
            <x-eos-recommend-o  class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="Hasil Rekomendasi" href="{{ route('rekomendasi.hasil.index') }}" :isActive="request()->routeIs('rekomendasi.hasil.index')">
        <x-slot name="icon">
            <x-eos-fact-check-o class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Metode Pembobotan" :active="Str::startsWith(request()->route()->uri(), 'user')">
        <x-slot name="icon">
            <x-eos-balance class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Pembobotan AHP" href="{{ route('user.bobot.ahp.index') }}"    
            :active="request()->routeIs('user.bobot.ahp.index')" />
        <x-sidebar.sublink title="Pembobotan Langsung" href="{{ route('user.bobot.langsung.index') }}"
            :active="request()->routeIs('user.bobot.langsung.index')" />

    </x-sidebar.dropdown>


    <x-sidebar.dropdown title="Account Setting" :active="Str::startsWith(request()->route()->uri(), 'account')">
        <x-slot name="icon">
            <x-eos-manage-accounts class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Profile" href="{{route('account.profile.edit')}}"
            :active="request()->routeIs('account.profile.edit')" />
        <x-sidebar.sublink title="My Favorite" href="{{url('account/myfavorites')}} "
            :active="request()->is('account/myfavorites')" />

    </x-sidebar.dropdown>
    @role('Admin')
    <x-sidebar.dropdown title="Admin Privilage" :active="Str::startsWith(request()->route()->uri(), 'admin')">
        <x-slot name="icon">
            <x-eos-admin class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="User Management" href="{{url('/admin/users')}}"
            :active="request()->is('admin/users')" />
        <x-sidebar.sublink title="Product Management" href="{{url('/admin/products')}}"
            :active="request()->is('admin/products')" />
        <x-sidebar.sublink title="Preset Preference" href="{{url('/admin/presetpreferences')}}"
            :active="request()->is('admin/presetpreferences')" />
        {{-- <x-sidebar.sublink title="AHP Wighting Admin" href="{{url('admin/ahp')}}"
            :active="request()->is('admin/ahp')" /> --}}

    </x-sidebar.dropdown>
@endrole


</x-perfect-scrollbar>