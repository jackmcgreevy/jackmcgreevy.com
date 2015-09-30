<?php
namespace Craft;

/**
 * Class EntryCountController
 */
class EntryCountController extends BaseController
{
    /**
     * Reset count
     */
    public function actionReset()
    {
        $entryId = craft()->request->getRequiredParam('entryId');

        craft()->entryCount->reset($entryId);

        craft()->userSession->setNotice(Craft::t('Entry count reset.'));

        $this->redirect('entrycount');
    }

}
