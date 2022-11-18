<?php

namespace Weimob\Xinyun\Cloud\Msg\MemberCard;

use Weimob\Cloud\Msg\Common\WeimobMessage;
use Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,446
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface McMemberBecomeCustomerListener
{
    const topic = 'mc_member';
    const event = 'becomeCustomer';
    const classType = BecomeCustomerMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class BecomeCustomerMessage implements \JsonSerializable
{
    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
    {
        $this->wid = $wid;
    }

    /**
    * @return int
    */
    public function getWid(): ?int
    {
        return $this->wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

