<?php

namespace App\Http\Controllers\Web;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    protected $contact;

    /**
     * __construct
     *
     * @param  Contact $contact
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return  view('site.contact');
    }

    /**
     * store
     *
     * @param mixed $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $contact = $this->contact->create(
            $request->only(
                'name',
                'phone',
                'email',
                'reason_contact',
                'message'
            )
        );

        return  view('site.contact');
    }
}
