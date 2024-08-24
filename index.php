<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">
 
<!-- Mirrored from template.codexshaper.com/admin/lms-hub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2024 13:45:43 GMT -->
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
                            <a href="all-notice.html" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                                <div class="flex-shrink-0">
                                    <img class="size-10 rounded-50 dk-theme-card-square" src="assets/images/user/user-1.png" alt="user">
                                </div>
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a>
                            <a href="all-notice.html" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-dark-icon">
                                <div class="flex-shrink-0">
                                    <img class="size-10 rounded-50 dk-theme-card-square" src="assets/images/user/user-2.png" alt="user">
                                </div>
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 dark:text-gray-400 text-sm mb-1.5">New message from <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">10 min ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="all-notice.html" class="flex-center py-2 text-sm font-medium text-center text-heading rounded-b-lg bg-gray-50 dark:bg-dark-card-shade dark:text-white dk-theme-card-square">
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
                            <div class="truncate"><a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d0ddd4c983858384f1d6dcd0d8dd9fd2dedc">[email&#160;protected]</a></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="index.html" class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="account-setting.html" class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="sign-in.html" class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white">Sign out</a>
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
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Bread Crumb Section -->
            <div class="col-span-full card flex-center-btween">
                <h5 class="card-title">Admin</h5>
                <ul class="flex items-center flex-wrap gap-1.5 *:flex-center *:gap-1.5 leading-none text-gray-900 dark:text-dark-text mt-2">
                    <li class="text-primary-500 after:font-remix after:flex-center after:font-thin after:text-gray-900 after:size-5 after:content-['\ea6d'] after:translate-y-[1.4px] last:after:hidden [&.current-page]:text-gray-500 dark:[&.current-page]:text-dark-text-two">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="text-primary-500 after:font-remix after:flex-center after:font-thin after:text-gray-900 after:size-5 after:content-['\ea6d'] after:translate-y-[1.4px] last:after:hidden [&.current-page]:text-gray-500 dark:[&.current-page]:text-dark-text-two current-page">
                        <a href="#">Admin Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- End Bread Crumb Section -->
            <!-- Start Short Progress Card Section -->
            <div class="col-span-full grid grid-cols-12 gap-4 card">
                <!-- Overall revenue Progress Card -->
                <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                    <div class="flex-center-between">
                        <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Overall revenue</h6>
                        <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                    </div>
                    <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                        <div class="pb-8 shrink-0">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="card-title">
                                    $<span class="counter-value" data-value="30000">0</span>
                                </div>
                                <div class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                    <i class="ri-arrow-up-line text-inherit text-sm"></i>
                                </div>
                            </div>
                            <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                                <span class="text-primary-500">09%</span>
                                Below Target
                            </div>
                        </div>
                        <div class="grow self-center pb-3">
                            <div id="admin-overall-revenue-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- Total registrations Progress Card -->
                <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                    <div class="flex-center-between">
                        <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Total registrations</h6>
                        <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                    </div>
                    <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                        <div class="pb-8 shrink-0">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="counter-value card-title" data-value="21000">0</div>
                                <div class="flex-center text-danger size-5 rounded-50 border border-danger">
                                    <i class="ri-arrow-down-line text-inherit text-sm"></i>
                                </div>
                            </div>
                            <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                                <span class="text-danger">05%</span>
                                Below Target
                            </div>
                        </div>
                        <div class="grow self-center pb-3">
                            <div id="admin-total-registration-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- Total Courses Progress Card -->
                <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                    <div class="flex-center-between">
                        <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Total courses</h6>
                        <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                    </div>
                    <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                        <div class="pb-8 shrink-0">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="counter-value card-title" data-value="25000">0</div>
                                <div class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                    <i class="ri-arrow-up-line text-inherit text-sm"></i>
                                </div>
                            </div>
                            <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                                <span class="text-primary-500">50%</span>
                                Below Target
                            </div>
                        </div>
                        <div class="grow self-center pb-3">
                            <div id="admin-total-course-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- Average review Progress Card -->
                <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                    <div class="flex-center-between">
                        <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Average review</h6>
                        <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                    </div>
                    <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                        <div class="pb-8 shrink-0">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="counter-value card-title" data-value="4.5">0</div>
                                <div class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                    <i class="ri-arrow-up-line text-inherit text-sm"></i>
                                </div>
                            </div>
                            <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                                <span class="text-primary-500">05%</span>
                                Below Target
                            </div>
                        </div>
                        <div class="grow self-center pb-3">
                            <div id="admin-average-review-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Short Progress Card Section -->
            <!-- Start Average Registration rate Chart Section -->
            <div class="col-span-full 3xl:col-span-8 card">
                <div class="flex-center-between">
                    <h6 class="card-title">Average Registration rate</h6>
                    <select class="form-input form-select">
                        <option value="this-month">This Year</option>
                        <option value="last-month">This Month</option>
                    </select>
                </div>
                <div id="admin-average-registration-chart"></div>              
            </div>
            <!-- End Average Registration rate Chart Section -->
            <!-- Start Highest rated courses Section -->
            <div class="col-span-full lg:col-span-6 3xl:col-span-4 card">
                <div class="flex-center-between">
                    <h6 class="card-title">Highest rated coursess</h6>
                    <a href="#" class="btn b-solid btn-primary-solid btn-sm">See all</a>
                </div>
                <!-- Course Table -->
                <div class="overflow-x-auto scrollbar-table">
                    <table class="table-auto w-full whitespace-nowrap text-left text-xs text-gray-500 dark:text-dark-text font-semibold leading-none">
                        <thead class="border-b border-dashed border-gray-900/40 dark:border-dark-border-three">
                            <tr>
                                <th class="px-3.5 py-4">Course</th>
                                <th class="px-3.5 py-4">Rating</th>
                                <th class="px-3.5 py-4">Enrolled</th>
                                <th class="px-3.5 py-4">Price</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-dashed divide-gray-900/40 dark:divide-dark-border-three">
                            <tr>
                                <td class="flex items-center gap-2 px-3.5 py-4">
                                    <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                        <img src="assets/images/admin/top-course/top-course-1.png" alt="thumb">
                                    </a>
                                    <div>
                                        <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                            <a href="#">Digital marketing base...</a>
                                        </h6>
                                        <p class="font-normal">Author - Jane Howard</p>
                                    </div>
                                </td>
                                <td class="px-3.5 py-4">4.9</td>
                                <td class="px-3.5 py-4">55k</td>
                                <td class="px-3.5 py-4">$190.00</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-2 px-3.5 py-4">
                                    <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                        <img src="assets/images/admin/top-course/top-course-2.png" alt="thumb">
                                    </a>
                                    <div>
                                        <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                            <a href="#">Web Development Essentials</a>
                                        </h6>
                                        <p class="font-normal">Author - John Doe</p>
                                    </div>
                                </td>
                                <td class="px-3.5 py-4">4.8</td>
                                <td class="px-3.5 py-4">60k</td>
                                <td class="px-3.5 py-4">$200.00</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-2 px-3.5 py-4">
                                    <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                        <img src="assets/images/admin/top-course/top-course-3.png" alt="thumb">
                                    </a>
                                    <div>
                                        <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                            <a href="#">Graphic Design Masterclass</a>
                                        </h6>
                                        <p class="font-normal">Author - Emily Clark</p>
                                    </div>
                                </td>
                                <td class="px-3.5 py-4">4.7</td>
                                <td class="px-3.5 py-4">45k</td>
                                <td class="px-3.5 py-4">$180.00</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-2 px-3.5 py-4">
                                    <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                        <img src="assets/images/admin/top-course/top-course-4.png" alt="thumb">
                                    </a>
                                    <div>
                                        <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                            <a href="#">Data Science Bootcamp</a>
                                        </h6>
                                        <p class="font-normal">Author - Michael Smith</p>
                                    </div>
                                </td>
                                <td class="px-3.5 py-4">4.6</td>
                                <td class="px-3.5 py-4">50k</td>
                                <td class="px-3.5 py-4">$210.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Highest rated courses Section -->
            <!-- Start Popular categories Section -->
            <div class="col-span-full lg:col-span-6 3xl:col-span-4 card px-0 ">
                <div class="flex-center-between px-6 mb-7">
                    <h6 class="card-title">Popular categories</h6>
                    <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                </div>
                <div class="max-h-[350px] smooth-scrollbar" data-scrollbar>
                    <ul class="divide-y divide-gray-200 dark:divide-dark-border-three space-y-5 *:pt-5 overflow-hidden px-6">
                        <li class="flex-center-between first:pt-0">
                            <div class="flex items-center gap-2.5">
                                <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                    <img src="assets/images/icons/category/graphic-design.svg" alt="icon">
                                </div>
                                <div>
                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                        <a href="#" class="truncate">Graphic Design</a>
                                    </h6>
                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                                </div>
                            </div>
                            <div class="ms-auto mr-5">
                                <div id="category-one"></div>
                            </div>
                            <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                                <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                            </a>
                        </li>
                        <li class="flex-center-between first:pt-0">
                            <div class="flex items-center gap-2.5">
                                <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                    <img src="assets/images/icons/category/ui-ux.svg" alt="icon">
                                </div>
                                <div>
                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                        <a href="#" class="truncate">UI/UX Design</a>
                                    </h6>
                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                                </div>
                            </div>
                            <div class="ms-auto mr-5">
                                <div id="category-two"></div>
                            </div>
                            <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                                <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                            </a>
                        </li>
                        <li class="flex-center-between first:pt-0">
                            <div class="flex items-center gap-2.5">
                                <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                    <img src="assets/images/icons/category/web-dev.svg" alt="icon">
                                </div>
                                <div>
                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                        <a href="#" class="truncate">Web Development</a>
                                    </h6>
                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                                </div>
                            </div>
                            <div class="ms-auto mr-5">
                                <div id="category-three"></div>
                            </div>
                            <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                                <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                            </a>
                        </li>
                        <li class="flex-center-between first:pt-0">
                            <div class="flex items-center gap-2.5">
                                <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                    <img src="assets/images/icons/category/digital-mar.svg" alt="icon">
                                </div>
                                <div>
                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                        <a href="#" class="truncate">Digital Marketing</a>
                                    </h6>
                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                                </div>
                            </div>
                            <div class="ms-auto mr-5">
                                <div id="category-four"></div>
                            </div>
                            <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                                <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                            </a>
                        </li>
                        <li class="flex-center-between first:pt-0">
                            <div class="flex items-center gap-2.5">
                                <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                    <img src="assets/images/icons/category/bus-dev.svg" alt="icon">
                                </div>
                                <div>
                                    <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                        <a href="#" class="truncate">Business Dev...</a>
                                    </h6>
                                    <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                                </div>
                            </div>
                            <div class="ms-auto mr-5">
                                <div id="category-five"></div>
                            </div>
                            <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                                <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Popular categories Section -->
            <!-- Start Course Activity Chart Section -->
            <div class="col-span-full lg:col-span-6 3xl:col-span-4 card">
                <div class="flex-center-between">
                    <h6 class="card-title">Course Activity</h6>
                    <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                </div>
                <div id="admin-learn-activity-chart" class="min-h-80"></div>
            </div>
            <!-- End Course Activity Chart Section -->
            <!-- Start Recent Support Tickets Section -->
            <div class="col-span-full lg:col-span-6 3xl:col-span-4 card px-0">
                <div class="flex-center-between px-6 mb-7">
                    <h6 class="card-title">Recent Support Tickets</h6>
                    <a href="#" class="btn b-solid btn-primary-solid btn-sm">See all</a>
                </div>
                <div class="min-h-15 max-h-[350px] smooth-scrollbar" data-scrollbar>
                    <ul class="divide-y divide-gray-200 dark:divide-dark-border-three space-y-5 *:pt-5 overflow-hidden px-6">
                        <li class="flex items-center gap-2.5 first:pt-0">
                            <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                                <img src="assets/images/user/user-5.png" alt="user">
                            </a>
                            <div>
                                <h6 class="card-title text-[16px]">
                                    <a href="#">Robert Fox</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                    Duis at consectetur lorem donec massa consectetur lorem donec...
                                </p>
                                <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">10 : 00 pm</div>
                            </div>
                        </li>
                        <li class="flex items-center gap-2.5 first:pt-0">
                            <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                                <img src="assets/images/user/user-6.png" alt="user">
                            </a>
                            <div>
                                <h6 class="card-title text-[16px]">
                                    <a href="#">Emily Johnson</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                    Vivamus suscipit tortor eget felis porttitor volutpat...
                                </p>
                                <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">11 : 15 am</div>
                            </div>
                        </li>
                        <li class="flex items-center gap-2.5 first:pt-0">
                            <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                                <img src="assets/images/user/user-7.png" alt="user">
                            </a>
                            <div>
                                <h6 class="card-title text-[16px]">
                                    <a href="#">Michael Brown</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                    Curabitur aliquet quam id dui posuere blandit...
                                </p>
                                <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">09 : 30 am</div>
                            </div>
                        </li>
                        <li class="flex items-center gap-2.5 first:pt-0">
                            <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                                <img src="assets/images/user/user-8.png" alt="user">
                            </a>
                            <div>
                                <h6 class="card-title text-[16px]">
                                    <a href="#">Sarah Williams</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                    Nulla quis lorem ut libero malesuada feugiat...
                                </p>
                                <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">02 : 45 pm</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Recent Support Tickets Section -->
        </div>
    </div>
    <!-- End Main Content -->

    <script data-cfasync="false" src="https://template.codexshaper.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/flowbite.min.js"></script>
    <script src="assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js"></script>
    <script src="assets/js/pages/dashboard-admin-lms.js"></script>
    <script src="assets/js/component/app-menu-bar.js"></script>
    <script src="assets/js/switcher.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2024 13:47:26 GMT -->
</html>