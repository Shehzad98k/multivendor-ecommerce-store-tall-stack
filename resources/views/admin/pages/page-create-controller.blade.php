<x-slot name="pageTitle">
    {{ __('cms.page.create.title') }}
</x-slot>
<form wire:submit.prevent="store">
    <div class="flex flex-col w-full">
        @include('admin.pages.form')
    </div>
</form>
