<?php
namespace Mb\CleanBlog\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Michael Blunck <mi.blunck@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * NetworkController
 */
class NetworkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * networkRepository
     * 
     * @var \Mb\CleanBlog\Domain\Repository\NetworkRepository
     * @inject
     */
    protected $networkRepository = NULL;
    
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $networks = $this->networkRepository->findAll();
        $this->view->assign('networks', $networks);
    }
    
    /**
     * action show
     * 
     * @param \Mb\CleanBlog\Domain\Model\Network $network
     * @return void
     */
    public function showAction(\Mb\CleanBlog\Domain\Model\Network $network)
    {
        $this->view->assign('network', $network);
    }
    
    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     * 
     * @param \Mb\CleanBlog\Domain\Model\Network $newNetwork
     * @return void
     */
    public function createAction(\Mb\CleanBlog\Domain\Model\Network $newNetwork)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->networkRepository->add($newNetwork);
        $this->redirect('list');
    }
    
    /**
     * action edit
     * 
     * @param \Mb\CleanBlog\Domain\Model\Network $network
     * @ignorevalidation $network
     * @return void
     */
    public function editAction(\Mb\CleanBlog\Domain\Model\Network $network)
    {
        $this->view->assign('network', $network);
    }
    
    /**
     * action update
     * 
     * @param \Mb\CleanBlog\Domain\Model\Network $network
     * @return void
     */
    public function updateAction(\Mb\CleanBlog\Domain\Model\Network $network)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->networkRepository->update($network);
        $this->redirect('list');
    }
    
    /**
     * action delete
     * 
     * @param \Mb\CleanBlog\Domain\Model\Network $network
     * @return void
     */
    public function deleteAction(\Mb\CleanBlog\Domain\Model\Network $network)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->networkRepository->remove($network);
        $this->redirect('list');
    }

}