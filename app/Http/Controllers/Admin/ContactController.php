<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;
use App\Models\Contact;

class ContactController extends Controller
{
    private $redirectTo = '';

    /**
     * Create a new contact.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = 'admin/contacts';
    }

    /**
     * Display a listing of the Contact.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        return view('admin.contacts.index');
    }

    /**
     * Return a json data of the Contact.
     *
     * @param  Request  $request
     * @return Response
     * @throws Exception
     */
    public function json(Request $request)
    {
        $contacts = Contact::query()->latest();
        return DataTables::of($contacts)
            ->addColumn('action', function ($contact) {
                return view('admin.contacts.includes.action', array('contact' => $contact));
            })
            ->rawColumns(['action'])
            ->make(true);
    }

   
    /**
     * Show the form for creating a new Contact.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('admin.contacts.create');
    }



    /**
     * Store a newly created user in storage.
     *
     * @param  Request  $request
     * @return Application|RedirectResponse|Redirector|Redirect
     */
    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect($this->redirectTo)->with('success', __('Contact created successfully'));
    }

    /**
     * Display the specified Contact.
     *
     * @param  int  $id
     * @return Application|RedirectResponse|Redirector|Redirect|View
     */
    public function show($id)
    {
        $contact = Contact::findorFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified Contact.
     *
     * @param  int  $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $contact = Contact::findorFail($id);
        return view('admin.contacts.edit', [
            'contact'=> $contact,
        ]);
    }

    /**
     * Update the specified resource in Contact.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::findorFail($id);
        $contact->update($request->validated());
        return redirect($this->redirectTo)->with('success', __('Contact updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     * @throws Redirect|Exception
     */
    public function destroy($id)
    {
        $contact = Contact::findorFail($id);
        $contact->delete();
        return redirect($this->redirectTo)->with('success', __('Contact deleted successfully'));
    }

    public function importContacts(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xml',
        ]);
        try
        {
            $xmlFile = $request->file('file');
            $xmlData = simplexml_load_file($xmlFile);
            $XMLDecodedData = json_decode(json_encode($xmlData), true);
            $contacts = $XMLDecodedData['contact'] ?? [];
            foreach($contacts as $contact)
            {
                Contact::create([
                    'first_name' => $contact['name'] ?? null,
                    'last_name' => $contact['lastName'] ?? null,
                    'phone' => $contact['phone'] ?? null,
                ]);
            }
            return back()->with('success', 'Contacts Imported Successfully');
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}
