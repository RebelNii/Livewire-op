

<div class="">
    <div class="container-fluid bg-slate-800 flex justify-between items-center mx-auto px-2 text-white text-center text-lg font-semibold">
        <div class="">
            <a href="/">Home</a>
        </div>
        <div class="flex gap-2">
            <a href="/" class="px-4 py-2 {{(Request()->routeIs('/')) ? 'bg-red-800' : ''}}">Counter</a>
            <a href="/cal" class="px-4 py-2 {{(Request()->routeIs('cal')) ? 'bg-red-800' : ''}}">Calculator</a>
            <a href="/drop" class="px-4 py-2 {{(Request()->routeIs('drop')) ? 'bg-red-800' : ''}}">Dropdown</a>
            <a href="/upload" class="px-4 py-2 {{(Request()->routeIs('upload')) ? 'bg-red-800' : ''}}">Upload Image</a>
            <a href="/todo" class="px-4 py-2 {{(Request()->routeIs('todo')) ? 'bg-red-800' : ''}}">Todo-List</a>
            <a href="/search" class="px-4 py-2 {{(Request()->routeIs('search')) ? 'bg-red-800' : ''}}">Search</a>
            <a href="/register" class="px-4 py-2 {{(Request()->routeIs('register')) ? 'bg-red-800' : ''}}">Register</a>
        </div>
    </div>
</div>