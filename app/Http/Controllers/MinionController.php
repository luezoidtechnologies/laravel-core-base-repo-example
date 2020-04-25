<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/4/20
 * Time: 23:33 PM
 */

namespace App\Http\Controllers;

use App\Http\Requests\MinionCreateRequest;
use App\Http\Requests\MinionDeleteRequest;
use App\Http\Requests\MinionUpdateRequest;
use App\Repositories\MinionRepository;
use Luezoid\Laravelcore\Http\Controllers\ApiController;
use Luezoid\Laravelcore\Jobs\BaseJob;

class MinionController extends ApiController
{
    protected $repository = MinionRepository::class;

    protected $createJob = BaseJob::class;
    protected $storeRequest = MinionCreateRequest::class;

    protected $updateJob = BaseJob::class;
    protected $updateRequest = MinionUpdateRequest::class;

    protected $deleteJob = BaseJob::class;
    protected $deleteRequest = MinionDeleteRequest::class;

    protected $indexWith = [
        'leading_mission'
    ];

    protected $showWith = [
        'leading_mission'
    ];
}
