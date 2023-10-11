<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <header>
        @include('partials.navbar')
    </header>
    <div class="container">
        <h2>Lista contatti</h2>
        <ul>
            @forelse($contatti as $contatto)
            <li>{{$contatto}}</li>
            @empty
            <li>No contacts yet</li>
            @endforelse
        </ul>
    </div>

</body>

</html>