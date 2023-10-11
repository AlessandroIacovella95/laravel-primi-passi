<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    <header>
        @include('partials.navbar')
    </header>

    <main>
        <div class="container">
            <h1>{{$name}}</h1>
        </div>
    </main>
</body>

</html>