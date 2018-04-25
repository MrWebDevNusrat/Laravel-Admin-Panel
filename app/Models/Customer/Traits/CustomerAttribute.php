<?php

namespace App\Models\Customer\Traits;

/**
 * Class CustomerAttribute.
 */
trait CustomerAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-customer", "admin.customers.edit").'
                '.$this->getDeleteButtonAttribute("delete-customer", "admin.customers.destroy").'
                </div>';
    }
}
