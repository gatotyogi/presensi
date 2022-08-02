<?php

namespace App\DataTables;

use App\Models\Mapel;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MapelDataTable extends DataTable
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
            <a href=" . route('mapel.edit', $item->kode_mapel) . " class='btn btn-success btn-sm'><i class='fas fa-pencil-alt'></i></a>
            <form action=" . route('mapel.destroy', $item->kode_mapel) . " class='ml-1 delete-form' data-target='" . $item->kode_mapel . "' method='POST'>
                " . csrf_field() . "
                <input type='hidden' name='_method' value='delete'>
                <button class='btn btn-danger btn-sm' onclick='showModal(`Are you sure delete : $item->nama_mapel ?`, `.delete-form`, `$item->kode_mapel`);'>
                    <i class='fas fa-trash'></i>
                </button>
            </form>
        </div>";
            })->editColumn('name', function ($item) {
                return "<a href=" . route('mapel.show', $item->kode_mapel) . ">" . "<b>" . $item->name  . "</b>" . "</a>";
            })->rawColumns(['name', 'aksi']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\MapelDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Mapel $model)
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
            ->setTableId('mapeldatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('print'),
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
            Column::make('kode_mapel'),
            Column::make('nama_mapel'),
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
        return 'Mapel_' . date('YmdHis');
    }
}
