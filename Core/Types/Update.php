<?php
namespace TelegramBot\Core\Types;
use stdClass;
class Update{
    public $id;
    public $object;
    public function __construct(stdClass $update) {
        $this->id = $update->update_id;
    }
}