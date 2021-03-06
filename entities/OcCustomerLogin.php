<?php


/**
 * OcCustomerLogin
 */
class OcCustomerLogin
{

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $total;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $customerLoginId;

    public function __construct($email, $ip, $total, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->email = $email;
        $this->ip = $ip;
        $this->total = $total;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
    }


}
