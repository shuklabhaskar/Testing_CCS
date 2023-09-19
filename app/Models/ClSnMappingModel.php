<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

trait ClSnMappingModel
{
    public function clSnMappingSave($engraved_id, $chip_id)
    {
        DB::table('cl_sn_mapping')->insert([
            'engraved_id' => $engraved_id,
            'chip_id' => $chip_id
        ]);
    }
}
