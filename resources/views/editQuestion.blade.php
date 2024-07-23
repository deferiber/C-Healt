<x-app-layout>
    <x-slot name="header" class="flex flex-row items-center justify-end gap-2">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Edit data
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="w-full lg:ps-64">

        <!-- Card Section -->
        <div class="max-w-4xl px-4 py-2 mx-auto sm:px-6 lg:px-8 lg:py-2">
            <!-- Card -->
            <div class="p-4 bg-white shadow rounded-xl sm:p-7 dark:bg-neutral-900">
                <div class="mb-8 text-center">
                    <h2 class="text-2xl font-bold text-gray-800 md:text-3xl dark:text-neutral-200">
                        Edit data assesment
                    </h2>
                </div>

                <form action="{{ route('questions.update', $question->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <!-- Section -->
                    <div
                        class="py-6 border-t border-gray-200 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                        <label for="af-payment-billing-contact"
                            class="inline-block text-sm font-medium dark:text-white">
                            Question
                        </label>

                        <div class="mt-2 space-y-3">
                            <input value="{{ $question->question }}" name="question" id="question" type="text"
                                class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        </div>
                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div
                        class="py-6 border-t border-gray-200 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                        <label for="af-payment-billing-address"
                            class="inline-block text-sm font-medium dark:text-white">
                            Answer - Score
                        </label>

                        <div class="mt-2 space-y-3">

                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_1 }}" name="option_1" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi1">
                                <input value="{{ $question->score_1 }}" name="score_1" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score1">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_2 }}" name="option_2" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi2">
                                <input value="{{ $question->score_2 }}" name="score_2" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score2">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_3 }}" name="option_3" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi3">
                                <input value="{{ $question->score_3 }}" name="score_3" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score3">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_4 }}" name="option_4" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi4">
                                <input value="{{ $question->score_4 }}" name="score_4" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score4">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_5 }}" name="option_5" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi5">
                                <input value="{{ $question->score_5 }}" name="score_5" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score5">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_6 }}" name="option_6" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi6">
                                <input value="{{ $question->score_6 }}" name="score_6" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score6">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_7 }}" name="option_7" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi7">
                                <input value="{{ $question->score_7 }}" name="score_7" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score7">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_8 }}" name="option_8" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi8">
                                <input value="{{ $question->score_8 }}" name="score_8" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score8">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_9 }}" name="option_9" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi9">
                                <input value="{{ $question->score_9 }}" name="score_9" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score9">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_10 }}" name="option_10" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi10">
                                <input value="{{ $question->score_10 }}" name="score_10" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score10">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_11 }}" name="option_11" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi11">
                                <input value="{{ $question->score_11 }}" name="score_11" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score11">
                            </div>
                            <div class="grid gap-3 sm:flex">
                                <input value="{{ $question->option_12 }}" name="option_12" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Opsi12">
                                <input value="{{ $question->score_12 }}" name="score_12" type="text"
                                    class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="score12">
                            </div>

                        </div>
                        <!-- End Section -->
                </form>

                <div class="flex justify-end mt-5 gap-x-2">
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                        Cancel
                    </button>
                    <button type="submit"
                        class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Simpan
                    </button>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->

    </div>
    <!-- End Content -->
</x-app-layout>
