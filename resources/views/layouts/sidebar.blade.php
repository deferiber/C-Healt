<!-- ========== HEADER ========== -->
{{-- <header
    class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64 dark:bg-neutral-800 dark:border-neutral-700">
    <nav class="flex items-center w-full px-4 mx-auto basis-full sm:px-6" aria-label="Global">
        <div class="me-5 lg:me-0 lg:hidden">
            <!-- Logo -->

            <!-- End Logo -->
        </div>

        <div class="flex items-center justify-end w-full ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
            <div class="sm:hidden">
                <button type="button"
                    class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </div>

            <div class="hidden sm:block">
                <label for="icon" class="sr-only">Search</label>
                <div class="relative min-w-72 md:min-w-80">
                    <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                        <svg class="flex-shrink-0 text-gray-400 size-4 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </div>
                    <input type="text" id="icon" name="icon"
                        class="block w-full px-4 py-2 text-sm border-gray-200 rounded-lg ps-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        placeholder="Search">
                </div>
            </div>

            <div class="flex flex-row items-center justify-end gap-2">


            </div>
        </div>
    </nav>
</header> --}}
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<!-- Breadcrumb -->
{{-- <header>
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        {{ __('Dashboard') }}
    </h2>
</header> --}}
<div
    class="sticky inset-x-0 top-0 z-20 px-4 bg-white border-y sm:px-6 md:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex items-center justify-between py-2">
        <!-- Breadcrumb -->
        <ol class="flex items-center ms-3 whitespace-nowrap">
            <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                Application Layout
                <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16"
                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
                Dashboard Admin
            </li>
        </ol>
        <!-- End Breadcrumb -->



        <!-- Sidebar -->
        <button type="button"
            class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-200"
            data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13" />
            </svg>
            <span class="sr-only">Sidebar</span>
        </button>
        <!-- End Sidebar -->
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Sidebar -->
<div id="application-sidebar" class="hs-overlay [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-[260px]
    hidden
    fixed inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
    dark:bg-neutral-800 dark:border-neutral-700">
    <div class="px-8 pt-4">
        <!-- Logo -->

        <a class="flex-none inline-block text-xl font-semibold rounded-xl focus:outline-none focus:opacity-80"
            href="../templates/admin/index.html" aria-label="C-Healt">
            <svg width="180" height="51" viewBox="0 0 200 71" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect y="17" width="48" height="39.871" fill="url(#pattern0_674_664)" />
                <path
                    d="M70.392 57.528C67.544 57.528 65.304 56.968 63.672 55.848C62.072 54.728 60.952 53.208 60.312 51.288C59.672 49.336 59.352 47.096 59.352 44.568V30.696C59.352 28.04 59.672 25.736 60.312 23.784C60.952 21.832 62.072 20.328 63.672 19.272C65.304 18.216 67.544 17.688 70.392 17.688C73.08 17.688 75.176 18.152 76.68 19.08C78.216 19.976 79.304 21.272 79.944 22.968C80.584 24.664 80.904 26.632 80.904 28.872V32.136H74.088V28.776C74.088 27.688 74.024 26.696 73.896 25.8C73.8 24.904 73.496 24.2 72.984 23.688C72.504 23.144 71.656 22.872 70.44 22.872C69.224 22.872 68.328 23.16 67.752 23.736C67.208 24.28 66.856 25.032 66.696 25.992C66.536 26.92 66.456 27.976 66.456 29.16V46.056C66.456 47.464 66.568 48.632 66.792 49.56C67.016 50.456 67.416 51.144 67.992 51.624C68.6 52.072 69.416 52.296 70.44 52.296C71.624 52.296 72.456 52.024 72.936 51.48C73.448 50.904 73.768 50.152 73.896 49.224C74.024 48.296 74.088 47.256 74.088 46.104V42.6H80.904V45.72C80.904 48.024 80.6 50.072 79.992 51.864C79.384 53.624 78.312 55.016 76.776 56.04C75.272 57.032 73.144 57.528 70.392 57.528ZM85.6579 43.512V39.096H97.2259V43.512H85.6579ZM103.008 57V18.12H110.064V34.392H117.984V18.12H125.088V57H117.984V39.432H110.064V57H103.008ZM139.005 57.432C136.925 57.432 135.229 57.048 133.917 56.28C132.605 55.48 131.629 54.328 130.989 52.824C130.381 51.288 130.077 49.448 130.077 47.304V38.952C130.077 36.744 130.381 34.888 130.989 33.384C131.629 31.88 132.605 30.744 133.917 29.976C135.261 29.208 136.957 28.824 139.005 28.824C141.213 28.824 142.925 29.24 144.141 30.072C145.389 30.904 146.269 32.12 146.781 33.72C147.325 35.288 147.597 37.208 147.597 39.48V43.416H136.557V48.888C136.557 49.784 136.637 50.52 136.797 51.096C136.989 51.672 137.277 52.088 137.661 52.344C138.045 52.6 138.509 52.728 139.053 52.728C139.629 52.728 140.093 52.6 140.445 52.344C140.797 52.056 141.053 51.656 141.213 51.144C141.373 50.6 141.453 49.928 141.453 49.128V46.824H147.549V48.696C147.549 51.512 146.845 53.672 145.437 55.176C144.029 56.68 141.885 57.432 139.005 57.432ZM136.557 40.2H141.453V37.56C141.453 36.6 141.373 35.832 141.213 35.256C141.053 34.648 140.797 34.216 140.445 33.96C140.093 33.672 139.597 33.528 138.957 33.528C138.381 33.528 137.917 33.672 137.565 33.96C137.213 34.248 136.957 34.728 136.797 35.4C136.637 36.072 136.557 37.032 136.557 38.28V40.2ZM157.403 57.432C156.155 57.432 155.083 57.112 154.187 56.472C153.291 55.8 152.603 54.968 152.123 53.976C151.643 52.952 151.403 51.896 151.403 50.808C151.403 49.08 151.723 47.624 152.363 46.44C153.003 45.256 153.851 44.264 154.907 43.464C155.963 42.664 157.163 41.976 158.507 41.4C159.851 40.792 161.211 40.248 162.587 39.768V37.368C162.587 36.568 162.523 35.896 162.395 35.352C162.299 34.808 162.091 34.392 161.771 34.104C161.483 33.816 161.019 33.672 160.379 33.672C159.835 33.672 159.387 33.8 159.035 34.056C158.715 34.312 158.475 34.68 158.315 35.16C158.187 35.608 158.107 36.136 158.075 36.744L157.979 38.424L151.787 38.184C151.883 34.984 152.667 32.632 154.139 31.128C155.643 29.592 157.915 28.824 160.955 28.824C163.739 28.824 165.755 29.592 167.003 31.128C168.283 32.664 168.923 34.744 168.923 37.368V50.184C168.923 51.208 168.939 52.136 168.971 52.968C169.035 53.8 169.099 54.552 169.163 55.224C169.259 55.896 169.339 56.488 169.403 57H163.547C163.451 56.36 163.323 55.64 163.163 54.84C163.035 54.008 162.939 53.4 162.875 53.016C162.555 54.136 161.947 55.16 161.051 56.088C160.155 56.984 158.939 57.432 157.403 57.432ZM159.803 52.584C160.219 52.584 160.603 52.488 160.955 52.296C161.339 52.072 161.675 51.816 161.963 51.528C162.251 51.24 162.459 50.984 162.587 50.76V43.032C161.883 43.448 161.211 43.864 160.571 44.28C159.963 44.696 159.419 45.16 158.939 45.672C158.491 46.152 158.139 46.68 157.883 47.256C157.659 47.832 157.547 48.504 157.547 49.272C157.547 50.296 157.739 51.112 158.123 51.72C158.539 52.296 159.099 52.584 159.803 52.584ZM174.162 57V18.12H180.642V57H174.162ZM193.84 57.336C192.08 57.336 190.688 57.048 189.664 56.472C188.672 55.896 187.968 55.064 187.552 53.976C187.136 52.888 186.928 51.592 186.928 50.088V33.576H184.144V29.256H186.928V20.952H193.504V29.256H197.728V33.576H193.504V49.512C193.504 50.472 193.712 51.16 194.128 51.576C194.544 51.96 195.168 52.152 196 52.152C196.352 52.152 196.688 52.136 197.008 52.104C197.36 52.072 197.696 52.04 198.016 52.008V57C197.472 57.064 196.832 57.128 196.096 57.192C195.392 57.288 194.64 57.336 193.84 57.336Z"
                    fill="#673AB7" />
                <defs>
                    <pattern id="pattern0_674_664" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_674_664" transform="scale(0.00806452 0.00970874)" />
                    </pattern>
                    <image id="image0_674_664" width="124" height="103"
                        xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
        </a>
        <!-- End Logo -->
    </div>

    <nav class="flex flex-col flex-wrap w-full p-6 hs-accordion-group" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li>
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Dashboard Admin
                </x-nav-link>
            </li>

            <li>
                <x-nav-link :href="route('educations.index')"
                    :active="request()->routeIs(['educations.index','educations.show','educations.create'])">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                    </svg>
                    Education
                </x-nav-link>
            </li>

            <li>
                <x-nav-link :href="route('questions.index')"
                    :active="request()->routeIs(['questions.index','questions.show','questions.create'])">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                    </svg>
                    Assesment
                </x-nav-link>
            </li>

            {{-- <li class="hs-accordion" id="projects-accordion">
                <button type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-600 dark:hs-accordion-active:text-white">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                    </svg>
                    Assesment

                    <svg class="hidden hs-accordion-active:block ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg class="block hs-accordion-active:hidden ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="projects-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <x-nav-link :href="route('questions.index')"
                                :active="request()->routeIs(['questions.index','questions.show','questions.create'])">
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-300 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                    href="#">
                                    <svg class="flex-shrink-0 size-5 text-dark-300 dark:text-dark-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M16.466 7.5C15.643 4.237 13.952 2 12 2 9.239 2 7 6.477 7 12s2.239 10 5 10c.342 0 .677-.069 1-.2" />
                                        <path d="m15.194 13.707 3.814 1.86-1.86 3.814" />
                                        <path
                                            d="M19 15.57c-1.804.885-4.274 1.43-7 1.43-5.523 0-10-2.239-10-5s4.477-5 10-5c4.838 0 8.873 1.718 9.8 4" />
                                    </svg>
                                    Questions
                                </a>
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('answers.index')"
                                :active="request()->routeIs(['answers.index','answers.show','answers.create'])">
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-300 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                    href="#">
                                    <svg class="flex-shrink-0 size-5 text-dark-300 dark:text-dark-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5.5 8.5 9 12l-3.5 3.5L2 12l3.5-3.5Z" />
                                        <path d="m12 2 3.5 3.5L12 9 8.5 5.5 12 2Z" />
                                        <path d="M18.5 8.5 22 12l-3.5 3.5L15 12l3.5-3.5Z" />
                                        <path d="m12 15 3.5 3.5L12 22l-3.5-3.5L12 15Z" />
                                    </svg>
                                    Answers
                                </a>
                            </x-nav-link>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li>
                <x-nav-link :href="route('recommendations.index')"
                    :active="request()->routeIs(['recommendations.index','recommendations.show','recommendations.create'])">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="7" rx="2" />
                        <circle cx="12" cy="5" r="2" />
                        <path d="M12 7v4" />
                        <line x1="8" x2="8" y1="16" y2="16" />
                        <line x1="16" x2="16" y1="16" y2="16" />
                    </svg>
                    Rekomendasi
                </x-nav-link>
            </li>

            <li>
                <x-nav-link :href="route('chats.index')"
                    :active="request()->routeIs(['chats.index','chats.show','chats.create'])">
                    <svg class="flex-shrink-0 mt-1 text-gray-500 size-5 dark:text-neutral-500"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                        <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                    </svg>
                    Chat
                </x-nav-link>
            </li>

            <li>
                <x-nav-link :href="route('labcvts.index')"
                    :active="request()->routeIs(['labcvts.index','labcvts.show','labcvts.create'])">
                    <svg class="flex-shrink-0 mt-1 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                        <path d="M18 14h-8" />
                        <path d="M15 18h-5" />
                        <path d="M10 6h8v4h-8V6Z" />
                    </svg>
                    Lab CVT
                </x-nav-link>
            </li>

            <li>
                <x-nav-link :href="route('users.index')"
                    :active="request()->routeIs(['users.index','users.show','users.create'])">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    Users
                </x-nav-link>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-neutral-400"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 7h-9" />
                            <path d="M14 17H5" />
                            <circle cx="17" cy="17" r="3" />
                            <circle cx="7" cy="7" r="3" />
                        </svg>
                        {{ __('Log Out') }}

                    </x-nav-link>
                </form>

            </li>


        </ul>
    </nav>
</div>
<!-- End Sidebar -->
