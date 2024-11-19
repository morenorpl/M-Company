<div class="antialiased">
    <!-- Navbar -->
    <nav class="bg-[#AAD7B8] border-b-4 border-[#0C0D0F] shadow-lg px-4 py-3 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center ">
            <div class="flex justify-start items-center">
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-2 text-acent1 rounded-lg cursor-pointer lg:hidden hover:bg-bgLight focus:bg-bgLight focus:ring-2 focus:ring-acent1">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>

                <!-- Logo -->
                <a href="#" class="flex items-center justify-between mr-4">
                    <img src="../assets/images/dashboard.png" class="mr-3 h-8 hidden md:inline" alt="Logo" />
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-[#0C0D0F]">M-COMPANY</span>
                </a>

                

            </div>

            <div class="flex items-center gap-3 lg:order-2">
                <a href="index.php?page=create" type="button" class="group inline-flex items-center px-4 py-2 text-sm font-medium text-[#0C0D0F] bg-transparent border-2 border-[#0C0D0F]  hover:bg-[#0C0D0F] hover:text-white focus:z-10 focus:ring-2 ">
                    <svg class="w-4 h-4 mr-2 text-[#0C0D0F] group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Create Report
                </a>
                <!-- Notification icon -->
                <button type="button" data-dropdown-toggle="notification-dropdown" class="flex items-center justify-center relative w-9 h-9 text-gray-600 bg-[#0C0D0F] hover:bg-acent1 hover:text-white focus:bg-acent1 focus:text-white transition-all duration-200">
                    <span class="absolute flex h-5 w-6 -top-2 -right-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#F7C236] opacity-75"></span>
                        <span class="relative flex items-center justify-center rounded-full h-6 w-6 bg-[#F7C236] text-[9px] text-[#0C0D0F]">01</span>
                    </span>
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z" />
                    </svg>
                </button>

                <!-- Notification Dropdown menu -->
                <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-gray-800 divide-y divide-gray-800 shadow-lg" id="notification-dropdown">
                    <h4 class="block py-2 px-4 text-base font-medium text-center text-white bg-[#0C0D0F]">Notifications</h4>
                    <div>
                        <a href="#" class="flex py-3 px-4 border-b border-gray-800 hover:bg-bgLight">
                            <div class="flex-shrink-0">
                                <img class="w-11 h-11 rounded-full object-cover" src="/assets/images/rudel_islam.png" alt="Rubel Islam" />
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-white font-normal text-sm mb-1.5 ">
                                    New message from
                                    <span class="font-semibold text-gray">Rubel Islam</span>: "Create a new class text for class 10."
                                </div>
                                <div class="text-xs font-medium text-gray-400">a few moments ago</div>
                            </div>
                        </a>
                    </div>
                    <a href="#" class="block py-2 text-md font-medium text-center text-white bg-[#0C0D0F] hover:bg-[#F7C236] hover:text-[#0C0D0F]">
                        <div class="inline-flex items-center">
                            <svg class="w-5 h-5 mr-2 pt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            View all
                        </div>
                    </a>
                </div>
                <!-- End of the Notification -->

                <!-- User Profile -->
                <button type="button" class="flex mx-3 text-sm bg-gray-800 border-2 border-[#0C0D0F] md:mr-0 focus:ring-1 focus:ring-[#0C0D0F] focus:border-[#F7C236]" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 object-cover" src="../assets/images/profile.jpg" alt="user photo" />
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-[#0C0D0F] divide-y divide-gray-700 shadow" id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-100"><?= $_SESSION['name'] ?></span>
                        <span class="block text-sm text-gray-100 truncate"><?= $_SESSION['username'] ?></span>
                    </div>
                    <ul class="py-1 text-gray-100" aria-labelledby="dropdown">
                        <li>
                            <a href="#" class="block py-2 px-4 text-sm hover:bg-[#F7C236] hover:text-[#0C0D0F]">My profile</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-sm hover:bg-[#F7C236] hover:text-[#0C0D0F]">Account settings</a>
                        </li>
                    </ul>
                    <ul class="py-1 text-gray-100" aria-labelledby="dropdown">
                        <li>
                            <a href="index.php?page=logout" class="block py-2 px-4 text-sm hover:bg-[#F7C236] hover:text-[#0C0D0F] rounded">Log out</a>
                        </li>
                    </ul>
                </div>
                <!-- End of the user profile -->
            </div>
        </div>
    </nav>
    <!-- End of the Navbar -->