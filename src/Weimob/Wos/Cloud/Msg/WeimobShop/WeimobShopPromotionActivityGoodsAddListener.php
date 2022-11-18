<?php

namespace Weimob\Wos\Cloud\Msg\WeimobShop;

use Weimob\Cloud\Msg\Common\WeimobMessage;
use Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,331
 * @author weimobcloud
 * @create 2022年11月18日
 */
interface WeimobShopPromotionActivityGoodsAddListener
{
    const topic = 'weimob_shop.promotion';
    const event = 'activityGoodsAdd';
    const classType = ActivityGoodsAddMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ActivityGoodsAddMessage implements \JsonSerializable
{
    /**
    * 活动id
    * @var int
    */
    private $activityId;

    /**
    * 活动类型，支持的类型包括：1-满减满折；2-满减邮；3-限时折扣；5-拼团；1001-特权价；1002-企业内购；11-支付推广；12-N元N件；1301-固定套装；1302-搭配套装；1401-单品换购；1402-订单换购；20-限量抢购；23-开屏推广；24-定金膨胀；25-阶梯价；32-满赠；37-第X件X折；38-渠道价；40-满减送；41-裂变内购；42-一口价；43-买单优惠；44-开单优惠；45-整单抹零；46-客群价。
    * @var int
    */
    private $activityType;

    /**
    * 商品id列表
    * @var array
    */
    private $goodsIdList;

    /**
    * @param int $activityId
    */
    public function setActivityId(?int $activityId)
    {
        $this->activityId = $activityId;
    }

    /**
    * @return int
    */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
    * @param int $activityType
    */
    public function setActivityType(?int $activityType)
    {
        $this->activityType = $activityType;
    }

    /**
    * @return int
    */
    public function getActivityType(): ?int
    {
        return $this->activityType;
    }

    /**
    * @param array $goodsIdList
    */
    public function setGoodsIdList(?array $goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
    * @return array
    */
    public function getGoodsIdList(): ?array
    {
        return $this->goodsIdList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

