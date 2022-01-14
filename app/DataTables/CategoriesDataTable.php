<?php

namespace App\DataTables;

use App\Models\Category;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoriesDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', '
            <a  href="categories/deleteCategory/{{$id}}"  onclick="return confirm(\'are you sure ?\')" > <i class="fa la-trash text-danger mr-5"></i></a>
            <a  href="categories/EditCategory/{{$id}}" > <i class="fa la-pen text-success mr-5"></i></a>');
    }


    public function query(Category $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('name-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->lengthMenu(
                [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ]);

    }

    protected function getColumns()
    {
        return [
            'id',
            'name',
            'action',
        ];
    }

    protected function filename()
    {
        return 'Categories_' . date('YmdHis');
    }
}
