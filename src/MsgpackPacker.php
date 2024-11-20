<?php

namespace TheTrybe\Fluent\Logger;

use Fluent\Logger\Entity;
use Fluent\Logger\PackerInterface;

class MsgpackPacker implements PackerInterface
{
    public function pack(Entity $entity)
    {
        return msgpack_pack(array($entity->getTag(), $entity->getTime(), $entity->getData()));
    }
}
