@extends('layouts.app')
<!-- DOKTER -->
@section('title', 'Riwayat Pasien')
@section('content')
    <!-- Breadcrumb -->
    <div
        class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
        <div class="flex items-center py-2">
            <!-- Navigation Toggle -->
            <button type="button"
                class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2" />
                    <path d="M15 3v18" />
                    <path d="m8 9 3 3-3 3" />
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="ms-3 flex items-center whitespace-nowrap">
                <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                    Dashboard
                    <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16"
                        height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
                    Riwayat Pasien
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Sidebar -->
    <div id="hs-application-sidebar"
        class="hs-overlay  [--auto-close:lg]
hs-overlay-open:translate-x-0
-translate-x-full transition-all duration-300 transform
w-[260px] h-full
hidden
fixed inset-y-0 start-0 z-[60]
bg-white border-e border-gray-200
lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
dark:bg-neutral-800 dark:border-neutral-700"
        role="dialog" tabindex="-1" aria-label="Sidebar">
        <div class="relative flex flex-col h-full max-h-full">
            <div class="px-6 pt-4">
                <!-- Logo -->
                <a class="flex-none rounded-md text-2xl inline-block font-bold focus:outline-none focus:opacity-80"
                    href="{{ Auth::user()->role == 'Admin' ? route('admin.dashboard.index') : (Auth::user()->role == 'Dokter' ? route('dokter.dashboard.index') : route('dashboard')) }}"
                    aria-label="Preline">
                    <h1>POLI<span class="text-blue-600">KLINIK</span></h1>
                </a>
                <!-- End Logo -->
            </div>

            <!-- Content -->
            <div
                class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                    <ul class="flex flex-col space-y-1">
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                                href="{{ Auth::user()->role == 'Admin' ? route('admin.dashboard.index') : (Auth::user()->role == 'Dokter' ? route('dokter.dashboard.index') : route('dashboard')) }}">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                                Dashboard
                            </a>
                        </li>

                        <li class="hs-accordion" id="account-accordion">
                            <button type="button"
                                class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200"
                                aria-expanded="true" aria-controls="account-accordion-child">
                                <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="18" cy="15" r="3" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                    <path d="m21.7 16.4-.9-.3" />
                                    <path d="m15.2 13.9-.9-.3" />
                                    <path d="m16.6 18.7.3-.9" />
                                    <path d="m19.1 12.2.3-.9" />
                                    <path d="m19.6 18.7-.4-1" />
                                    <path d="m16.8 12.3-.4-1" />
                                    <path d="m14.3 16.6 1-.4" />
                                    <path d="m20.7 13.8 1-.4" />
                                </svg>
                                Periksa

                                <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>

                                <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div id="account-accordion-child"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                role="region" aria-labelledby="account-accordion">
                                <ul class="ps-8 pt-1 space-y-1">
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200"
                                            href="{{ route('dokter.jadwal-periksa.index') }}">
                                            Jadwal Periksa
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200"
                                            href="{{ route('dokter.periksa-pasien.index') }}">
                                            Periksa Pasien
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="hs-accordion" id="projects-accordion">
                            <button type="button"
                                class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200"
                                aria-expanded="true" aria-controls="projects-accordion-child">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                </svg>
                                Pasien

                                <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>

                                <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div id="projects-accordion-child"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                role="region" aria-labelledby="projects-accordion">
                                <ul class="ps-8 pt-1 space-y-1">
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-200"
                                            href="{{ route('dokter.riwayat-pasien.index') }}">
                                            Riwayat Pasien
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                        Riwayat Pasien
                                    </h2>
                                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                                        List pasien sudah diperiksa
                                    </p>

                                </div>

                                <div>
                                    <div class="py-3 px-4 inline-flex gap-x-2">
                                        <form action="{{ route('dokter.riwayat-pasien.index') }}" method="GET">
                                            <div class="relative max-w-xs w-full">
                                                <label for="hs-table-search" class="sr-only">Search</label>
                                                <input type="text" name="search" id="hs-table-search"
                                                    class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                    placeholder="Cari Riwayat Pasien..." value="{{ request('search') }}">
                                                <div
                                                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                                    <svg class="size-4 text-gray-400 dark:text-neutral-500"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <path d="m21 21-4.3-4.3"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- End Header -->

                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            No.
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Nama Pasien
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Alamat
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            No. KTP
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            No. Telepon
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            No. Rekam Medis
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @forelse ($riwayatPasien as $item)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $item->daftarPoli->pasien->nama }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $item->daftarPoli->pasien->alamat }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $item->daftarPoli->pasien->no_ktp }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $item->daftarPoli->pasien->no_hp }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $item->daftarPoli->pasien->no_rm }}
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                <a href="{{ route('dokter.riwayat-pasien.show', $item->id) }}"
                                                    class="py-2 px-4 inline-flex items-center text-sm font-medium rounded-lg border bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20">
                                                    Detail Periksa
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center p-4 text-gray-500">Belum ada riwayat
                                                pasien yang diperiksa.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
