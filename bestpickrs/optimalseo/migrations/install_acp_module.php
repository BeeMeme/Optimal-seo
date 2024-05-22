<?php
/**
 *
 * Optimal Seo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2024, P.J.Borgohain, https://bestpickrs.com/memberlist.php?mode=viewprofile&amp;u=2
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace bestpickrs\optimalseo\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['bestpickrs_optimalseo_goodbye']);
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_data()
	{
		return [
			['config.add', ['bestpickrs_optimalseo_goodbye', 0]],

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_OPTIMALSEO_TITLE'
			]],
			['module.add', [
				'acp',
				'ACP_OPTIMALSEO_TITLE',
				[
					'module_basename'	=> '\bestpickrs\optimalseo\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
