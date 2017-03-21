<?php

namespace Mb\CleanBlog\Tests\Unit\Domain\Model;

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
 * Test case for class \Mb\CleanBlog\Domain\Model\Network.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class NetworkTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Mb\CleanBlog\Domain\Model\Network
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Mb\CleanBlog\Domain\Model\Network();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLink()
		);
	}

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink()
	{
		$this->subject->setLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'link',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIconReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setIconForIntSetsIcon()
	{	}
}
