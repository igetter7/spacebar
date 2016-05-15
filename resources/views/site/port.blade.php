<div class="container">
    @foreach ($ports as $port)
        {{ $port->title }}
    @endforeach
</div>

{!! $ports->links() !!}