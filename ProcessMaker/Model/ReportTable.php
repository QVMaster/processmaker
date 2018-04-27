<?php

namespace ProcessMaker\Model;

use Illuminate\Database\Eloquent\Model;
use ProcessMaker\Facades\SchemaManager;
use Watson\Validating\ValidatingTrait;

/**
 * Represents an Eloquent model of reportTable
 * @package ProcessMaker\Model
 */
class ReportTable extends Model
{
    use ValidatingTrait;

    // all tables will have this prefix
    const TABLE_PREFIX = 'PMT_';
    public static $attributesList = [
        'uid',
        'name',
        'description',
        'db_source_id',
        'process_id',
        'type',
        'grid',
        'tags'
    ];

    public $timestamps = false;
    public $incrementing = false;

    protected $table = 'additional_tables';

    // validation rules
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'db_source_id' => 'required',
        'type' => 'required'
    ];

    // validation rules
    protected $appends = [
        'fields'
    ];

    /**
     * Returns the name of the physical table
     *
     * @return string
     */
    public function physicalTableName()
    {
        return ReportTable::TABLE_PREFIX . strtoupper($this->ADD_TAB_NAME);
    }

    /**
     * Returns all the data rows of the physical table
     *
     * @return array
     */
    public function allDataRows()
    {
        return $this->getAssociatedPmTable()->allDataRows();
    }

    /**
     * Eloquent getter that returns the fields of the report table
     *
     * @return mixed
     */
    public function getFieldsAttribute()
    {
        $pmTable = PmTable::where('id', $this->id)->first();
        $fieldsMeta = SchemaManager::getMetadataFromSchema($pmTable)->columns;
        return $fieldsMeta;
    }

    /**
     * Eloquent relation that return the associated process of the report table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function process()
    {
        return $this->belongsTo(Process::class);
    }

    /**
     * Eloquent relation that return the collection of variables associated to the report table
     *
     * @return $this
     */
    public function variables()
    {
        return $this->belongsToMany(
            ProcessVariable::class,
            'FIELDS',
            'additional_table_id',
            'VAR_ID'
        )
            ->withPivot('FLD_NAME');
    }

    /**
     * Returns the PmTable of the report table
     *
     * @return PmTable
     */
    public function getAssociatedPmTable()
    {
        return PmTable::where('id', $this->id)->first();
    }
}
