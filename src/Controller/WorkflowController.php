<?php

declare(strict_types=1);

namespace Yokai\SonataWorkflow\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

/**
 * @author Yann Eugoné <eugone.yann@gmail.com>
 */
class WorkflowController extends CRUDController
{
    use WorkflowControllerTrait;
}
