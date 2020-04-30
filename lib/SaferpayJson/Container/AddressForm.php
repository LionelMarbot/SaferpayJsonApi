<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AddressForm
{
    const MANDATORY_FIELD_CITY = 'CITY';
    const MANDATORY_FIELD_COMPANY = 'COMPANY';
    const MANDATORY_FIELD_COUNTRY = 'COUNTRY';
    const MANDATORY_FIELD_EMAIL = 'EMAIL';
    const MANDATORY_FIELD_FIRSTNAME = 'FIRSTNAME';
    const MANDATORY_FIELD_LASTNAME = 'LASTNAME';
    const MANDATORY_FIELD_PHONE = 'PHONE';
    const MANDATORY_FIELD_SALUTATION = 'SALUTATION';
    const MANDATORY_FIELD_STATE = 'STATE';
    const MANDATORY_FIELD_STREET = 'STREET';
    const MANDATORY_FIELD_ZIP = 'ZIP';

    /**
     * @var bool
     * @SerializedName("Display")
     */
    protected $display;

    /**
     * @var array<string>
     * @SerializedName("MandatoryFields")
     */
    protected $mandatoryFields = [];

    public function __construct(bool $display = true)
    {
        $this->display = $display;
    }

    public function isDisplay(): bool
    {
        return $this->display;
    }

    public function setDisplay(bool $display): self
    {
        $this->display = $display;

        return $this;
    }

    public function getMandatoryFields(): array
    {
        return $this->mandatoryFields;
    }

    public function setMandatoryFields(array $mandatoryFields): self
    {
        $this->mandatoryFields = $mandatoryFields;

        return $this;
    }
}