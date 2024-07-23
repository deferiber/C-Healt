<x-app-layout>
    <x-slot name="header" class="flex flex-row items-center justify-end gap-2">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Edit data
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="w-full lg:ps-64">
        <!-- Card Section -->
        <div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8">
            <!-- Card -->
            <div class="p-4 bg-white shadow rounded-xl sm:p-7 dark:bg-neutral-800">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                        Data Lab CVT
                    </h2>
                </div>

                <form action="{{ route('labcvts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Grid -->
                    <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
                        <div class="sm:col-span-3">
                            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Logo
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="flex items-center gap-5">
                                <img class="inline-block rounded-full size-16 ring-2 ring-white dark:ring-neutral-900"
                                    src="../assets/img/160x160/img1.jpg" alt="Image Description">
                                <div class="flex gap-x-2">
                                    <div>
                                        <input name="logo" type="file"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="af-account-full-name"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Nama Lembaga
                            </label>

                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input name="nama_lembaga" id="nama_lembaga" type="text"
                                    class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="nama lembaga">
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="af-account-email"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Alamat
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <input name="alamat" id="alamat" type="text"
                                class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="alamat">
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="af-account-email"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Lokasi
                            </label>
                        </div>

                        <div class="sm:col-span-9">
                            <input name="map" id="map" type="text"
                                class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="map lokasi">
                        </div>
                        <!-- End Col -->

                    </div>
                    <!-- End Grid -->

                    <div class="flex justify-end mt-5 gap-x-2">
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
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