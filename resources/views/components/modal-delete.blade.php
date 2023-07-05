@props([
    'route' => '',
    'id',
    'label' => 'Borrar',
    'deleteName' => ''
    ])

<div x-data="{ deleteModal{{ $id }}: false }" class="flex justify-center">
    {{-- Button --}}
    <span x-on:click="deleteModal{{ $id }} = true">
        <button type="button" class="btn btn-sm btn-danger">{{ $label }}</button>
    </span>

    <!-- Modal -->
    <div
        x-show="deleteModal{{ $id }}"
        style="display: none"
        x-on:keydown.escape.prevent.stop="deleteModal{{ $id }} = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-10 overflow-y-auto"
    >
        <!-- Overlay -->
        <div x-show="deleteModal{{ $id }}" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

        <!-- Panel -->
        <div
            x-show="deleteModal{{ $id }}" x-transition
            x-on:click="deleteModal{{ $id }} = false"
            class="relative flex min-h-screen items-center justify-center p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="deleteModal{{ $id }}"
                class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-12 shadow-lg"
            >
                {{-- Boton X --}}
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" @click="deleteModal{{ $id }} = false">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>

                <!-- Title -->
                <h2 class="text-3xl font-bold" :id="$id('modal-title')">Borrar</h2>

                <!-- Content -->
                <p class="mt-2 text-gray-600">Está seguro que desea borrar <strong>{{ $deleteName }}</strong>?</p>

                <!-- Buttons -->
                <div class="mt-8 flex space-x-2">
                    <form action="{{ $route }}" method="POST" class="">
                        @csrf
                        @method('DELETE')
                        <button x-on:click="deleteModal{{ $id }} = false" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Si, estoy seguro</button>
                        <button x-on:click="deleteModal{{ $id }} = false" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>