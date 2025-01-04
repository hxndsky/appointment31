@extends('layouts.app')
<!-- DOKTER -->
@section('title', 'Data Diri Dokter')
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
                    Data Diri Dokter
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
                                        Edit Data Dokter
                                    </h2>
                                </div>
                            </div>

                            <!-- End Header -->

                            <!-- Table -->
                            <div class="p-4 overflow-y-auto">
                                @if (Session::has('success'))
                                    <div class="mb-4 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
                                        role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="mb-4 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500"
                                        role="alert" tabindex="-1" aria-labelledby="hs-soft-color-danger-label">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                <form action="{{ route('dokter.profile.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <!-- Nama -->
                                    <div class="mb-4">
                                        <label for="nama"
                                            class="block text-gray-800 dark:text-neutral-400">Nama</label>
                                        <input type="text" id="nama" name="nama"
                                            value="{{ old('nama', $dokter->nama) }}"
                                            class="mt-2 px-4 py-2 w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"">
                                        @error('nama')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="email"
                                            class="block text-gray-800 dark:text-neutral-400">Email</label>
                                        <input type="email" id="email" name="email"
                                            value="{{ old('email', $dokter->email) }}"
                                            class="mt-2 px-4 py-2 w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"">
                                        @error('email')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Alamat -->
                                    <div class="mb-4">
                                        <label for="alamat"
                                            class="block text-gray-800 dark:text-neutral-400">Alamat</label>
                                        <textarea id="alamat" name="alamat"
                                            class="mt-2 px-4 py-2 w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"">{{ old('alamat', $dokter->alamat) }}</textarea>
                                        @error('alamat')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- No HP -->
                                    <div class="mb-4">
                                        <label for="no_hp" class="block text-gray-800 dark:text-neutral-400">No
                                            HP</label>
                                        <input type="text" id="no_hp" name="no_hp"
                                            value="{{ old('no_hp', $dokter->no_hp) }}"
                                            class="mt-2 px-4 py-2 w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"">
                                        @error('no_hp')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Poli -->
                                    <div class="mb-4">
                                        <label for="id_poli"
                                            class="block text-gray-800 dark:text-neutral-400">Poli</label>
                                        <select id="id_poli" name="id_poli"
                                            class="mt-2 px-4 py-2 w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white"">
                                            @foreach ($polis as $poli)
                                                <option value="{{ $poli->id }}"
                                                    {{ $dokter->id_poli == $poli->id ? 'selected' : '' }}>
                                                    {{ $poli->nama_poli }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_poli')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="password"
                                            class="block text-gray-800 dark:text-neutral-400">Password</label>
                                        <div class="relative">
                                            <input type="password" id="password" name="password"
                                                class="mt-2 px-4 py-2 w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white""
                                                placeholder="Kosongkan jika tidak ingin mengubah password">

                                            <button type="button" id="toggle-password"
                                                class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                                <svg id="toggle-password-icon" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" class="w-5 h-5">
                                                    <path class="hs-password-active:hidden"
                                                        d="M9.88 9.88a3 3 0 1 0 4.24 4.24">
                                                    </path>
                                                    <path class="hs-password-active:hidden"
                                                        d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                                    </path>
                                                    <path class="hs-password-active:hidden"
                                                        d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                                    </path>
                                                    <line class="hs-password-active:hidden" x1="2" x2="22"
                                                        y1="2" y2="22"></line>
                                                    <path class="hidden hs-password-active:block"
                                                        d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                    <circle class="hidden hs-password-active:block" cx="12"
                                                        cy="12" r="3"></circle>
                                                </svg>
                                            </button>
                                            @error('password')
                                                <small class="text-red-500">{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mb-4">
                                        <label for="password_confirmation"
                                            class="block text-gray-800 dark:text-neutral-400">Konfirmasi Password</label>
                                        <div class="relative">
                                            <input type="password" id="password_confirmation"
                                                name="password_confirmation"
                                                class="mt-2 px-4 py-2 w-full border border-gray-200 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white""
                                                placeholder="Kosongkan jika tidak ingin mengubah password">
                                            <button type="button" id="toggle-password_confirmation"
                                                class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                                <svg id="toggle-password_confirmation-icon"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                    <path class="hs-password-active:hidden"
                                                        d="M9.88 9.88a3 3 0 1 0 4.24 4.24">
                                                    </path>
                                                    <path class="hs-password-active:hidden"
                                                        d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                                    </path>
                                                    <path class="hs-password-active:hidden"
                                                        d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                                    </path>
                                                    <line class="hs-password-active:hidden" x1="2" x2="22"
                                                        y1="2" y2="22"></line>
                                                    <path class="hidden hs-password-active:block"
                                                        d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                    <circle class="hidden hs-password-active:block" cx="12"
                                                        cy="12" r="3"></circle>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="flex justify-end items-center gap-x-2 px-4">
                                        <a href="{{ route('dokter.dashboard.index') }}"
                                            class="py-2 px-3 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700">
                                            Kembali
                                        </a>
                                        <button type="submit"
                                            class="py-2 px-3 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- End Table -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
