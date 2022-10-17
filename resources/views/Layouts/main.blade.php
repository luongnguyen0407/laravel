<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <h1>This is Header</h1>
        </header>
        <main class="container">
            <aside class="sidebar">
                @section('sidebar')
                    <p>This is search from parent</p>
                @show
            </aside>
            <main class="content">
                @yield('content')
            </main>
        </main>
        <footer>
            <h1>This is footer</h1>
        </footer>
    </div>
</body>

</html>
