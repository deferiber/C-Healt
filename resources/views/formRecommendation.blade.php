<x-app-layout>
    <x-slot name="header" class="flex flex-row items-center justify-end gap-2">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ $title }}
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="w-full lg:ps-64">
        <!-- Card Section -->
        <div class="max-w-2xl px-4 py-4 mx-auto sm:px-4 lg:px-4 lg:py-4">
            <!-- Card -->
            <div class="p-4 bg-white shadow rounded-xl sm:p-7 dark:bg-neutral-900">
                <div class="mb-8 text-center">
                    <h2 class="text-2xl font-bold text-gray-800 md:text-3xl dark:text-neutral-200">
                        Tambah data rekomendasi
                    </h2>
                </div>

                <form action="{{ route('recommendations.store') }}" method="post">
                    @csrf
                    <!-- Section -->
                    <div
                        class="py-6 border-t border-gray-200 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                        <div class="sm:col-span-3">
                            <label for="af-account-bio"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Score Minimal
                            </label>
                        </div>
                        <div class="sm:col-span-9">
                            <input name="min_score" id="min_score" type="min_score"
                                class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        </div>
                        <div class="sm:col-span-3">
                            <label for="af-account-bio"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Score Maximal
                            </label>
                        </div>
                        <!-- End Col -->
                        <div class="sm:col-span-9">
                            <input name="max_score" id="max_score" type="max_score"
                                class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        </div>


                        <!-- End Col -->
                        <div class="sm:col-span-3">
                            <label for="af-account-bio"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Rekomendasi
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <textarea name="recommendation" id="af-account-bio"
                                class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="6"></textarea>
                        </div>
                        <!-- End Col -->

                    </div>
                    <!-- End Section -->
                    <div class="flex justify-end mt-5 gap-x-2">
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                            Batal
                        </button>
                        <button type="submit"
                            class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Simpan
                        </button>
                    </div>
                </form>


            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->
    </div>
    <!-- End Content -->
</x-app-layout>
