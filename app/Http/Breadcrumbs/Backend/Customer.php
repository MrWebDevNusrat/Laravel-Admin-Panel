<?php

Breadcrumbs::register('admin.customers.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.customers.management'), route('admin.customers.index'));
});

Breadcrumbs::register('admin.customers.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.customers.index');
    $breadcrumbs->push(trans('menus.backend.customers.create'), route('admin.customers.create'));
});

Breadcrumbs::register('admin.customers.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.customers.index');
    $breadcrumbs->push(trans('menus.backend.customers.edit'), route('admin.customers.edit', $id));
});
