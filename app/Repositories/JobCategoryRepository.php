<?php

namespace App\Repositories;



class JobCategoryRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Entities\JobCategory';
    }
}
