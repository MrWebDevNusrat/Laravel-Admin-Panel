<?php

namespace App\Repositories\Backend\Customer;

use DB;
use Carbon\Carbon;
use App\Models\Customer\Customer;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerRepository.
 */
class CustomerRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Customer::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.customers.table').'.id',
                config('module.customers.table').'.created_at',
                config('module.customers.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $customer = self::MODEL;
        $customer = new $customer();
        if ($customer->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.customers.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Customer $customer
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Customer $customer, array $input)
    {
    	if ($customer->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.customers.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Customer $customer
     * @throws GeneralException
     * @return bool
     */
    public function delete(Customer $customer)
    {
        if ($customer->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.customers.delete_error'));
    }
}
