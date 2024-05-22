<?php
/**
 *
 * Optimal Seo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2024, P.J.Borgohain, https://bestpickrs.com/memberlist.php?mode=viewprofile&amp;u=2
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace bestpickrs\optimalseo\acp;

/**
 * Optimal Seo ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\bestpickrs\optimalseo\acp\main_module',
			'title'		=> 'ACP_OPTIMALSEO_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_OPTIMALSEO',
					'auth'	=> 'ext_bestpickrs/optimalseo && acl_a_board',
					'cat'	=> ['ACP_OPTIMALSEO_TITLE'],
				],
			],
		];
	}
}
