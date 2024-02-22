<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTATC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>
           CONTATTI
        </h1>
    </header>
    <main>
        <nav>
            <ul>
                <li>
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a class="nav-link" href=" {{ url('/contact') }} ">Contatti</a>
                </li>
                <li>
                    <a class="nav-link" href=" {{ url('/aboutUs') }} ">aboutUs</a>
                </li>
            </ul>
        </nav>

    </main>
    
</body>
</html>