<?php
namespace Mb\CleanBlog\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Michael Blunck <mi.blunck@gmail.com>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Mb\CleanBlog\Controller\NetworkController.
 *
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class NetworkControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \Mb\CleanBlog\Controller\NetworkController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('Mb\\CleanBlog\\Controller\\NetworkController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllNetworksFromRepositoryAndAssignsThemToView()
	{

		$allNetworks = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$networkRepository = $this->getMock('Mb\\CleanBlog\\Domain\\Repository\\NetworkRepository', array('findAll'), array(), '', FALSE);
		$networkRepository->expects($this->once())->method('findAll')->will($this->returnValue($allNetworks));
		$this->inject($this->subject, 'networkRepository', $networkRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('networks', $allNetworks);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenNetworkToView()
	{
		$network = new \Mb\CleanBlog\Domain\Model\Network();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('network', $network);

		$this->subject->showAction($network);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenNetworkToNetworkRepository()
	{
		$network = new \Mb\CleanBlog\Domain\Model\Network();

		$networkRepository = $this->getMock('Mb\\CleanBlog\\Domain\\Repository\\NetworkRepository', array('add'), array(), '', FALSE);
		$networkRepository->expects($this->once())->method('add')->with($network);
		$this->inject($this->subject, 'networkRepository', $networkRepository);

		$this->subject->createAction($network);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenNetworkToView()
	{
		$network = new \Mb\CleanBlog\Domain\Model\Network();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('network', $network);

		$this->subject->editAction($network);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenNetworkInNetworkRepository()
	{
		$network = new \Mb\CleanBlog\Domain\Model\Network();

		$networkRepository = $this->getMock('Mb\\CleanBlog\\Domain\\Repository\\NetworkRepository', array('update'), array(), '', FALSE);
		$networkRepository->expects($this->once())->method('update')->with($network);
		$this->inject($this->subject, 'networkRepository', $networkRepository);

		$this->subject->updateAction($network);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenNetworkFromNetworkRepository()
	{
		$network = new \Mb\CleanBlog\Domain\Model\Network();

		$networkRepository = $this->getMock('Mb\\CleanBlog\\Domain\\Repository\\NetworkRepository', array('remove'), array(), '', FALSE);
		$networkRepository->expects($this->once())->method('remove')->with($network);
		$this->inject($this->subject, 'networkRepository', $networkRepository);

		$this->subject->deleteAction($network);
	}
}
