<x-app-layout>
    <x-slot name="header" class="flex flex-row items-center justify-end gap-2">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ $title }}
        </h2>
    </x-slot>

    <!-- Content -->
    <div class="w-full lg:ps-64">

        <!-- FAQ -->
        <div class="max-w-[85rem] px-14 py-4 sm:px-2 lg:px-4 lg:py-4 mx-auto">
            <div class="p-5 bg-white rounded-lg shadow-lg size-full dark:bg-neutral-900">
                <div class="flex items-center py-2 mb-3 gap-x-4 first:pt-0 last:pb-6">
                    <div class="inline-flex gap-x-2">
                        <a class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            href="{{ route('questions.create') }}">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="M12 5v14" />
                            </svg>
                        </a>
                    </div>

                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">
                            {{ $title }}
                        </h3>
                    </div>
                </div>
                <div class="max-w-5xl mx-auto divide-y divide-gray-200 dark:divide-neutral-700">
                    @foreach ($dataquestion as $index => $row )
                    <div class="py-8 first:pt-0 last:pb-0">

                        <div class="flex gap-x-5">
                            <svg class="flex-shrink-0 mt-1 text-gray-500 size-6 dark:text-neutral-500"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-800 md:text-lg dark:text-neutral-200">
                                    {{ $row->question }}
                                </h3>
                                <div
                                    class="grid py-2 mt-0 sm:grid-cols-2 gap-y-2 first:pt-0 last:pb-0 sm:gap-x-6 sm:gap-y-0">
                                    <!-- List -->
                                    <ul class="space-y-1 text-sm sm:text-base">
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_1 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_2 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_3 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_4 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_5 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_6 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_7 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_8 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_9 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_10 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_11 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->option_12 }}
                                            </span>
                                        </li>
                                    </ul>
                                    <!-- End List -->

                                    <!-- List -->
                                    <ul class="space-y-1 text-sm sm:text-base">
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_1 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_2 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_3 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_4 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_5 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_6 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_7 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_8 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_9 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_10 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_11 }}
                                            </span>
                                        </li>
                                        <li class="flex space-x-3">
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                {{ $row->score_12 }}
                                            </span>
                                        </li>

                                    </ul>
                                    <!-- End List -->
                                </div>

                                <div class="px-0 py-1.5 flex gap-2">
                                    <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline dark:text-blue-500"
                                        href="{{ route('questions.edit', $row->id) }}">
                                        Edit
                                    </a>
                                    <form onsubmit="return confirm('Anda yakin menghapus data ini?')" method="post"
                                        action="{{ route('questions.destroy', $row->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                            class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline dark:text-blue-500">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div
                        class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            <span class="font-semibold text-gray-800 dark:text-neutral-200">
                                {{ $dataquestion->links('pagination::tailwind') }}
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- End FAQ -->

    </div>
    <!-- End Content -->
</x-app-layout>