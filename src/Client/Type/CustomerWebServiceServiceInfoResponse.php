<?php

namespace Naugrim\WortmannSoapApi\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CustomerWebServiceServiceInfoResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private bool $Success;

    /**
     * @var string
     */
    private string $ErrorMesssage;

    /**
     * @var \Naugrim\WortmannSoapApi\Client\Type\ArrayOfServiceInfo
     */
    private \Naugrim\WortmannSoapApi\Client\Type\ArrayOfServiceInfo $ServiceInfos;

    /**
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return static
     */
    public function withSuccess(bool $Success) : static
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMesssage() : string
    {
        return $this->ErrorMesssage;
    }

    /**
     * @param string $ErrorMesssage
     * @return static
     */
    public function withErrorMesssage(string $ErrorMesssage) : static
    {
        $new = clone $this;
        $new->ErrorMesssage = $ErrorMesssage;

        return $new;
    }

    /**
     * @return \Naugrim\WortmannSoapApi\Client\Type\ArrayOfServiceInfo
     */
    public function getServiceInfos() : \Naugrim\WortmannSoapApi\Client\Type\ArrayOfServiceInfo
    {
        return $this->ServiceInfos;
    }

    /**
     * @param \Naugrim\WortmannSoapApi\Client\Type\ArrayOfServiceInfo $ServiceInfos
     * @return static
     */
    public function withServiceInfos(\Naugrim\WortmannSoapApi\Client\Type\ArrayOfServiceInfo $ServiceInfos) : static
    {
        $new = clone $this;
        $new->ServiceInfos = $ServiceInfos;

        return $new;
    }
}

