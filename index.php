<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <title>Result</title>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                button: '#FFA800',
                drop: '#C4C4C4',
                bg1: '#055AFF',
                bg2: '#06004E'
              },
            }
          }
        }
      </script>
</head>
<body>
    <div class="grid grid-cols-3">
        <div class="col-span-1 flex flex-col items-center py-10">
            <h1 class="font-semibold text-4xl pb-10">
                SCHOOL
            </h1>
            <div class="pt-10 pb-5">
                <button class="hover:bg-button hover:text-white w-80 py-1 rounded-full">
                    <h2 class="text-xl">
                        HOME
                    </h2>
                </button>
            </div>
            <div class="py-5">
                <button class="bg-button text-white w-80 py-1 rounded-full">
                    <h2 class="text-xl">
                        MY RESULT
                    </h2>
                </button>
            </div>
            <div class="py-5">
                <button class="hover:bg-button hover:text-white w-80 py-1 rounded-full">
                    <h2 class="text-xl">
                        SUBMISSIONS
                    </h2>
                </button>
            </div>
            <div class="py-5">
                <button class="hover:bg-button hover:text-white w-80 py-1 rounded-full">
                    <h2 class="text-xl">
                        TUTORIAL
                    </h2>
                </button>
            </div>
            <div class="py-5">
                <button class="hover:bg-button hover:text-white w-80 py-1 rounded-full">
                    <h2 class="text-xl">
                        SETTINGS
                    </h2>
                </button>
            </div>
            <div class="pt-28">
                <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="bg-drop font-medium rounded-full px-10 py-2.5 text-center inline-flex items-center" type="button">Semester 6 <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            </div>

            <!-- Dropdown menu -->
            <div id="dropdownInformation" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1" aria-labelledby="dropdownInformationButton">
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Semester 1</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Semester 2</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Semester 3</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Semester 4</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Semester 5</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-start-2 col-span-2">
            <div class="h-screen bg-gradient-to-t from-bg2 to-bg1">
                <div class="flex flex-col px-20 py-10">
                    <div class="w-full h-60 rounded-xl bg-white py-5 px-8 flex flex-row">
                        <div class="w-2/3">
                            <h1 class="font-semibold text-3xl pb-5">
                                Your Profile
                            </h1>
                            <span class="font-semibold text-2xl">
                                Hi Ivan,
                            </span>
                            <span class="text-2xl">
                                you have completed 50% of your semester. Keep Going!
                            </span>
                            <div class="py-7">
                                <button class="bg-button text-white w-80 py-1 rounded-full">
                                    <a href="/php/list-siswa.php" class="text-xl">
                                        See Profile
                                    </a>
                                </button>
                            </div>
                        </div>
                        <img src="/assets/study.jpg" alt="" class="w-60">
                    </div>
                    <div class="py-14">
                        <h1 class="font-semibold text-4xl text-white">
                            Your Result
                        </h1>
                    </div>
                    <div class="flex gap-x-10">
                        <div class="h-60 w-60 bg-button rounded-xl flex flex-col items-center py-5 px-5 text-white">
                            <h1 class="text-3xl font-semibold">
                                Web
                            </h1>
                            <h1 class="text-3xl font-semibold">
                                Programming
                            </h1>
                            <h1 class="text-6xl font-bold pt-10">
                                A
                            </h1>
                        </div>
                        <div class="h-60 w-60 bg-button rounded-xl flex flex-col items-center py-5 px-5 text-white">
                            <h1 class="text-3xl font-semibold pt-3">
                                Mathematics I
                            </h1>
                            <h1 class="text-6xl font-bold pt-16">
                                A
                            </h1>
                        </div>
                        <div class="h-60 w-60 bg-button rounded-xl flex flex-col items-center py-5 px-5 text-white">
                            <h1 class="text-3xl font-semibold pt-3">
                                Data Structure
                            </h1>
                            <h1 class="text-6xl font-bold pt-16">
                                A
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>
</html>