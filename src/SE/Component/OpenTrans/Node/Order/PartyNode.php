<?php
/**
 * This file is part of the OpenTrans php library
 *
 * (c) Sven Eisenschmidt <sven.eisenschmidt@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SE\Component\OpenTrans\Node\Order;

use JMS\Serializer\Annotation as Serializer;

use SE\Component\OpenTrans\Node\AbstractNode;

/**
 * @package SE\Component\OpenTrans
 * @author  Sven Eisenschmidt <sven.eisenschmidt@gmail.com>
 *
 * @Serializer\XmlRoot("PARTY")
 * @Serializer\ExclusionPolicy("all")
 */
class PartyNode extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("PARTY_ID")
     * @Serializer\Type("SE\Component\OpenTrans\Node\Order\PartyIdNode")
     *
     * @var PartyIdNode
     */
    protected $partyId;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("ADDRESS")
     * @Serializer\Type("SE\Component\OpenTrans\Node\Order\AddressNode")
     *
     * @var AddressNode
     */
    protected $address;

    /**
     *
     * @param PartyIdNode $partyId
     */
    public function setPartyId(PartyIdNode $partyId)
    {
        $this->partyId = $partyId;
    }

    /**
     *
     * @return PartyIdNode
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     *
     * @param AddressNode $address
     */
    public function setAddress(AddressNode $address)
    {
        $this->address = $address;
    }

    /**
     *
     * @return AddressNode
     */
    public function getAddress()
    {
        return $this->address;
    }
}
