<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table id="dtb-contact" class="table table-hover table-striped">
                <thead>
                <tr>
                    <th> # </th>
                    <th>{{ __('First Name') }}</th>
                    <th>{{ __('Last Name') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
               </thead>
            </table>
        </div>
    </div>
</div>


@push('body.end')
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#dtb-contact').DataTable({



                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,

                "lengthMenu": [25, 50, 100, 500, 1000, 2000, 5000, 10000, 50000, 100000],
                "ajax": {
                    "url": "{{ route('admin.contact.json') }}",
                    data: function (data) {

                    }
                },

                order: [[0, 'asc']],
                columns: [
                    {data: 'id', name: 'id',orderable: false,},
                    {data: 'first_name', name: 'first_name',orderable: false, },
                    {data: 'last_name', name: 'last_name',orderable: false, },
                    {data: 'phone', name: 'phone',orderable: false, },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>


@endpush
