<?php

namespace App\DataTables;

use App\Models\Kelas;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;



class KelasDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('aksi', function ($item) {
                return "<div class='d-flex'>
                <a href=" . route('kelas.edit', $item->id) . " class='btn btn-success btn-sm'><i class='fas fa-pencil-alt'></i></a>
                <form action=" . route('kelas.destroy', $item->id) . " class='ml-1 delete-form' data-target='" . $item->id . "' method='POST'>
                    " . csrf_field() . "
                    <input type='hidden' name='_method' value='delete'>
                    <button class='btn btn-danger btn-sm' onclick='showModal(`Are you sure delete : $item->name ?`, `.delete-form`, `$item->id`);'>
                        <i class='fas fa-trash'></i>
                    </button>
                </form>
            </div>";
            })->editColumn('name', function ($item) {
                return "<a href=" . route('kelas.show', $item->id) . ">" . "<b>" . $item->name  . "</b>" . "</a>";
            })->rawColumns(['name', 'aksi']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\KelasDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Kelas $model)
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
            ->setTableId('kelasdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('nama_kelas'),
            Column::make('keterangan'),

            Column::computed('aksi')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Kelas_' . date('YmdHis');
    }
}
