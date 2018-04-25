<?php

namespace App\Http\Controllers\Backend\Customer;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Customer\CustomerRepository;
use App\Http\Requests\Backend\Customer\ManageCustomerRequest;

/**
 * Class CustomersTableController.
 */
class CustomersTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var CustomerRepository
     */
    protected $customer;

    /**
     * contructor to initialize repository object
     * @param CustomerRepository $customer;
     */
    public function __construct(CustomerRepository $customer)
    {
        $this->customer = $customer;
    }

    /**
     * This method return the data of the model
     * @param ManageCustomerRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCustomerRequest $request)
    {
        return Datatables::of($this->customer->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($customer) {
                return Carbon::parse($customer->created_at)->toDateString();
            })
            ->addColumn('actions', function ($customer) {
                return $customer->action_buttons;
            })
            ->make(true);
    }
}
