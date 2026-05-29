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

        <div class="bg-white dark:bg-zink-600 rounded-xl shadow-lg border border-slate-200 dark:border-zink-500 p-8">

            <h1 class="text-3xl font-bold text-slate-800 dark:text-white mb-3">
                Account Information
            </h1>

            <p class="text-slate-500 dark:text-zink-300 mb-8">
                View and manage account details.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                    <h3 class="font-bold text-white mb-2">Username</h3>
                    <p class="text-zink-300">Administrator</p>
                </div>

                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                    <h3 class="font-bold text-white mb-2">Role</h3>
                    <p class="text-zink-300">HR Administrator</p>
                </div>

                <div class="bg-slate-50 dark:bg-zink-700 rounded-xl p-6 border border-slate-200 dark:border-zink-500">
                    <h3 class="font-bold text-white mb-2">Status</h3>
                    <p class="text-green-400">Active</p>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection