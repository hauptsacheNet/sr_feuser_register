<?php
namespace SJBR\SrFeuserRegister\Utility;

/*
 *  Copyright notice
 *
 *  (c) 2015 Stanislas Rolland <typo3(arobas)sjbr.ca>
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
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 */

/**
 * HTML utility functions
 */

class HtmlUtility
{
	/**
	 * Removes HTML comments contained in input content string
	 *
	 * @param string $content: the input content
	 * @return string the input content with HTML comment removed
	 */
	static public function removeHTMLComments($content)
	{
		$result = preg_replace('/<!(?:--[\s\S]*?--\s*)?>[\t\v\n\r\f]*/', '', $content);
		return $result;
	}

	/**
	 * Replaces HTML br tags with line feeds in input content string
	 *
	 * @param string $content: the input content
	 * @return string the input content with HTML br tags replaced
	 */
	static public function replaceHTMLBr($content)
	{
		$result = preg_replace('/<br\s?\/?>/', LF, $content);
		return $result;
	}

	/**
	 * Removes all HTML tags from input content string
	 *
	 * @param string $content: the input content
	 * @return string the input content with HTML tags removed
	 */
	static public function removeHtmlTags($content)
	{
		// Preserve <http://...> constructs
		$result = str_replace('<http', '###http', $content);
		$result = strip_tags($result);
		$result = str_replace('###http', '<http', $result);
		return $result;
	}

	/**
	 * Removes superfluous line feeds from input content string
	 *
	 * @param string $content: the input content
	 * @return string the input content with superfluous fine feeds removed
	 */
	static public function removeSuperfluousLineFeeds($content)
	{
		$result = preg_replace('/[' . preg_quote(LF . CR) . ']{2,}/', LF, $content);
		$result = preg_replace('/[' . preg_quote(LF) . ']{3,}/', LF, $result);
		return $result;
	}
}