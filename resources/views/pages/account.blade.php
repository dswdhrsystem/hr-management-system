@extends('layouts.master')

@section('title', 'Account')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu
            group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu
            group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md
            group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md
            group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm
            group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm
            pt-20
            pb-10
            px-6">

    <div class="max-w-7xl mx-auto">

        <div class="bg-white dark:bg-zink-600 rounded-xl shadow-lg border border-slate-200 dark:border-zink-500 overflow-hidden">

            <!-- Header -->
            <div class="bg-custom-500 text-white p-8">

                <div class="flex flex-col md:flex-row items-center gap-6">

                    <div class="w-24 h-24 rounded-full bg-white/20 flex items-center justify-center text-4xl">
                        <i class="ri-user-3-fill"></i>
                    </div>

                    <div>
                        <h1 class="text-3xl font-bold">
                            HR Administrator
                        </h1>

                        <p class="text-white/80 mt-1">
                            Human Resource Management System Administrator
                        </p>
                    </div>

                </div>

            </div>

            <!-- Account Details -->
            <div class="p-8">

                <h2 class="text-xl font-semibold text-slate-800 dark:text-white mb-6">
                    Account Information
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                        <h5 class="text-slate-500 dark:text-zink-300 mb-2">
                            Username
                        </h5>

                        <p class="font-bold text-slate-800 dark:text-white">
                            Administrator
                        </p>
                    </div>

                    <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                        <h5 class="text-slate-500 dark:text-zink-300 mb-2">
                            Role
                        </h5>

                        <p class="font-bold text-slate-800 dark:text-white">
                            HR Administrator
                        </p>
                    </div>

                    <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                        <h5 class="text-slate-500 dark:text-zink-300 mb-2">
                            Status
                        </h5>

                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300">
                            Active
                        </span>
                    </div>

                    <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                        <h5 class="text-slate-500 dark:text-zink-300 mb-2">
                            Last Login
                        </h5>

                        <p class="font-bold text-slate-800 dark:text-white">
                            Today
                        </p>
                    </div>

                </div>

                <!-- Quick Actions -->
                <div class="mt-8">

                    <h2 class="text-xl font-semibold text-slate-800 dark:text-white mb-4">
                        Quick Actions
                    </h2>

                    <div class="flex flex-wrap gap-3">

                        <button class="px-5 py-3 bg-custom-500 text-white rounded-lg hover:bg-custom-600 transition">
                            Edit Profile
                        </button>

                        <button class="px-5 py-3 bg-slate-200 dark:bg-zink-700 dark:text-white rounded-lg">
                            Change Password
                        </button>

                        <button class="px-5 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                            Logout
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection