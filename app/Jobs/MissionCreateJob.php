<?php

namespace App\Jobs;

use App\Events\BringMinionToLabEvent;
use App\Repositories\MissionRepository;
use Luezoid\Laravelcore\Jobs\BaseJob;

class MissionCreateJob extends BaseJob
{
    public $method = 'createMission';
    public $repository = MissionRepository::class;
    public $event = BringMinionToLabEvent::class;
}
