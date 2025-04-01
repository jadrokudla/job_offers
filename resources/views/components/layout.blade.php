<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Position</title>
    @vite([ 'resources/js/app.js','resources/css/app.css'])
</head>

<body class="bg-gradient-to-r from-black/40 to-transparent pb-20">
        <nav class="bg-slate-200 flex justify-between items-center p-5 border-b">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

        <div class="flex space-x-10 font-semibold">
                <a href="#">jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
        </div>

            @auth
            <div class="space-x-10 font-semibold flex">
                <a href="/jobs/create">Create a job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')

                    <button>Log Out</button>
                </form>
            </div>
            @endauth


            @guest
            <div class="flex space-x-8">
                <a href="/register">Sign up</a>
                <a href="/login">Log in</a>
            </div>
            @endguest


        </nav>

        <main class="mt-10 max-w-[1200px] mx-auto">
                {{ $slot }}
        </main>
    </div>
</body>
</html>
