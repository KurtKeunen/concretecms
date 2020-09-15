<?php
namespace Concrete\Core\Automation\Command;

use Concrete\Core\Application\Application;
use Concrete\Core\Automation\Command\Controller\RescanFilesController;
use Concrete\Core\Support\Manager as CoreManager;

defined('C5_EXECUTE') or die("Access Denied.");

class Manager extends CoreManager
{
    public function createRescanFilesDriver()
    {
        return $this->app->make(RescanFilesController::class);
    }

    public function __construct(Application $app)
    {
        parent::__construct($app);
    }


}
