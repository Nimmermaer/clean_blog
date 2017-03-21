<?php
namespace Mb\CleanBlog\DataProcessing;


/***************************************************************
 *  Copyright notice
 *  (c) 2016 Michael Blunck <mi.blunck@gmail.com>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;


/**
 * Class PageProcessor
 * @package Mb\CleanBlog\DataProcessing
 */
class PageProcessor implements DataProcessorInterface
{


    /**
     * @param ContentObjectRenderer $cObj
     * @param array                 $contentObjectConfiguration
     * @param array                 $processorConfiguration
     * @param array                 $processedData
     *
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {

        if (method_exists($this, $processorConfiguration['method'])) {
            $templateName                 = $processorConfiguration['partial'];
            $processedData[$templateName] = call_user_func(array(
                $this,
                $processorConfiguration['method'],
            ), $processedData);
        }

        return $processedData;
    }

    /**
     * @param $processedData
     *
     * @return string
     */
    public function listSocialElements($processedData)
    {
        $objectManager  =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository     = $objectManager->get('Mb\\CleanBlog\\Domain\\Repository\\NetworkRepository');
        $socialElements = $repository->findByPage($processedData['data']['uid']);
        if ( ! count($socialElements)) {
            foreach ($GLOBALS['TSFE']->rootLine as $page) {
                if ($page['is_siteroot'] == 1) {
                    $rootLineInfos = $page;
                    break;
                }
            }
            $socialElements = $repository->findByPage($rootLineInfos['uid']);
        }


        return $socialElements;
    }

}
