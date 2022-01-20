
<hr>

<footer class="w3-padding">

    Footer Text | 
    Copyright {{date('Y')}}
    <a href="#">Facebook</a> | 
    <a href="#">Instagram</a>

    <br>

    @if (Auth::check())
        You are logged in as {{auth()->user()->first}} {{auth()->user()->last}} | 
        <a href="/console/logout">Log Out</a> | 
        <a href="/console/dashboard">Dashboard</a>
    @else
        <a href="/console/login">Login</a>
    @endif

</footer>

</body>
</html>