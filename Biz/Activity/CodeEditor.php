<?php

namespace CodeEditorPlugin\Biz\Activity;

use AppBundle\Common\ArrayToolkit;
use Biz\Activity\Config\Activity;

class CodeEditor extends Activity
{
    protected function registerListeners()
    {
        return array();
    }

    public function get($targetId)
    {
        return array();
    }

    public function copy($activity, $config = array())
    {
        return array();
    }

    public function sync($sourceActivity, $activity)
    {
        return array();
    }

    public function update($targetId, &$fields, $activity)
    {
        return array();
    }

    public function isFinished($activityId)
    {
        return true;
    }

    public function delete($targetId)
    {
        return array();
    }

    public function create($fields)
    {
        return array();
    }
}
