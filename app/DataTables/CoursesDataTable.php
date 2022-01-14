<?php

namespace App\DataTables;

use App\Models\Course;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CoursesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $data=Course::with('Category');
        $msg='are you sure ?';
        return datatables()
            ->eloquent($query)
            ->addColumn('Category',function (Course $course) {
                return $course->Category->name;})
            ->addColumn('action', '
            <a  href="courses/viewCourse/{{$id}}" > <i class="fa la-eye text-info mr-5"></i></a>
             <a  href="courses/EditCourse/{{$id}}"> <i class="fa la-pen text-success  mr-5"></i></a>
              <a  href="courses/deleteCourse/{{$id}}"  onclick="return confirm(\'are you sure ?\')" > <i class="fa la-trash text-danger mr-5"></i></a>

            ');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Course $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Course $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
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

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            'id',
            'name',
            'Category',
            'levels',
            'hours',
            'action',

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Courses_' . date('YmdHis');
    }
}
