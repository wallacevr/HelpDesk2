<div>


    <livewire:datatable
    model="App\Models\Empresa"

    sort="id|asc"
    include="id, razaosocial, email, created_at|Created"
    searchable="razaosocial, email"
    dates="dob, created_at"
    times="bedtime|g:i A"
    hideable="select"
    exportable
/>

</div>
