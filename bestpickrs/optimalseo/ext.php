<?php
namespace bestpickrs\optimalseo;

class ext extends \phpbb\extension\base
{
    public function enable_step($old_state)
    {
        switch ($old_state) {
            case '':
                // Run initial migration
                return 'm1';

            default:
                return parent::enable_step($old_state);
        }
    }

    public function disable_step($old_state)
    {
        return parent::disable_step($old_state);
    }

    public function purge_step($old_state)
    {
        return parent::purge_step($old_state);
    }
}
