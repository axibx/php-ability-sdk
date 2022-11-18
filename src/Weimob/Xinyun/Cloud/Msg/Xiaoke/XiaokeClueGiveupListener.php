<?php

namespace Weimob\Xinyun\Cloud\Msg\Xiaoke;

use Weimob\Cloud\Msg\Common\WeimobMessage;
use Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,752
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface XiaokeClueGiveupListener
{
    const topic = 'xiaoke_clue';
    const event = 'giveup';
    const classType = GiveupMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GiveupMessage implements \JsonSerializable
{
    /**
    * 线索原所属人wid
    * @var array
    */
    private $keys;

    /**
    * 线索原所属人wid
    * @var int
    */
    private $owner;

    /**
    * 原因
    * @var string
    */
    private $reason;

    /**
    * 操作时间,时间戳
    * @var int
    */
    private $buildTime;

    /**
    * 操作用户wid
    * @var int
    */
    private $wid;

    /**
    * @param array $keys
    */
    public function setKeys(?array $keys)
    {
        $this->keys = $keys;
    }

    /**
    * @return array
    */
    public function getKeys(): ?array
    {
        return $this->keys;
    }

    /**
    * @param int $owner
    */
    public function setOwner(?int $owner)
    {
        $this->owner = $owner;
    }

    /**
    * @return int
    */
    public function getOwner(): ?int
    {
        return $this->owner;
    }

    /**
    * @param string $reason
    */
    public function setReason(?string $reason)
    {
        $this->reason = $reason;
    }

    /**
    * @return string
    */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
    * @param int $buildTime
    */
    public function setBuildTime(?int $buildTime)
    {
        $this->buildTime = $buildTime;
    }

    /**
    * @return int
    */
    public function getBuildTime(): ?int
    {
        return $this->buildTime;
    }

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

