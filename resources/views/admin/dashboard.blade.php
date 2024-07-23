<x-app-layout>
    <x-slot name="header" class="flex flex-row items-center justify-end gap-2">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 space-y-4 sm:p-6 sm:space-y-6">
            Selamat datang admin
        </div>
    </div>
    <!-- End Content -->
</x-app-layout>