<x-slot name="pageTitle">
    {{ __('dietaryRistriction.edit.title') }}
</x-slot>
<form action="submit" method="POST" wire:submit.prevent="update">
    <div class="grid grid-cols-12">
        @include('admin.catalog.dietary-ristrictions.form')
    </div>
</form>
