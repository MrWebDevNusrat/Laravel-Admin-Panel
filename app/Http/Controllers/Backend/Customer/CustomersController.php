<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Models\Customer\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Customer\CustomerRepository;
use App\Http\Requests\Backend\Customer\ManageCustomerRequest;
use App\Http\Requests\Backend\Customer\CreateCustomerRequest;
use App\Http\Requests\Backend\Customer\StoreCustomerRequest;
use App\Http\Requests\Backend\Customer\EditCustomerRequest;
use App\Http\Requests\Backend\Customer\UpdateCustomerRequest;
use App\Http\Requests\Backend\Customer\DeleteCustomerRequest;

/**
 * CustomersController
 */
class CustomersController extends Controller
{
    /**
     * variable to store the repository object
     * @var CustomerRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param CustomerRepository $repository;
     */
    public function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Customer\ManageCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageCustomerRequest $request)
    {
        return view('backend.customers.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateCustomerRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateCustomerRequest $request)
    {
        return view('backend.customers.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCustomerRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $input = $request->except(['_token']);
        $this->repository->create($input);
        return redirect()->route('admin.customers.index')->withFlashSuccess(trans('alerts.backend.customers.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Customer\Customer  $customer
     * @param  EditCustomerRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer, EditCustomerRequest $request)
    {
        return view('backend.customers.edit', compact('customer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCustomerRequestNamespace  $request
     * @param  App\Models\Customer\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $customer, $input );
        //return with successfull message
        return redirect()->route('admin.customers.index')->withFlashSuccess(trans('alerts.backend.customers.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteCustomerRequestNamespace  $request
     * @param  App\Models\Customer\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer, DeleteCustomerRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($customer);
        //returning with successfull message
        return redirect()->route('admin.customers.index')->withFlashSuccess(trans('alerts.backend.customers.deleted'));
    }
    
}
