<?php

namespace PanicHD\PanicHD\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use PanicHD\PanicHD\Models\Status;

class BasicStatuses extends Seeder
{
    public $statuses = [
        'NEW'              => '#319df8',
        'OPEN'             => '#ffbc1b',
        'RESOLVED'         => '4bcd540',
        'DISMISSED'        => '#858585',
        'TO DO'            => '#319df8',
        'IN PROGRESS'      => '#ffbc1b',
        'ON HOLD'          => '#df32f9',
        'QA TESTING'       => '4bcd540',
        'IN REVIEW'        => '4bcd540',
        'DONE'             => '#858585',
        'CUSTOMER PENDING' => '#df32f9',
        'PENDING BY OTHER' => '#df32f9',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Create statuses
        foreach ($this->statuses as $name => $color) {
            $status = Status::firstOrNew(['name'  => $name]);
            $status->color = $color;
            $status->save();
        }
    }
}
