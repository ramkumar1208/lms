<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg" data-card-style="square">

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/create-instructor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2024 13:48:34 GMT -->

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
    <link rel="stylesheet" href="assets/css/vendor/select/select2.min.css">
    <link rel="stylesheet" href="assets/css/vendor/summernote.min.css">
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-4">
    <div id="loader" class="w-screen h-screen flex-center bg-white fixed inset-0 z-[9999]">
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
                            <div class="truncate"><a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03626f667b3137313643646e626a6f2d606c6e">[email&#160;protected]</a></div>
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
        <!-- Start New Course Category -->
        <form action="https://template.codexshaper.com/admin/lms-hub/all-instructor.html">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-full lg:col-span-7 card p-4 lg:p-6">
                    <h6 class="card-title">Add Student</h6>
                    <div class="grid grid-cols-12 gap-x-4 gap-y-5 mt-7 pt-0.5">
                        <!-- <div class="col-span-full lg:col-span-6 leading-none">
                        <label for="course-name" class="form-label">Batch Code *</label>
                            <select class="form-input form-select w-full singleSelect" id="course-name">
                                <option value="create-a-new">None</option>
                                <option value="details-here">Details Here</option>
                                <option value="default-option">Default Option</option>
                                <option value="new-chart">New Chart</option>
                            </select>
                        </div> -->
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-first-name" class="form-label">Batch Code *</label>
                            <input type="text" id="instructor-first-name" placeholder="First Name" class="form-input" autocomplete="off" required>
                        </div>

                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-first-name" class="form-label">First Name *</label>
                            <input type="text" id="instructor-first-name" placeholder="First Name" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-last-name" class="form-label">Last Name *</label>
                            <input type="text" id="instructor-last-name" placeholder="Last Name" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-phone" class="form-label">Phone Number *</label>
                            <input type="number" id="instructor-phone" placeholder="Phone Number" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-6 leading-none">
                            <label for="instructor-email" class="form-label">Email *</label>
                            <input type="email" id="instructor-email" placeholder="Email" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full lg:col-span-4 leading-none">
                            <label class="form-label">Country *</label>
                            <select class="singleSelect" name="country">
                                <option selected disabled>Select Country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="GB">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                            </select>
                        </div>
                        <div class="col-span-full lg:col-span-4 leading-none">
                            <label class="form-label">State *</label>
                            <select class="singleSelect" name="state">
                                <option selected disabled>Select State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                            </select>
                        </div>
                        <div class="col-span-full lg:col-span-4 leading-none">
                            <label class="form-label">City *</label>
                            <select class="singleSelect" name="category">
                                <option selected disabled>Select City</option>
                                <option value="NYC">New York City</option>
                                <option value="LA">Los Angeles</option>
                                <option value="CHI">Chicago</option>
                                <option value="HOU">Houston</option>
                                <option value="PHX">Phoenix</option>
                                <option value="PHI">Philadelphia</option>
                                <option value="SA">San Antonio</option>
                            </select>
                        </div>
                        <div class="col-span-full leading-none">
                            <label for="address" class="form-label">Address *</label>
                            <input type="text" id="address" placeholder="Your Address" class="form-input" autocomplete="off" required>
                        </div>
                        <div class="col-span-full leading-none">
                            <label class="form-label">Meta Description</label>
                            <textarea class="summernote"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-5 card p-4 lg:p-6">
                    <h6 class="card-title">Add media files</h6>
                    <div class="mt-7 pt-0.5">
                        <p class="text-xs text-gray-500 dark:text-dark-text-two leading-none font-semibold mb-3">Profile (200x200)</p>
                        <label for="thumbnailsrc" class="file-container ac-bg text-xs leading-none font-semibold mb-3 cursor-pointer size-[200px] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border-four rounded-10 dk-theme-card-square">
                            <input type="file" id="thumbnailsrc" hidden class="img-src peer/file">
                            <span class="flex-center flex-col peer-[.uploaded]/file:hidden">
                                <span class="size-10 lg:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50">
                                    <img src="assets/images/icons/upload-file.svg" alt="icon" class="dark:brightness-200 dark:contrast-100 w-1/2 lg:w-auto">
                                </span>
                                <span class="mt-2 text-gray-500 dark:text-dark-text">Choose file</span>
                            </span>
                        </label>
                    </div>
                    <button type="submit" class="btn b-solid btn-primary-solid btn-lg w-max">Next</button>
                </div>
            </div>
        </form>
        <!-- End New Course Category -->

    </div>
    <!-- End Main Content -->

    <script data-cfasync="false" src="https://template.codexshaper.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/select/select2.min.js"></script>
    <script src="assets/js/vendor/flowbite.min.js"></script>
    <script src="assets/js/vendor/summernote.min.js"></script>
    <script src="assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js"></script>
    <script src="assets/js/component/app-menu-bar.js"></script>
    <script src="assets/js/switcher.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from template.codexshaper.com/admin/lms-hub/create-instructor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Aug 2024 13:48:34 GMT -->

</html>