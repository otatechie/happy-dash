<div>
    <div>
        <x-page-heading pageHeading="Permissions" />
    </div>

    <div class="bg-white mx-auto p-6 rounded-xl border border-gray-100 shadow-sm mt-5">
        <div class="w-full md:w-9/12">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-slate-700">Permission Management</h3>
                    <p class="text-sm text-gray-500">All permissions that can be assigned to all users</p>
                </div>
                <div> <x-button sm wire:click="$dispatch('openModal', {component: 'add-permission-modal'})" class="mt-6"
                        blue label="Add permission" /></div>
            </div>
            <div class="border-t border-gray-200 my-4"></div>
            @foreach ($permissions as $permission)
                <span
                    class="inline-flex items-center gap-x-1 m-1 rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                    {{ $permission->name }}
                    <button type="button" wire:click="$dispatch('openModal', {component: 'delete-permission-modal'})"
                        class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-blue-600/20">
                        <span class="sr-only">Remove</span>
                        <svg viewBox="0 0 14 14" class="h-3.5 w-3.5 stroke-blue-600/50 group-hover:stroke-blue-600/75">
                            <path d="M4 4l6 6m0-6l-6 6" />
                        </svg>
                        <span class="absolute -inset-1"></span>
                    </button>
                </span>
            @endforeach
        </div>
    </div>
</div>
