<div class="dtb-actions">


    <a
        href="{{ route('admin.contacts.show', $contact->id) }}"
        title="View" class="float-left mr-2 btn btn-xs btn-warning">
        <i class="material-icons text-md">visibility</i>
    </a>
    <a
        href="{{ route('admin.contacts.edit', $contact->id) }}"
        title="Edit" class="float-left mr-2 btn btn-xs btn-success">
        <i class="material-icons text-md">edit</i>
    </a>

    <div class="float-left">
        <form method="POST" action="{{ route('admin.contacts.destroy', $contact->id) }}" accept-charset="UTF-8" data-toggle="tooltip" title="{{__('Are You Sure')}}" data-original-title="Delete">
            @csrf
            @method('DELETE')
            <a href="#" class="float-left mr-2 btn btn-xs btn-danger " data-toggle="modal" data-target="#confirmDelete" data-title="{{__('Are You Sure')}}" data-message="{{__('To delete this contact')}}">
                <i class="material-icons text-md">delete</i>
            </a>
        </form>
    </div>


</div>
