<?php

namespace App\Presenters;

use Nette;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    public function afterRender()
    {
        if ($this->isAjax() && $this->hasFlashSession())
            $this->invalidateControl('flashes');
    }
}
