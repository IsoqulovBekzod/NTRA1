<?php

declare(strict_types=1);
loadPartials('header');
?>

<div class="page-wrapper toggled">
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <div class="container mx-auto my-10">
            <div class="flex justify-center items-center min-h-screen">
                <div class="bg-white dark:bg-slate-900 shadow rounded-lg p-6 max-w-sm w-full">
                    <h2 class="text-2xl font-semibold text-center text-slate-800 dark:text-white mb-6">Register</h2>
                    <form action="/register/create" method="post">
                        <div class="mb-5">
                            <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Name</label>
                            <input type="text" name="name" id="name" class="form-input mt-2 w-full px-3 py-2 bg-white dark:bg-slate-800 dark:text-slate-200 border border-gray-300 dark:border-gray-700 rounded-md focus:ring-0" placeholder="Ismingizni kiriting :" required>
                        </div>
                        <div class="mb-5">
                            <label for="lastname" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Last name</label>
                            <input type="text" name="lastname" id="lastname" class="form-input mt-2 w-full px-3 py-2 bg-white dark:bg-slate-800 dark:text-slate-200 border border-gray-300 dark:border-gray-700 rounded-md focus:ring-0" placeholder="Familiyangizni kiriting :" required>
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Email</label>
                            <input type="email" name="email" id="email" class="form-input mt-2 w-full px-3 py-2 bg-white dark:bg-slate-800 dark:text-slate-200 border border-gray-300 dark:border-gray-700 rounded-md focus:ring-0" placeholder="Emailingizni kiriting :" required>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="block text-sm font-medium text-slate-700 dark:text-slate-300">Parol</label>
                            <input type="password" name="password" id="password" class="form-input mt-2 w-full px-3 py-2 bg-white dark:bg-slate-800 dark:text-slate-200 border border-gray-300 dark:border-gray-700 rounded-md focus:ring-0" placeholder="Parolingizni kiriting :" required>
                        </div>

                        <button type="submit" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white w-full rounded-md py-2">Ro'yxatdan o'tish</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>



