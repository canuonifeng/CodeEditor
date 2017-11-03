<?php

namespace CodeEditorPlugin\Controller;

use AppBundle\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Activity\ActivityActionInterface;

class CodeEditorActivityController extends BaseController implements ActivityActionInterface
{
    public function showAction(Request $request, $activity)
    {
        return $this->render(
            'CodeEditorPlugin:activity:show.html.twig',
            array()
        );
    }

    public function editAction(Request $request, $id, $courseId)
    {
        return $this->render(
            'CodeEditorPlugin:activity:edit.html.twig',
            array()
        );
    }

    public function createAction(Request $request, $courseId)
    {
        return $this->render(
            'CodeEditorPlugin:activity:create.html.twig',
            array()
        );
    }

    public function previewAction(Request $request, $task)
    {
        return $this->render(
            'CodeEditorPlugin:activity:show.html.twig',
            array()
        );
    }

    public function finishConditionAction(Request $request, $activity)
    {
        return $this->render(
            'CodeEditorPlugin:activity:finish-condition.html.twig',
            array()
        );
    }
}
