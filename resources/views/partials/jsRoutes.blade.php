<script>
    window.jsRoutes = {
        category: {
            show: "{{ route('category.show.modal') }}",
            store: "{{ route('store.category') }}",
            edit: "{{ route('edit.category', ':id') }}"
            delete: "{{ route('delete.category', ':id') }}",
        }

    }
</script>
