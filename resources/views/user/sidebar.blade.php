<x-container>
    <h1 class="font-bold text-lg mb-4">Menu usuarios</h1>
    <ul class="text-sm text-gray-600 mb-4">
        @can('Documentos. Ver.')
            <li class="leading-7 mb-1 border-l-4 @routeIs('documents.*') border-indigo-400 @endif pl-4">
                <a href="{{ route('documents.index') }}">Documentos</a>
            </li>
        @endif
    </ul>
</x-container>
