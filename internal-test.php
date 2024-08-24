<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/component-datatable.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2024 13:48:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LMS-HUB - Admin & Dashboard Template</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="web development agency">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/vendor/prism.min.css">
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-4">
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="assets/images/loader.gif" alt="loader">
    </div>
    <!-- Start Header -->
    <header class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] group-data-[sidebar-size=sm]:group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[theme-width=box]:xl:mr-0 dk-theme-card-square ac-transition">
        <div class="flex-center-between grow">
            <!-- Header Left -->
            <div class="menu-hamburger-container flex-center">
                <button type="button" id="app-menu-hamburger" class="menu-hamburger hidden xl:block dk-theme-card-square"></button>
                <button type="button" class="menu-hamburger block xl:hidden dk-theme-card-square" data-drawer-target="app-drawer" data-drawer-show="app-drawer" aria-controls="app-drawer"></button>
            </div>
            <!-- Header Right -->
            <div class="flex items-center gap-5 md:gap-3">
                <div class="w-56 md:w-72 leading-none text-sm relative text-gray-900 dark:text-dark-text hidden sm:block">
                    <span class="absolute top-1/2 -translate-y-[40%] left-3.5">
                        <i class="ri-search-line text-gray-900 dark:text-dark-text text-[14px]"></i>
                    </span>
                    <input type="text" name="header-search" id="header-search" placeholder="Search..." class="form-input border-gray-200 dark:border-dark-border pl-[36px] pr-12 py-4 rounded-full dk-theme-card-square">
                    <span class="absolute top-1/2 -translate-y-[40%] right-4 hidden lg:flex lg:items-center lg:gap-0.5 select-none">
                        <i class="ri-command-line text-[12px]"></i><span>+</span><span>k</span>
                    </span>
                </div>
                <!-- Dark Light Button -->
                <button type="button" class="themeMode size-8 hidden md:flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square" onclick="toggleThemeMode()">
                    <i class="ri-contrast-2-line text-[22px] group-[.dark]:before:!content-['\f1bf']"></i>
                </button>
                <!-- Settings Button -->
                <button type="button" class="size-8 hidden md:flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square" data-drawer-target="drawer-app-setting" data-drawer-show="drawer-app-setting" data-drawer-placement="right" aria-controls="drawer-app-setting">
                    <i class="ri-settings-3-line text-[22px] animate-spin-slow"></i>
                </button>
                <!-- Notification Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownNotification" data-popover-trigger="click" data-popover-placement="bottom-end" class="relative size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square">
                        <i class="ri-notification-3-line text-[24px]"></i>
                        <span class="absolute -top-1 -right-1 size-4 rounded-50 flex-center bg-primary-500 leading-none text-xs text-white">0</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNotification" class="!-right-full sm:!right-0 z-backdrop invisible w-[250px] sm:w-[320px] bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-dark-card-two dark:divide-dark-border-four dk-theme-card-square">
                        <div class="block px-4 py-2 font-medium text-center text-heading rounded-t-lg bg-gray-50 dark:bg-dark-card-shade dark:text-white dk-theme-card-square">
                            Notifications
                        </div>
                        <div class="divide-y divide-gray-100 dark:divide-dark-border-four">
                            <a href="all-notice.php" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                                <div class="flex-shrink-0">
                                    <img class="size-10 rounded-50 dk-theme-card-square" src="assets/images/user/user-1.png" alt="user">
                                </div>
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a>
                            <a href="all-notice.php" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                                <div class="flex-shrink-0">
                                    <img class="size-10 rounded-50 dk-theme-card-square" src="assets/images/user/user-2.png" alt="user">
                                </div>
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">10 min ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="all-notice.php" class="flex-center py-2 text-sm font-medium text-center text-heading rounded-b-lg bg-gray-50 dark:bg-dark-card-shade dark:text-white dk-theme-card-square">
                            View all
                        </a>
                    </div>
                </div>
                <!-- Language Select Button -->
                <div class="relative hidden md:block">
                    <button type="button" data-popover-target="dropdownLanguage" data-popover-trigger="click" data-popover-placement="bottom-end" class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md dk-theme-card-square">
                        <img id="header-lang-img" src="assets/images/flag/us.svg" alt="flag" class="size-5 rounded-sm" title="English">
                    </button>
                    <!-- Dropdown -->
                    <div id="dropdownLanguage" class="absolute invisible z-backdrop py-2 bg-white rounded-md shadow-md min-w-[10rem] flex flex-col dark:bg-dark-card-shade dk-theme-card-square">
                        <a href="#" class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full" data-lang="en" title="English">
                            <img src="assets/images/flag/us.svg" alt="flag" class="object-cover size-4 rounded-50 dk-theme-card-square">
                            <h6 class="font-medium text-gray-500 dark:text-white">English</h6>
                        </a>
                        <a href="#" class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full" data-lang="sp" title="Spanish">
                            <img src="assets/images/flag/es.svg" alt="flag" class="object-cover size-4 rounded-50 dk-theme-card-square">
                            <h6 class="font-medium text-gray-500 dark:text-white">Spanish</h6>
                        </a>
                        <a href="#" class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full" data-lang="fr" title="French">
                            <img src="assets/images/flag/fr.svg" alt="flag" class="object-cover size-4 rounded-50 dk-theme-card-square">
                            <h6 class="font-medium text-gray-500 dark:text-white">French</h6>
                        </a>
                        <a href="#" class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full" data-lang="it" title="Italian">
                            <img src="assets/images/flag/it.svg" alt="flag" class="object-cover size-4 rounded-50 dk-theme-card-square">
                            <h6 class="font-medium text-gray-500 dark:text-white">Italian</h6>
                        </a>
                        <a href="#" class="flex items-center gap-3 hover:bg-gray-200 px-4 py-2 dark:hover:bg-dark-icon relative after:absolute after:inset-0 after:size-full" data-lang="ar" title="Arabic">
                            <img src="assets/images/flag/ar.svg" alt="flag" class="object-cover size-4 rounded-50 dk-theme-card-square">
                            <h6 class="font-medium text-gray-500 dark:text-white">Arabic</h6>
                        </a>
                    </div>
                </div>
                <!-- Border -->
                <div class="w-[1px] h-header bg-gray-200 dark:bg-dark-border hidden sm:block"></div>
                <!-- User Profile Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownProfile" data-popover-trigger="click" data-popover-placement="bottom-end" class="flex items-center">
                        <img src="assets/images/user/profile-img.png" alt="user-img" class="size-9 rounded-50 dk-theme-card-square">
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownProfile" class="invisible z-backdrop bg-white text-left divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-dark-card-shade dark:divide-dark-border-four dk-theme-card-square">
                        <div class="px-4 py-3 text-sm text-gray-500 dark:text-white">
                            <div class="card-title text-lg">Alex Janson</div>
                            <div class="truncate"><a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="60010c05185254525520070d01090c4e030f0d">[email&#160;protected]</a></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="index.php" class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="account-setting.php" class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="sign-in.php" class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start App Menu -->
    <?php include 'navigation-bar.php'; ?>
    <!-- End App Menu -->

    <!-- Start App Settings Sidebar -->
    <div id="drawer-app-setting" class="side-canvas font-spline_sans dark:bg-dark-card-two right-0 h-screen translate-x-full duration-300 overflow-y-auto w-80 sm:w-96" tabindex="-1">
        <button type="button" data-drawer-hide="drawer-app-setting" aria-controls="drawer-app-setting" class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg absolute top-2.5 right-2.5 dk-theme-card-square">
            <i class="ri-close-line text-gray-500 dark:text-dark-text"></i>
        </button>
        <div class="p-6 py-3 border-b border-gray-200 dark:border-dark-border-four">
            <h6 class="text-lg font-medium text-gray-500 dark:text-dark-text">Adjust Configurations</h6>
            <p class="text-sm text-gray-500 dark:text-dark-text mt-1">
                Transform your space to reflect your personality!
            </p>
        </div>
        <!-- Customizatin Options -->
        <div class="p-6 pt-3 divide-y divide-input-border/50 dark:divide-dark-border-four space-y-10">
            <!-- Theme Mode -->
            <div class="pt-3 first:pt-0">
                <h6 class="card-title text-base font-medium">Theme Mode</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Light</label>
                        <label for="radioThemeLight" class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-sun-line text-inherit text-xl"></i>
                            <input name="radioThemeMode" type="radio" id="radioThemeLight" hidden checked onchange="toggleThemeMode()">
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Dark</label>
                        <label for="radioThemeDark" class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-moon-clear-line text-inherit text-xl"></i>
                            <input name="radioThemeMode" type="radio" id="radioThemeDark" hidden onchange="toggleThemeMode()">
                        </label>
                    </div>
                </div>
            </div>
            <!-- Theme Card Style -->
            <div class="pt-3 first:pt-0">
                <h6 class="card-title text-base font-medium">Theme Card Style</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Square</label>
                        <label for="radioThemeCardSquare" class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-square-line text-inherit text-xl"></i>
                            <input name="radioThemeCardStyle" type="radio" id="radioThemeCardSquare" hidden checked onchange="toggleCardStyle()">
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Round</label>
                        <label for="radioThemeCardRound" class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-rounded-corner text-inherit text-xl"></i>
                            <input name="radioThemeCardStyle" type="radio" id="radioThemeCardRound" hidden onchange="toggleCardStyle()">
                        </label>
                    </div>
                </div>
            </div>
            <!-- Theme Width -->
            <div class="pt-3 first:pt-0">
                <h6 class="card-title text-base font-medium">Theme Layout Width</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Full Width</label>
                        <label for="radioThemeWidthFluid" class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-fullscreen-fill text-inherit text-xl"></i>
                            <input name="radioThemeWidth" type="radio" id="radioThemeWidthFluid" hidden checked onchange="settingThemeWidth()">
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Container</label>
                        <label for="radioThemeWidthBox" class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-exchange-box-line text-inherit text-xl"></i>
                            <input name="radioThemeWidth" type="radio" id="radioThemeWidthBox" hidden onchange="settingThemeWidth()">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reset All Customization -->
        <div class="flex-center justify-end p-3 absolute bottom-0 left-0 right-0 z-[1] bg-gray-200 dark:bg-dark-icon">
            <button type="reset" class="btn b-solid btn-danger-solid btn-sm" onclick="resetThemeConfig()">Reset</button>
        </div>
    </div>
    <!-- End App Settings Sidebar -->

    <!-- Start Main Content -->
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        <div class="card">
            <h2 class="card-title">All Internal Test</h2>
        </div>
        <div class="grid grid-cols-12">
            <!-- INITIALIZE CSS CLASS -->
            <div class="hidden">
                <div class="self-center md:col-span-6 md:place-self-end lg:col-span-full inline-block w-auto ml-2 dark:bg-dark-card-two dark:text-white align-middle"></div>
                <div class="hover:bg-primary-500 hover:text-white dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"></div>
                <div class="text-slate-300 border-slate-300 dark:!bg-gray-400 dark:text-slate-300 bg-slate-200/50 first:rounded-l-lg last:rounded-r-lg"></div>
                <div class=" dark:bg-gray-700 dark:!rounded-none transition-all duration-150 ease-linear [&.selected]:bg-[#F2F4F9] dark:[&.selected]:bg-dark-icon"></div>
                <div class="group-[.bordered]:rounded-none group-[.bordered]:border group-[.bordered]:border-gray-200 dark:group-[.bordered]:border-dark-border"></div>
            </div>
            <!-- INITIALIZE CSS CLASS -->
            <div class="tablejs sr-only size-0"></div>

            <!-- BORDERED SELECTION DELETION DATA TABLE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <!-- <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Bordered Data Table</h3>
                        <button type="button" class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Code</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div> -->
                    <div class="p-6 space-y-4">
                        <!-- <button id="deleteRowButton" class="btn b-solid btn-danger-solid">Delete Row</button> -->
                        <table id="rowSelectionDeletion" class="group bordered">
                            <thead>
                                <tr>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Test Id</th>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Course name</th>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Batch code</th>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Test name</th>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Test Date</th>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Test Starting Time</th>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Total Time</th>
                                    <th class="!bg-[#FEF6EC] dark:!bg-dark-card-shade">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>123</td>
                                    <td>web progrmaning</td>
                                    <td>23245</td>
                                    <td>web tech</td>
                                    <td>2011-04-25</td>
                                    <td>13:15:00</td>
                                    <td>00:30:00</td>
                                    <td class="px-3.5 py-4">
                                        <div class="flex items-center gap-1">
                                            <a href="edit-course.html" class="btn-icon btn-primary-icon-light size-7">
                                                <i class="ri-edit-2-line text-inherit text-[13px]"></i>
                                            </a>
                                            <button class="btn-icon btn-danger-icon-light size-7" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                                                <i class="ri-delete-bin-line text-danger text-[13px]"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;p>Sorry we can't show the huge data table&lt;/p>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <script data-cfasync="false" src="https://template.codexshaper.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/flowbite.min.js"></script>
    <script src="assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js"></script>
    <script src="assets/js/vendor/prism.min.js"></script>
    <!-- datatable -->
    <script src="assets/js/vendor/datatables/data-tables.min.js"></script>
    <script src="assets/js/vendor/datatables/data-tables.tailwindcss.min.js"></script>
    <script src="assets/js/vendor/datatables/datatables.buttons.min.js"></script>
    <script src="assets/js/vendor/datatables/datatables.init.js"></script>
    <!-- datatable -->
    <script src="assets/js/component/prism-custom.js"></script>
    <script src="assets/js/component/app-menu-bar.js"></script>
    <script src="assets/js/switcher.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/component-datatable.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2024 13:48:52 GMT -->

</html>