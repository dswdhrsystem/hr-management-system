@extends('layouts.master')

@section('title', 'Settings')

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

        <div class="bg-white dark:bg-zink-600 rounded-xl shadow-lg border border-slate-200 dark:border-zink-500 p-8">

            <h1 class="text-3xl font-bold text-slate-800 dark:text-white mb-3">
                System Settings
            </h1>

            <p class="text-slate-500 dark:text-zink-300 mb-8">
                Manage HR system preferences, account configuration, and future system options.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                    <h3 class="font-bold text-slate-800 dark:text-white mb-2">Account Settings</h3>
                    <p class="text-slate-500 dark:text-zink-300">Manage profile and account information.</p>
                </div>

                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                    <h3 class="font-bold text-slate-800 dark:text-white mb-2">Security</h3>
                    <p class="text-slate-500 dark:text-zink-300">Password, login, and access settings.</p>
                </div>

                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                    <h3 class="font-bold text-slate-800 dark:text-white mb-2">System Preferences</h3>
                    <p class="text-slate-500 dark:text-zink-300">Configure future HR system options.</p>
                </div>

            </div>

            <a href="{{ route('home') }}"
               class="inline-flex items-center mt-8 px-6 py-3 rounded-lg bg-custom-500 text-white font-semibold hover:bg-custom-600 transition-all shadow-md">
                Back to Dashboard
            </a>

        </div>

    </div>
</div>
@endsection