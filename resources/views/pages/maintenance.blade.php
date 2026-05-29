@extends('layouts.master')

@section('title', 'System Maintenance')

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

        <div class="bg-white dark:bg-zink-600 rounded-xl shadow-lg border border-slate-200 dark:border-zink-500">

            <!-- HEADER -->
            <div class="p-10 text-center">

                <div class="mb-6">
                    <i class="ri-tools-fill text-yellow-500 text-8xl"></i>
                </div>

                <h1 class="text-4xl font-bold text-slate-800 dark:text-white mb-4">
                    HR System Maintenance Center
                </h1>

                <p class="text-slate-500 dark:text-zink-300 text-lg">
                    The Human Resource Management System is operating normally.
                </p>

                <p class="text-slate-500 dark:text-zink-300 mt-2">
                    This page is reserved for maintenance schedules,
                    system updates, security patches, and future enhancements.
                </p>

            </div>

            <!-- STATUS CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-8 pb-8">

                <!-- STATUS -->
                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 text-center border border-slate-200 dark:border-zink-500 shadow-sm">

                    <h5 class="font-bold text-slate-700 dark:text-white mb-4 text-lg">
                        System Status
                    </h5>

                    <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-500 text-white font-semibold shadow">
                        <span>🟢</span>
                        Online
                    </span>

                </div>

                <!-- VERSION -->
                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 text-center border border-slate-200 dark:border-zink-500 shadow-sm">

                    <h5 class="font-bold text-slate-700 dark:text-white mb-4 text-lg">
                        Current Version
                    </h5>

                    <span class="inline-flex items-center px-5 py-2 rounded-full bg-blue-500 text-white font-semibold shadow">
                        v1.0
                    </span>

                </div>

                <!-- LAST UPDATE -->
                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 text-center border border-slate-200 dark:border-zink-500 shadow-sm">

                    <h5 class="font-bold text-slate-700 dark:text-white mb-4 text-lg">
                        Last Update
                    </h5>

                    <span class="inline-flex items-center px-5 py-2 rounded-full bg-purple-500 text-white font-semibold shadow">
                        May 2026
                    </span>

                </div>

            </div>

            <!-- FEATURES -->
            <div class="px-8 pb-8">

                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500 shadow-sm">

                    <h4 class="font-bold text-slate-800 dark:text-white mb-5 text-xl">
                        Planned Features
                    </h4>

                    <ul class="space-y-4 text-slate-700 dark:text-zink-200">

                        <li>✅ Attendance Management Improvements</li>
                        <li>✅ Employee Performance Tracking</li>
                        <li>✅ Leave Approval Workflow</li>
                        <li>✅ Payroll Module Integration</li>
                        <li>✅ HR Analytics Dashboard</li>

                    </ul>

                </div>

            </div>

            <!-- BUTTON -->
            <div class="text-center pb-10">

                <a href="{{ route('home') }}"
                   class="inline-flex items-center px-8 py-3 rounded-lg bg-custom-500 text-white font-semibold hover:bg-custom-600 transition-all shadow-md">

                    <i class="ri-arrow-left-line mr-2"></i>
                    Back to Dashboard

                </a>

            </div>

        </div>

    </div>

</div>
@endsection